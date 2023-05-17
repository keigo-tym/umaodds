<html>
<head>
    <title>@yield('title')</title>
    <style>
    body {font-size:16pt; color:#999; margin: 5px;}
    h1 {font-size:50pt; text-align:right; color:aqua; margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    ul {font-size:12pt;}
    hr {margin:25px 100px; border-top:1px dashed #ddd;}
    .menutitle {font-size:14pt; font-weight:bold; margin:0px;}
    .content {margin:10px;}
    .footer {text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color: #ccc}
    .toppage {font-size: 16pt; color: #999;}
    th {background-color:orange; color: fff; padding:5px 10px;}
    td {border: solid 1px #aaa; color:#999; padding:5px 10px;}
    canvas#lineChart {
        max-width: 700px;
        max-height: 500px;
        background-color: #eaeaea;
    }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    {{-- race.indexへ戻るリンク --}}
    <a class="toppage" href="{{ route('race.index') }}">Go to top</a>
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>