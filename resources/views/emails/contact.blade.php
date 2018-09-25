<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Contact email</title>
	<body>
		<table>
		@foreach($content as $key => $item)
			<tr>
				<td style="font-weight: bold; font-style: italic;">{{$key}}: </td>
				<td>{{$item}}</td>
			</tr>
		@endforeach
		</table>
	</body>
</html>