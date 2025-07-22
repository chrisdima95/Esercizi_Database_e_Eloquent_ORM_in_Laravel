<!DOCTYPE html>
<html>
<head>
    <title>Crea Prodotto</title>
</head>
<body>

<h1>Crea un nuovo prodotto</h1>

<form action="{{ route('prodotti.salva') }}" method="POST">
    @csrf

    <label>Nome prodotto:</label>
    <input type="text" name="nome" value="{{ old('nome') }}">
    @error('nome')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br><br>

    <label>Prezzo:</label>
    <input type="text" name="prezzo" value="{{ old('prezzo') }}">
    @error('prezzo')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br><br>

    <label>Descrizione prodotto:</label><br>
    <textarea name="descrizione">{{ old('descrizione') }}</textarea><br><br>

    <button type="submit">Salva Prodotto</button>
</form>

</body>
</html>
