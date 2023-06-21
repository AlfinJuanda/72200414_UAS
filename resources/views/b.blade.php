<!DOCTYPE html>
<html>
<head>
    <title>Halaman B</title>
</head>
<body>
    <p>Game Kesukaan Dosen UKDW</p>
    <p>Game yang dipilih:</p>
    <ul>
        @foreach($values as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>
