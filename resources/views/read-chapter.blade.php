<html>
<head>
<title>Book Reader</title>
</head>
<body style="background-color:BurlyWood;">
<h1 style="text-align:center; font-family:Arial; color:#996600;">{{ $version_of_bible }}</h1>
<h2 style="text-align:center; font-family:Georgia; color:#660000;">{{ $name_of_book }}</h2><hr><br>

@for($i = 1; $i <= $number_of_chapters; $i++)
<a style="font-family:Helvetica;" href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
@endfor
<br><br>

<pre style="font-family:Verdana;">
@include("chapter" . $chapter_number)
</pre>

</body>
</html>