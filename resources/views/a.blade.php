<!DOCTYPE html>
<html>
<head>
    <title>Halaman A</title>
</head>
<body>
    {{-- <form action="{{ route('process-form') }}" method="GET">
        <label>
            <input type="radio" name="option" value="pria">  pria
        </label>
        <label>
            <input type="radio" name="option" value="waria"> waria
        </label>
        <button type="submit">Submit</button>
    </form> --}}
    <form action="{{ route('process-form') }}" method="POST" enctype="multipart/form-data">
        <label><H3>Pilihan Game Dosen UKDW</H3></label>
        @csrf
        <label for="checkbox">Pilih satu atau lebih nilai:</label><br>
        <input type="checkbox" name="values[]" value="Mobile Legend"> Mobile legend<br>
        <input type="checkbox" name="values[]" value="Valorant"> Valorant<br>
        <input type="checkbox" name="values[]" value="PUBG"> PUBG<br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
