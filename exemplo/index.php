<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o Nível de Dificuldade</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="grau">Escolha um nível de dificuldade:</label>
        <select name="grau" id="grau">
            <option value="1">Fácil</option>
            <option value="2">Intermediário</option>
            <option value="3">Difícil</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
