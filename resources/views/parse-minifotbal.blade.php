<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

<div>
	{!! $data !!}
</div>

<script>
	let element = document.getElementsByClassName('clearfix')[4];
	let url = '{{ $url }}';
	let etapa = url.slice(-2);

	let finalObject = [];
	let elements = [];

	let content = {
		data: '2019-00-00',
		ora: '00:00',
		gazde: null,
		oaspeti: null,
		g_gazde: null,
		g_oaspeti: null,
		liga: 1,
		serie: 'minifotbal',
		sezon: '2019/2020',
		etapa: null,
	};

	for (var i=0; i<element.childNodes.length; i++) {
	  	var child = element.childNodes[i];
	  	if(i > 3 && i < element.childNodes.length-1) {
			// let defaultContent = content;
	  		for (var j=0; j<child.childNodes.length; j++) {
	  			var c = child.childNodes[j];
	  			if(j == 5) {
	  				content.etapa = parseInt(etapa);
	  				content.gazde = c.textContent;
	  			}
	  			
	  			if(j == 9) {
	  				content.oaspeti = c.textContent;
	  			}
	  			
	  		}
	  		elements.push(content);
	  		content = {
				data: '2019-00-00',
				ora: '00:00',
				gazde: null,
				oaspeti: null,
				g_gazde: null,
				g_oaspeti: null,
				liga: 1,
				serie: 'minifotbal',
				sezon: '2019/2020',
				etapa: null,
			};
	  	}
	}

	console.log(JSON.stringify(elements));

</script>