<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Import View</title>
</head>
<body>

<h1>Upload een CSV-bestand en importeer de gegevens in de database (tabel: sharesquares)</h1>

<!-- @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif -->

<form method="post" enctype="multipart/form-data" action="{{ url('/api/import-csv') }}">
    @csrf
    <input name="file" type="file" required/>
    <label for="file">Upload CSV-bestand</label>
    <button type="submit">Bestand Invoeren</button>
</form>

</body>
</html>
