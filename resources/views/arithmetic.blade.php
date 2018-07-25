<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@if($operation=="add")
	<h1>Operation: Addition</h1>
	<h3>Addend: {{$num1}} </h3>
	<h3>Addend: {{$num2}}</h3>
	<h2>Sum:	{{$sum}}</h2>

@elseif($operation=="sub")
	<h1>Operation: Subtraction</h1>
	<h3>Minuend: {{$num1}} </h3>
	<h3>Subtrahend: {{$num2}}</h3>
	<h2>Difference:	{{$diff}}</h2>

@elseif($operation=="prod")
	<h1>Operation: Multiplication</h1>
	<h3>Minuend: {{$num1}} </h3>
	<h3>Subtrahend: {{$num2}}</h3>
	<h2>Difference:	{{$prod}}</h2>

@elseif($operation=="quo")
	<h1>Operation: Division</h1>
	<h3>Minuend: {{$num1}} </h3>
	<h3>Subtrahend: {{$num2}}</h3>
	<h2>Difference:	{{$quo}}</h2>

@endif

</body>
</html>