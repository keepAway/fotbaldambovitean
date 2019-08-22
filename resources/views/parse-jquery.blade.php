<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

<div>
	{!! $data !!}
</div>

{{-- {{$liga}} 
{{$serie}}
{{$etapa}} --}}

<script>
	function formatDate(date) {
	    var d = new Date(date),
	        month = '' + (d.getMonth() + 1),
	        day = '' + d.getDate(),
	        year = d.getFullYear();

	    if (month.length < 2) month = '0' + month;
	    if (day.length < 2) day = '0' + day;

	    return [year, month, day].join('-');
	}

	var jocuri_pe_etapa = 5;
	for (var i = 1; i <= jocuri_pe_etapa; i++) {
		var liga  = 8;
		var serie = null;
		var etapa = '{{$etapa}}';

		var data_ora = $('#page_wrapper .panel-calendar-match:nth-child('+i+')').find('.matchCompetitionList:first').text();
		var data_ora = data_ora.split(',');
		var data = data_ora[1] == ' hh:mm' ? null : formatDate(data_ora[1]);
		var ora = data_ora[2] == undefined ? null : data_ora[2].trim();

		var gazde = $('#page_wrapper .panel-calendar-match:nth-child('+i+')').find('.matchTeamList a:first').text();
		var oaspeti = $('#page_wrapper .panel-calendar-match:nth-child('+i+')').find('.matchTeamList a:nth-child(3)').text();
		var scor = $('#page_wrapper .panel-calendar-match:nth-child('+i+')').find('.matchScoreList a:first').text();
		scor = (scor.trim() == '?-?' ? null : scor);

		var g_gazde   = null;
		var g_oaspeti = null;

		if(scor != null) {
			var rezultat = scor.split('-');
			g_gazde   = rezultat[0].trim();
			g_oaspeti = rezultat[1].trim();
		}

		console.log('\'data\' => '  + (data == null  ? null : '\'' + data + '\'') +',');
		console.log('\'ora\'  => '  + (ora  == null  ? null : '\'' + ora + '\'') + ',');
		console.log('\'gazde\'' + ' => ' + (gazde == ''  ? null : '\'' + gazde + '\'') + ',');
		console.log('\'oaspeti\'' + ' => ' + (oaspeti == ''  ? null : '\'' + oaspeti) + '\'' + ',');
		console.log('\'g_gazde\'' + ' => ' + g_gazde + ',');
		console.log('\'g_oaspeti\'' + ' => ' + g_oaspeti + ',');
		console.log('\'liga\' => ' + liga + ',');
		console.log('\'serie\' => ' + '\'' + serie + '\'' + ',');
		console.log('\'sezon\' => ' + '\'2019/2020\'' + ',');
		console.log('\'etapa\' => ' + etapa + ',');
		
		console.log('],[');

		/*if(i % 2 != 0) {
			console.log($('.matchCompetitionList').text());
			var data  = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(1)').text();
			var ora   = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(2)').text();

			// console.log(data, ora);

			console.log('[');
			console.log('\'data\' =>'  + (data        == ''  ? null : '\'' + data + '\'') +',');
			console.log('\'ora\'  =>'  + (ora         == ''  ? null : '\'' + ora) + '\'' + ',');

			var liga  = '{{$liga}}';
			var serie = '{{$serie}}';
			var etapa = '{{$etapa}}';

			console.log('\'liga\'  =>'  + liga +',');
			console.log('\'serie\' =>'  + (serie != '' ? '\'' + serie + '\'' : null) +',');
			console.log('\'etapa\' => '  + etapa +',');
		} 

		if(i % 2 == 0) {
			console.log($('.matchCompetitionList').text());
			var gazde   = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(1)').text();
			var scor    = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(2)').text();
			var oaspeti = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(3)').text();

			// console.log(gazde, scor, oaspeti);

			scor = (scor.trim() == '-' ? null : scor);

			var g_gazde   = null;
			var g_oaspeti = null;

			if(scor != null) {
				var rezultat = scor.split('-');
				g_gazde   = rezultat[0].trim();
				g_oaspeti = rezultat[1].trim();
			}

			console.log('\'gazde\''     + '=>' + (gazde       == ''  ? null : '\'' + gazde + '\'') + ',');
			console.log('\'g_gazde\''   + '=>' + g_gazde + ',');
			console.log('\'oaspeti\''   + '=>' + (oaspeti     == ''  ? null : '\'' + oaspeti) + '\'' + ',');
			console.log('\'g_oaspeti\'' + '=>' + g_oaspeti + ',');
			console.log('],');

		}*/

	}
</script>