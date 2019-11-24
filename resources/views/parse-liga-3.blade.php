<script src="https://momentjs.com/downloads/moment.js" async></script>

<div>
	{!! $data !!}
</div>

<script>
	let etapa = document.getElementsByClassName('box_title_red')[0].innerText.split('Etapei ')[1].trim();
	let table = document.getElementsByClassName('table_meciuri_w')[0];

	let row = '';
	let date_time = '';
	let gazde = '';
	let scor = '';
	let oaspeti = '';
	let date = '';
	let ora = '';

	let content = {
		data: '2019-00-00',
		ora: '00:00',
		gazde: null,
		oaspeti: null,
		g_gazde: null,
		g_oaspeti: null,
		liga: 3,
		serie: 1,
		sezon: '2019/2020',
		etapa: null,
	};

	let elements = [];

	for (var i=0; i<table.rows.length; i++) {
		row = table.rows[i];
		for (var j=0; j<row.childNodes.length; j++) {
			// 1 date time
			// 5 gazde
			// 7 scor
			// 9 oaspeti
			date_time = row.childNodes[1].outerText.split(' ');
			gazde     = row.childNodes[5].outerText;
			scor      = row.childNodes[7].outerText;
			oaspeti   = row.childNodes[9].outerText;
		}

		data = moment(date_time[0] + ' ' + date_time[1] + ' ' + date_time[2]).format('YYYY-MM-DD');
		ora = date_time[3];

		scor      = scor.split('-');
		g_gazde   = scor[0].trim();
		g_oaspeti = scor[1].trim();

		content.data      = data;
		content.ora       = ora;
		content.gazde     = gazde.trim();
		content.oaspeti   = oaspeti.trim();
		content.g_gazde   = g_gazde != '' ? parseInt(g_gazde) : null;
		content.g_oaspeti = g_oaspeti != '' ? parseInt(g_oaspeti) : null;
		content.etapa     = parseInt(etapa);

		elements.push(content);

		content = {
			data: '2019-00-00',
			ora: '00:00',
			gazde: null,
			oaspeti: null,
			g_gazde: null,
			g_oaspeti: null,
			liga: 3,
			serie: 1,
			sezon: '2019/2020',
			etapa: null,
		};
	}

	console.log(JSON.stringify(elements));

</script>