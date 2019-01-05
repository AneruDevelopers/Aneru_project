<!DOCTYPE>
<?php

    include("includes/conexao.php");

?>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insrir Armazém</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/admin.css"/>
</head>
<body>

    <form class="formInserirProdutos" action="inserir_armazem.php" method="post" enctype="multipart/form-data">

        <table width="auto" align="center" border="2">
            <tr align="center">
                <td colspan="8"><h2>Insira os dados aqui</h2></td>
            </tr>
            <tr>
                <td align="center"><b>Cidade do armazém:</b></td>
                <td><input type="text" name="nome_armazem" size="60" required></td>
            </tr>
            <tr>
                <td align="center"><b>Estado do armazém:</b></td>
                <td><input type="text" name="estado_armazem" size="60" required></td>
            </tr>
                <tr align="center">
                    <td colspan="8"><input type="submit" name="cadastrar_armazem" value="Cadastrar"></td>
                </tr>
        </table>

    </form>
    
</body>
</html>
<?php

        if(isset($_POST['cadastrar_armazem'])) {
        
            $nome_arm = $_POST['nome_armazem'];

            $estado_arm = $_POST['estado_armazem'];

            $inserir_arm = "INSERT INTO armazens (armazem_cidade,armazem_estado) VALUES ('$nome_arm','$estado_arm')";
        
            $inserir_armazem = mysqli_query($con, $inserir_arm);

                if($inserir_armazem) {
                    echo "<script>alert('O armazem foi inserida com sucesso!')</script>";
                    echo "<script>window.open('admin_center.php','_self')</script>";
                }
        }

?>