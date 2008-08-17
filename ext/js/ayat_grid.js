createGrid = function(){
	var cm = new Ext.grid.ColumnModel([
		{header: 'ayat_no',  dataIndex: 'ayat_no'},
		{header: 'sura',  dataIndex: 'sura'},
		{header: 'sura_name',  dataIndex: 'sura_name'},
		{header: 'ayat',  dataIndex: 'ayat'},
		{header: 'para',  dataIndex: 'para'},
		{header: 'ruku',  dataIndex: 'ruku'}
	]);

	var ds = new Ext.data.Store({
		proxy: new Ext.data.HttpProxy({url: 'ajax/ayat_json.php'}),
		reader: new Ext.data.JsonReader(
		{id: 1,
		totalProperty:'totalCount',
		root:'rows',
		fields:[
			{name: 'ayat_no'},
			{name: 'sura'},
			{name: 'sura_name'},
			{name: 'ayat'},
			{name: 'para'},
			{name: 'ruku'}
		]})
	});
	var grid = new Ext.grid.GridPanel({
			ds: ds,
			cm: cm,
			height:600,
			title:'ayat',
			renderTo: 'grid_ayat',
			bbar: new Ext.PagingToolbar({
				store:ds,
				displayInfo:true,
				pageSize:12
			})
	});
	ds.load({params:{start:0,limit:12}});
	return grid;
}
