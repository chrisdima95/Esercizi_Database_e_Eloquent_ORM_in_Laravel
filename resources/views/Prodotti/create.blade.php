<!DOCTYPE html>
<html>
<head>
    <title>Crea Prodotto</title>
    <style>
        .error-message {
            color: red;
            margin-top: 4px;
            margin-bottom: 8px;
            font-size: 0.9em;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }
        input, textarea {
            width: 300px;
            padding: 6px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        button {
            margin-top: 16px;
            padding: 10px 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Crea un nuovo prodotto</h1>

    <form action="{{ route('prodotti.salva') }}" method="POST">
        @csrf

        <label for="nome">Nome prodotto:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
        @error('nome')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="prezzo">Prezzo:</label>
        <input type="text" id="prezzo" name="prezzo" value="{{ old('prezzo') }}">
        @error('prezzo')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="descrizione">Descrizione prodotto:</label>
        <textarea id="descrizione" name="descrizione">{{ old('descrizione') }}</textarea>

        <button type="submit">Salva Prodotto</button>
    </form>

</body>
</html>
