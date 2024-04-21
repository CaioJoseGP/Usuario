<?php
include("../model/Conexao.php");
include("../controller/Usuario");
include("../model/UsuarioDAO.php");

if (!empty($_POST)){
    $usuario = new Usuario();
    $usuario->set("nome", $_POST["nome"]);
    $usuario->set("apelido", $_POST["apelido"]);
    $usuario->set("obs", $_POST["obs"]);

    foreach($_POST as  $chave => $campo){
        if($campo == "Gravar"){
            $usuario->cadastrar();
        }

        if($campo == "Excluir"){
            $usuario->set("id", $_POST["id"]);
            $usuario->excluir();
        }
    }
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario</title>
        <style>
            table, th, td {
                border: 1px solid #ddd;
                padding: 8px;
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
            }

            table {
                overflow-x:auto;   
            }

            tr:nth-child(even){
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #ddd;
            }

            th {
                text-align: left;
                background-color: white;
            }

            .button {
                background-color: lightgray;
                font-family: Arial, Helvetica, sans-serif;
                border: none;
                color: black;
                padding: 7px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>

        <script src="biblioteca_a.js"></script>
    </head>
    <body>
        <form name="frmUsuario" method="POST" action="">
            ID.: <input type="number" id="id" name="id"><br>
            Nome: <input type="text" id="nome" name="nome"><br>
            Apelido: <input type="text" id="apelido" name="apelido"><br>
            Obs.: <textarea id="obs" name="obs" maxlength="200"></textarea><br>
            <input class='button' type='submit' id='gravar' name='gravar' value='Gravar'>
            <input class='button' type='reset' id='cancelar' name='cancelar' value='Cancelar'>

            <br><br><br>

            <table id='tbl' border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>OBS</th>
                    <th>&emsp;</th>
                    <th>&emsp;</th>
                </tr>
        
                <?php
                $usuario = new Usuario();

                if($usuario->pesquisar() != null){
                    foreach ($usuario->pesquisar() as $valor){
                        echo "<tr>";
                            echo "<td style='color:green'>" . 
                            $valor["id"] . "</td><td>" . 
                            $valor["nome"] . "</td><td>" . 
                            $valor["apelido"] . "</td><td>" . 
                            $valor["obs"] . 
                            "</td><td><img src='ok.png' alt='verifid' width='27' height='25' onclick='editar(this);'></td>
                            <td><img src='errado.png' alt='verifid' width='25' height='23' onclick='excluir(this);'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </form>
    </body>
</html>