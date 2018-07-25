<h1>Shoutout to: {{$text}}</h1>



@if($text=="gwapo")
	<h1>Gwapo</h1>
@elseif($text=="servelle")
	<h1>Gwapa</h1>
@endif


{{ $colors[0] }}
<br/>
{{ $colors[1] }}
<br/>
{{ $colors[2]}}
<br/>
<br/>
<br/>

/*
@foreach($colors as $color)
	{{ $color }}
	<br/>
@endforeach
*/



/*
@foreach($colors as $color => $description)
		{{	$color }} - {{	$description }}

		<br/>
@endforeach
*/

