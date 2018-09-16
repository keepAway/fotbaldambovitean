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
	
	for (var i = 1; i <= 18; i++) {
		
		if(i % 2 != 0) {
			var data  = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(1)').text();
			var ora   = $('.side-border::nth-child(4) > table > tbody > tr:nth-child(' + i + ') > td:nth-child(2)').text();

			// console.log(data, ora);

			console.log('[');
			console.log('data => ' + (data        == ''  ? null : '\'' + data + '\'') +',');
			console.log('ora  => ' + (ora         == ''  ? null : '\'' + ora) + '\'' + ',');

			var liga  = '{{$liga}}';
			var serie = '{{$serie}}';
			var etapa = '{{$etapa}}';

			console.log('liga  => ' + liga +',');
			console.log('serie => ' + (serie != '' ? '\'' + serie + '\'' : null) +',');
			console.log('etapa => ' + etapa +',');
		} 

		if(i % 2 == 0) {
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

			console.log('gazde'     + '=>' + (gazde       == ''  ? null : '\'' + gazde + '\'') + ',');
			console.log('g_gazde'   + '=>' + g_gazde + ',');
			console.log('oaspeti'   + '=>' + (oaspeti     == ''  ? null : '\'' + oaspeti) + '\'' + ',');
			console.log('g_oaspeti' + '=>' + g_oaspeti + ',');
			console.log('],');

		}

	}
</script>