<!DOCTYPE>
<?php

    include("admin_area/includes/conexao.php");
    include("functions/main.php");

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MarketViser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/css/admin.css"/>
</head>
<body>
    <div class="registroBox">
        <h2 class="tituloReg">Registro</h2>
        <form class="inputWithIcon" action="cadastrar_cliente.php" method="post" enctype="multipart/form-data">
            <input class="nomeTxt" name="c_nome" type="text" placeholder=" Nome">
            <input class="sobrenomeTxt" name="c_sobrenome" type="text" placeholder=" Sobrenome">
            <select class="genero" name="c_genero" id="selectGenero">
                <option class="genero" value="" selected="selected" hidden>Gênero</option>
                <option class="genero" value="Feminino">Feminino</option>
                <option class="genero" value="Maculino">Masculino</option>
            </select>
            <input class="cpfTxt" name="c_cpf" type="text" placeholder=" CPF">
            <select class="genero" name="c_idade" id="selectIdade">
                <option class="idade" value="" selected="selected" hidden>Idade</option>
                <option class="idade" value="19">18</option>
                <option class="idade" value="18">19</option>
            </select>
            <select class="genero" name="c_pais" id="selectPais">
                <option class="pais" value="" selected="selected" hidden>País</option>
                <option class="pais" value="Brazil">Brazil</option>
                <option class="pais" value="Argentina">Argentina</option>
            </select>
            <select class="genero" name="c_cidade" id="selectCidade">
                <option class="cidade" value="" selected="selected" hidden>Cidade</option>
                <option class="cidade" value="Lins">Lins</option>
                <option class="cidade" value="Campinas">Campinas</option>
            </select>
            <input class="telTxt" name="c_cep" type="text" placeholder=" CEP">
            <input class="telTxt" name="c_endereco" type="text" placeholder=" Endereço">
            <input class="telTxt" name="c_complemento" type="text" placeholder=" Complemento">
            <input class="telTxt" name="c_tel" type="text" placeholder=" Telefone">
            <input class="emailRegTxt" name="c_email" type="email" placeholder=" Email">
            <input class="senhaRegTxt" name="c_senha" type="password" placeholder=" Senha">
            <input class="senhaRegTxt" name="c_confirmasenha" type="password" placeholder=" Confirmar senha">
            <button class="btnFormReg" name="registrar" type="submit">Cadastre!</button>
            <p class="accountRegTxt">Já faz parte da família MarketViser?<a id="btnVoltaLog" href="checkout.php"> Faça log-in!</a></p>
        </form>
    </div>
</body>
</html>
<?php

    if(isset($_POST['registrar'])) {

        $ip = busca_ip();

        $c_nome = $_POST['c_nome'];
        $c_sobrenome = $_POST['c_sobrenome'];
        $c_genero = $_POST['c_genero'];
        $c_cpf = $_POST['c_cpf'];
        $c_idade = $_POST['c_idade'];
        $c_pais = $_POST['c_pais'];
        $c_cidade = $_POST['c_cidade'];
        $c_cep = $_POST['c_cep'];
        $c_end = $_POST['c_endereco'];
        $c_complemento = $_POST['c_complemento'];
        $c_tel = $_POST['c_tel'];
        $c_email = $_POST['c_email'];
        $c_senha = $_POST['c_senha'];
        $c_confirmasenha = $_POST['c_confirmasenha'];

        $insere_c = "INSERT INTO clientes (cliente_ip,cliente_nome,cliente_sobrenome,cliente_email,cliente_senha,cliente_pais,cliente_cidade,
        cliente_cep,cliente_endereco,cliente_complemento,cliente_telefone,cliente_cpf,cliente_sexo,cliente_idade) VALUES ('$ip','$c_nome',
        '$c_sobrenome','$c_email','$c_senha','$c_pais','$c_cidade','$c_cep','$c_end','$c_complemento','$c_tel','$c_cpf','$c_genero','$c_idade')";
    
        $run_c = mysqli_query($con, $insere_c);

        $seleciona_carrinho = "SELECT FROM carrinho WHERE end_ip ='ip'";

        $run_cart = mysqli_query($con, $seleciona_carrinho);

        $check_cart = mysqli_num_rows($run_cart);

        if($check_cart==0) {

            $_SESSION['cliente_email.php'] = $c_email;
            echo "<script>alert('Registro feito com sucesso!')</script>";
            echo "<script>window.open('cliente/minha_conta.php','_self')</script>";
        } else {

            $_SESSION['cliente_email.php'] = $c_email;
            echo "<script>alert('Registro feito com sucesso!')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
}

?>