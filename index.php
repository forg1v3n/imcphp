<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Calculadora de IMC</title>
</head>

<body>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            text-align: center;
            background-color: #d62828;
            color: white;

        }

        .footer,
        a,
        h5 {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: white;
        }
    </style>

    <form method="GET">
        <span>Digite seu Nome:</span>
        <input type="text" name="nome" placeholder="Seu nome" required>
        <br />

        <span>Digite sua Altura em CM:</span>
        <input type="text" name="altura" placeholder="Sua Altura" required>
        <br />

        <span>Digite seu peso em GRAMAS:</span>
        <input type="text" name="peso" placeholder="Seu peso" required>
        <br />
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if (isset($_GET["enviar"])) {
        $nome = $_GET["nome"];
        $altura = $_GET["altura"] / 100;
        $peso = $_GET["peso"] / 1000;

        $imc = $peso / ($altura * $altura);

        echo "<br/><h2> Olá " . $nome . "</h2><p>O seu IMC é: " . $imc . "</p>";
    }

    ?>

    <div class="footer">
        <h5>For learning purposes! 🤓</h5>
    </div>

</body>

</html>