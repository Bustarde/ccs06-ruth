<html>
<head>
<title>Book Reader</title>
</head>
<body style="background-color:BurlyWood;">
<h1 style="text-align:center; font-family:Arial; color:#996600;">{{ $version_of_bible }}</h1>
<h2 style="text-align:center; font-family:Georgia; color:#660000;">{{ $name_of_book }}</h2><hr>

@for($i = 1; $i <= $number_of_chapters; $i++)
<br>
<h3 style= "text-align:center; font-family:Helvetica;">Chapter {{ $i }}</h3>

<pre style="font-family:Verdana;">
@include("chapter{$i}")
</pre>
@endfor

</body>
</html>