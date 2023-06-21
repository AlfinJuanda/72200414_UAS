<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
    <style>
        .night-background {
            background-color: #000;
            color: #fff;
        }

        .morning-background {
            background-color: #f7f7f7;
            color: #000;
        }

        .afternoon-background {
            background-color: #ffcc00;
            color: #000;
        }

        .evening-background {
            background-color: #9900cc;
            color: #fff;
        }
    </style>
</head>
<body class="{{ $background }}">
    <h1>{{ $greeting }}</h1>
    <p>{{ $waktu }}</p>
</body>
</html>
