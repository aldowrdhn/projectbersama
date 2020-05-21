<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <h1>Data Karyawan</h1>
    <ul>
        @foreach ($karyawan as $tampil)
        <li>{{ $tampil }}</li>
        @endforeach
    </ul>
    <div>
        <img src="/img/a.png" width="50%">
        <img src="/img/a.png" width="50%">
        <img src="/img/a.png" width="50%">
        <img src="/img/a.png" width="50%">
    </div>
    <div>
        <small>Copyright 2020 PT Ambyar</small>
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>