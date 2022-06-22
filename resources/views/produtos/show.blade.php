<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Produtos</title>
</head>
<body>
    <label for="">Nome</label>
    <br><br>
    <input type="text" name="nome" value="{{ $produto->nome}}">
    <br><br>
    <label for="">Valor</label>
    <br><br>
    <input type="text" name="valor" value="{{ $produto->valor }}">
    <br><br>
    <label for="">quantidade</label>
    <br><br>
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}">
    <br><br>
    </form>
</body>
</html>