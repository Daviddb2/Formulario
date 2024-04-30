<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color:red;
        }
    </style>
</head>
<body>
    <form method = "post"action="">
        <h1>Formulário PHP</h1>

        <p class ="error">* Obrigatório</p>

        Nome : <input name = "Nome"type="text"> <span class ="error">*</span> <br><br>
        E-mail : <input name = "Email"type="email"> <span class ="error">*</span> <br><br>
        WebSite : <input name = "Website"type="url"> <br><br>
        Comentário: <textarea name="Comentário" cols="30" rows="3"></textarea>
        <br><br>
        Gênero: 
        <input name = "genero" value = "Masculino" type="radio"> Masculino 
        <input name = "genero" value = "Feminino" type="radio"> Feminino
        <input name = "genero" value = "Outros" type="radio"> Outro
        <br><br>
        <button name = "enviado" type = "submit">Enviar</button>
        <h1>Dados enviados:</h1>
        <?php
        if (isset($_POST['enviado'])) {

            if (empty($_POST['Nome']) || strlen($_POST['Nome']) < 3 || strlen($_POST['Nome']) > 100) {
                echo '<p class="error">Preencha o campo nome</p>';
                die();
            }

            if (empty($_POST['Email']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                echo '<p class="error">Preencha o campo e-mail</p>';
                die();
            }

            if (!empty($_POST['Website']) && !filter_var($_POST['Website'], FILTER_VALIDATE_URL)) {
                echo '<p class="error">Preencha corretamente o campo Website</p>';
                die();

            }

            $genero = "Não selecionado"; 
            if (isset($_POST['genero'])) {
                $genero = $_POST['genero'];
                if ($genero != "Masculino" && $genero !="Feminino" && $genero !="Outros"){
                    echo '<p class="error">Preencha corretamente o campo Gênero</p>';
                    die();
                }
            }

            echo "<p><b>Nome : </b>" . $_POST['Nome'] . "</p>";
            echo "<p><b>E-mail : </b>" . $_POST['Email'] . "</p>";
            echo "<p><b>WebSite : </b>" . $_POST['Website'] . "</p>";
            echo "<p><b>Comentário : </b>" . $_POST['Comentário'] . "</p>";
            echo "<p><b>Gênero : </b>" . $genero . "</p>";
        }
        ?>
    </form>   
</body>
</html>