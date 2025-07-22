<!DOCTYPE html>
<html>
<head>
    <title>Elenco Prodotti</title>
</head>
<body>

@if (session('success'))
    <p style="color:green; font-weight:bold;">
        {{ session('success') }}
    </p>
@endif

<h1>Elenco di prodotti</h1>

<ul>
@foreach ($prodotti as $prodotto)
    <li>
        <strong>{{ $prodotto->nome }}</strong> - €{{ number_format($prodotto->prezzo, 2) }}<br>
        Descrizione: {{ $prodotto->descrizione ?? 'Nessuna descrizione' }}
    </li>
@endforeach
</ul>

</body>
</html>
