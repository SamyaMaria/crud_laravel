<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar produto</title>
</head>
<body>
    <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <br><br>
        <input type="text" name="nome" value="{{ $produto->nome }}">
        <br><br>
        <label for="">Valor</label>
        <br><br>
        <input type="text" name="valor" value="{{ $produto->valor }}">
        <br><br>
        <label for="">Quantidade</label>
        <br><br>
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}">
        <br><br>
        <button>Salvar</button>
        </form>
</body>
</html>