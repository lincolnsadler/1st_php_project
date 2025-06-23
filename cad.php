<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado do processamento</h1>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Ainda sem conhecimento de estrutura de condição!" ;
            $sobrenome = $_GET["sobrenome"] ?? "...
            ";

            echo "<p>É um prazer te conhecer <strong>${nome} ${sobrenome}</strong>, você preencheu o formulário!</p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>