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

        Nome : <input required name = "Nome"type="text"> <span class ="error">*</span> <br><br>
        E-mail : <input required name = "Email"type="email"> <span class ="error">*</span> <br><br>
        WebSite : <input required name = "Website"type="url"> <br><br>
        Comentário: <textarea name="Comentário" cols="30" rows="3"></textarea>
        <br><br>
        Gênero: 
        <input name = "genero" value = "Masculino" type="radio"> Masculino 
        <input name = "genero" value = "Feminino" type="radio"> Feminino
        <input name = "genero" value = "Outro" type="radio"> Outro
        <br><br>
        <button name = "enviado" type = "submit">Enviar</button>
        <h1>Dados enviados:</h1>
        <?php
        if (isset($_POST['enviado'])) {
            $genero = "Não selecionado";

            if(isset($_POST['genero'])) {
                $genero = $_POST['genero'];
                
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