<html>
<head>
<title>Book Reader</title>
</head>
<body style="background-color:BurlyWood;">
<h1 style="text-align:center; font-family:Arial; color:#996600;">{{ $version_of_bible }}</h1>
<h2 style="text-align:center; font-family:Georgia; color:#660000;">{{ $name_of_book }}</h2><hr><br>
<h3 style="text-align:center; font-family:Helvetica;">Chapters<h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h4 style="text-align:center; font-family:Helvetica;">
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h4>
@endfor

<h4 style="text-align:center; font-family:Helvetica;">
    <a href="/all-chapters">Read All Chapters</a>
</h4>

</body>
</html>