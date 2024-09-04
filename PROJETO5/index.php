<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Inscrição</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <h1>Formulário de Inscrição</h1>
    <form method="GET" action="cadastro.php">
        <!-- Campo de texto para matrícula -->
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula"><br><br>

        <!-- Campo de texto para nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <!-- Campo drop-down para curso -->
        <label for="curso">Curso:</label>
        <select id="curso" name="curso">
            <option value="SI">Sistemas de Informação (SI)</option>
            <option value="TADS">Tecnologia em Análise e Desenvolvimento de Sistemas (TADS)</option>
            <option value="ENG">Engenharia  de Software (ENG)</option>
        </select><br><br>

        <!-- Botões de rádio para turno -->
        <label>Turno:</label><br>
        <input type="radio" id="matutino" name="turno" value="matutino">
        <label for="matutino">Matutino</label><br>
        <input type="radio" id="vespertino" name="turno" value="vespertino">
        <label for="vespertino">Vespertino</label><br>
        <input type="radio" id="noturno" name="turno" value="noturno">
        <label for="noturno">Noturno</label><br><br>

        <!-- Botão de submissão -->
        <input type="submit" value="Enviar" class="btn btn-dark">
    </form>
</body>
</html>