
<!DOCTYPE>
<?php

    session_start();

    include("functions/main.php");

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aneru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js" async></script>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro|Titillium+Web" rel="stylesheet">     
</head>
<body>
    <div class="l-wrapper_carrinho">
        <div class='l-header-top_carrinho'>
            <p class='txtCupon'>20% de desconto em toda a loja | Código: OGOFERS13</p>
        </div>
        <div class="l-header_carrinho">
            <h1 class="nomeEmpresa"><a class="linkEmpresa" href="index.php">MarketViser</a></h1>
            <div class="buscaBoxHeader" id="buscaBoxHeader">
                <form class="formPesquisaHeader" method="get" action="resultados.php" enctype="multipart/form-data">
                    <input class="pesquisaTxtHeader" type="text" name="buscaBarra" placeholder="Clique e pesquise">
                        <button class="pesquisaBtnHeader" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>    
        </div>
        <div class="l-header-bottom_carrinho" id="headerSticky">
                <ul class="usuarioHeader">
                <li class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="carrinho.php"><?php total_itens(); ?><i class="fas fa-shopping-basket"></i></a></li>
                    <li id="btnModal" class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="#"><i class="far fa-user-circle"></i></a></li>
                </ul>
                <ul class="menuHeader clearfix">
                    <li id="btnMenuHeader" class="celulaMenuHeader" onmouseover="javascript:mostra(); " onmouseout="javascript:esconde();" onclick="toggle_visibility('modalMenuHeader');"><a class="linkMenuHeader" href="#"><i class="fas fa-warehouse"></i> Armazém</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="comofuncionamos.php">Como Funcionamos</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#">Atendimento</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#">Cupons</a></li>
                </ul>
                <div id="modalMenuHeader" class="modalMenuHeader" onmouseover="javascript:mostra(); " onmouseout="javascript:esconde();">
                    <div class="categoriasMenu">
                        <ul class="listaCategoriasMenu">
                            <?php buscarCategs(); ?>
                        </ul>
                        <div id='linkMenu_1' class='linkMenuGeral linkMenu_1' onmouseover='javascript:showMenu1(); ' onmouseout='javascript:hideMenu1();'>
                            <?php buscarSubCateg(1); ?>
                        </div>
                        <div id='linkMenu_2' class='linkMenuGeral linkMenu_2' onmouseover='javascript:showMenu2(); ' onmouseout='javascript:hideMenu2();'>
                            <?php buscarSubCateg(2); ?>
                        </div>
                        <div id='linkMenu_3' class='linkMenuGeral linkMenu_3' onmouseover='javascript:showMenu3(); ' onmouseout='javascript:hideMenu3();'>
                            <?php buscarSubCateg(3); ?>
                        </div>
                        <div id='linkMenu_4' class='linkMenuGeral linkMenu_4' onmouseover='javascript:showMenu4(); ' onmouseout='javascript:hideMenu4();'>
                            <?php buscarSubCateg(4); ?>
                        </div>
                        <div id='linkMenu_5' class='linkMenuGeral linkMenu_5' onmouseover='javascript:showMenu5(); ' onmouseout='javascript:hideMenu5();'>
                            <?php buscarSubCateg(5); ?>
                        </div>
                    </div>
                </div>
            <div class="after" id="after"></div>
            <div class="buscaBox" id="buscaBox">
                <form class="formPesquisa" method="get" action="resultado.php" enctype="multipart/form-data">
                    <input class="pesquisaTxt" type="text" name="" placeholder="Clique e pesquise">
                        <button class="pesquisaBtn" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>
                <div id="modal" class="modal">
                    <div class="modal-content">
                            <span id="buttonclose" class="close">&times;</span>
                            <h2 class="tituloLog">Log-in</h2>
                            <p class="accountTxt">Não fez registro ainda?<a id="btnRegistro" href="#"> Crie uma conta</a></p>
                            <form class="inputWithIcon" action="">
                                <input class="emailTxt" name="" type="text" placeholder=" E-mail">
                                <i class="fas fa-user"></i>
                                <input class="senhaLogTxt" name="" type="password" placeholder=" Senha">
                                <i class="fas fa-lock"></i>
                                <button class="btnForm" type="submit">Pronto!</button>
                            </form>
                            <p class="forgotTxt">Esqueceu sua senha?<a href="#"> Pegue-a de volta!</a></p>
                    </div>
                </div>
                <div id="myRegistro" class="modalRegistro">
                    <div class="modal-content-registro">
                        <span id="buttoncloseRegistro" class="closeReg">&times;</span>
                        <h2 class="tituloReg">Registro</h2>
                        <form class="inputWithIcon" action="">
                            <input class="nomeTxt" name="" type="text" placeholder=" Nome">
                            <input class="sobrenomeTxt" name="" type="text" placeholder=" Sobrenome">
                            <select class="genero" name="genero" id="selectGenero">
                                <option class="genero" value="" selected="selected" hidden>Gênero</option>
                                <option class="genero" value="Feminino">Feminino</option>
                                <option class="genero" value="Maculino">Masculino</option>
                            </select>
                            <input class="cpfTxt" name="" type="text" placeholder=" CPF">
                            <input class="telTxt" name="" type="text" placeholder=" Telefone">
                            <input class="emailRegTxt" name="" type="email" placeholder=" Insira seu email">
                            <input class="senhaRegTxt" name="" type="password" placeholder=" Senha">
                            <input class="senhaRegTxt" name="" type="password" placeholder=" Confirmar senha">
                            <button class="btnFormReg" type="submit">Cadastre!</button>
                            <p class="accountRegTxt">Já faz parte da família Aneru?<a id="btnVoltaLog" href="#"> Faça log-in!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        <div class="l-main_carrinho">
            <form action="" method="post" enctype="multipart/form-data">
                <div class='elementCarrinho'>
                    <h2 class='titleCarrinho'>RESUMO DO PEDIDO</h2>
                    <?php

                        $total = 0;

                        global $con;

                        $ip = busca_ip();

                        $preco_select = "SELECT * FROM carrinho WHERE end_ip='$ip'";

                        $run_preco = mysqli_query($con, $preco_select);

                        while($p_preco=mysqli_fetch_array($run_preco)) {

                            $pro_id = $p_preco['id_pro'];

                            $pro_qtd = $p_preco['quant'];

                            $preco_pro = "SELECT * FROM produtos WHERE produto_id='$pro_id'";

                            $run_pro_preco = mysqli_query($con, $preco_pro);

                            while($pp_preco=mysqli_fetch_array($run_pro_preco)) {

                                #$preco_produto = array($pp_preco['produto_preco']);

                                $produto_id = $pp_preco['produto_id'];

                                $nome_produto = $pp_preco['produto_nome'];

                                $img_produto = $pp_preco['produto_img'];

                                $preco_unitario = $pp_preco['produto_preco'];

                                #$valor = array_sum($preco_produto);

                                #$total += $valor;

                                $sub_total_preco = $preco_unitario * $pro_qtd;
                                $preco_produto = array($sub_total_preco);
                                $valores = array_sum($preco_produto);
                                $total += $valores;

                    ?>
                    <div class='productDiv'>
                        <img class='elementImgCart' src="admin_area/imagens_produtos/<?php echo $img_produto;?>" width="80" height='80'>
                        <p class='nomeProd'><b><?php echo $nome_produto; ?></b></p>
                        <p class='precoProd'><?php echo "R$".$preco_unitario; ?></p>
                        <label class="control control--checkbox">Remover
                                <input type="hidden" name="product_adjust_id[]" value="<?php echo $pro_id; ?>">
                            <div class="control__indicator"></div>
                        </label>
                        <input class="txtQtd" type="text" size="15" name="qtd" value="<?php echo $pro_qtd; ?>">

                        <hr class='linhaCart'>
                    </div>
                    <?php } } ?>
                    <div class='resultadoCart'>
                        <h5 class='subtotal'>Sub Total: <?php echo "R$".$total; ?></h5>
                    </div>
                    <div class='finalBtnsCart'>
                        <input class='btnCartSpec btnContinuar' type="submit" name="continuar" value="Voltar às Compras">
                        <input class='btnCart btnAtualizar' type="submit" name="atualizar_cart" value="Atualizar Pedido">
                        <button class='btnCart btnFinalizar'><a class='linkBtnFinalizar' href="checkout.php">Finalizar Compra</a></button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class='l-footer_carrinho'>
        
        </div>
</body>
</body>
</html>
<?php

            $ip = busca_ip();

            if(isset($_POST['remove'])) {

                if($_POST['remove'] != "") {

                    foreach ($_POST['remove'] as $remove_id) {
                        $deleta_produto = "DELETE FROM carrinho WHERE id_pro='$remove_id' AND end_ip='$ip'";
                        $run_delete = mysqli_query($con, $deleta_produto);
                        if($run_delete) {
                            echo "<script>window.open('carrinho.php','_self')</script>";
                        }
                    }
                }
            } elseif ((isset($_POST['atualizar_cart']))) {
                $i = 0;
                $nova_qtd = $_POST['qtd'];
                foreach($_POST['product_adjust_id'] as $pro_adj_id) {
                    $nova_qtd = $_POST['qtd'][$i];
                    $atualiza_qtd_produto = "UPDATE carrinho SET quant='$nova_qtd' WHERE end_ip='$ip' AND id_pro='$pro_adj_id'";
                    $run_atualizacao = mysqli_query($con, $atualiza_qtd_produto);
                    $i++;
                }
                echo "<script>window.location.href=window.location.href</script>";
            } elseif (isset($_POST['continuar'])) {
                    echo "<script>window.open('index.php','_self')</script>";
            }

                
            ?>


<!DOCTYPE>
<?php

    session_start();
    include("functions/main.php");

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MarketViser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js" async></script>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro|Titillium+Web" rel="stylesheet">     
</head>
<body>
    <div class="l-wrapper_carrinho">
        <div class='l-header-top_carrinho'>
            <p class='txtCupon'>20% de desconto em toda a loja | Código: OGOFERS13</p>
        </div>
        <div class="l-header_carrinho">
            <h1 class="nomeEmpresa"><a class="linkEmpresa" href="index.php">MarketViser</a></h1>
            <div class="buscaBoxHeader" id="buscaBoxHeader">
                <form class="formPesquisaHeader" method="get" action="resultados.php" enctype="multipart/form-data">
                    <input class="pesquisaTxtHeader" type="text" name="buscaBarra" placeholder="Clique e pesquise">
                        <button class="pesquisaBtnHeader" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>    
        </div>
        <div class="l-header-bottom_carrinho" id="headerSticky">
                <ul class="usuarioHeader">
                <li class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="carrinho.php"><?php total_itens(); ?><i class="fas fa-shopping-basket"></i></a></li>
                    <li id="btnModal" class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="#"><i class="far fa-user-circle"></i></a></li>
                </ul>
                <ul class="menuHeader clearfix">
                    <li id="btnMenuHeader" class="celulaMenuHeader" onmouseover="javascript:mostra(); " onmouseout="javascript:esconde();" onclick="toggle_visibility('modalMenuHeader');"><a class="linkMenuHeader" href="#"><i class="fas fa-warehouse"></i> Armazém</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="comofuncionamos.php">Como Funcionamos</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#">Atendimento</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#">Cupons</a></li>
                </ul>
                <div id="modalMenuHeader" class="modalMenuHeader" onmouseover="javascript:mostra(); " onmouseout="javascript:esconde();">
                    <div class="categoriasMenu">
                        <ul class="listaCategoriasMenu">
                            <?php buscarCategs(); ?>
                        </ul>
                        <div id='linkMenu_1' class='linkMenuGeral linkMenu_1' onmouseover='javascript:showMenu1(); ' onmouseout='javascript:hideMenu1();'>
                            <?php buscarSubCateg(1); ?>
                        </div>
                        <div id='linkMenu_2' class='linkMenuGeral linkMenu_2' onmouseover='javascript:showMenu2(); ' onmouseout='javascript:hideMenu2();'>
                            <?php buscarSubCateg(2); ?>
                        </div>
                        <div id='linkMenu_3' class='linkMenuGeral linkMenu_3' onmouseover='javascript:showMenu3(); ' onmouseout='javascript:hideMenu3();'>
                            <?php buscarSubCateg(3); ?>
                        </div>
                        <div id='linkMenu_4' class='linkMenuGeral linkMenu_4' onmouseover='javascript:showMenu4(); ' onmouseout='javascript:hideMenu4();'>
                            <?php buscarSubCateg(4); ?>
                        </div>
                        <div id='linkMenu_5' class='linkMenuGeral linkMenu_5' onmouseover='javascript:showMenu5(); ' onmouseout='javascript:hideMenu5();'>
                            <?php buscarSubCateg(5); ?>
                        </div>
                    </div>
                </div>
            <div class="after" id="after"></div>
            <div class="buscaBox" id="buscaBox">
                <form class="formPesquisa" method="get" action="resultado.php" enctype="multipart/form-data">
                    <input class="pesquisaTxt" type="text" name="" placeholder="Clique e pesquise">
                        <button class="pesquisaBtn" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>
                <div id="modal" class="modal">
                    <div class="modal-content">
                            <span id="buttonclose" class="close">&times;</span>
                            <h2 class="tituloLog">Log-in</h2>
                            <p class="accountTxt">Não fez registro ainda?<a id="btnRegistro" href="#"> Crie uma conta</a></p>
                            <form class="inputWithIcon" action="">
                                <input class="emailTxt" name="" type="text" placeholder=" E-mail">
                                <i class="fas fa-user"></i>
                                <input class="senhaLogTxt" name="" type="password" placeholder=" Senha">
                                <i class="fas fa-lock"></i>
                                <button class="btnForm" type="submit">Pronto!</button>
                            </form>
                            <p class="forgotTxt">Esqueceu sua senha?<a href="#"> Pegue-a de volta!</a></p>
                    </div>
                </div>
                <div id="myRegistro" class="modalRegistro">
                    <div class="modal-content-registro">
                        <span id="buttoncloseRegistro" class="closeReg">&times;</span>
                        <h2 class="tituloReg">Registro</h2>
                        <form class="inputWithIcon" action="">
                            <input class="nomeTxt" name="" type="text" placeholder=" Nome">
                            <input class="sobrenomeTxt" name="" type="text" placeholder=" Sobrenome">
                            <select class="genero" name="genero" id="selectGenero">
                                <option class="genero" value="" selected="selected" hidden>Gênero</option>
                                <option class="genero" value="Feminino">Feminino</option>
                                <option class="genero" value="Maculino">Masculino</option>
                            </select>
                            <input class="cpfTxt" name="" type="text" placeholder=" CPF">
                            <input class="telTxt" name="" type="text" placeholder=" Telefone">
                            <input class="emailRegTxt" name="" type="email" placeholder=" Insira seu email">
                            <input class="senhaRegTxt" name="" type="password" placeholder=" Senha">
                            <input class="senhaRegTxt" name="" type="password" placeholder=" Confirmar senha">
                            <button class="btnFormReg" type="submit">Cadastre!</button>
                            <p class="accountRegTxt">Já faz parte da família Aneru?<a id="btnVoltaLog" href="#"> Faça log-in!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        <div class="l-main_carrinho">
            <form action="" method="post" enctype="multipart/form-data">
                <div class='elementCarrinho'>
                    <h2 class='titleCarrinho'>RESUMO DO PEDIDO</h2>
                    <?php
                    if(isset($_SESSION["cart_item"])){
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>
                    <table class="tabelaCart" border="0">
                        <tr>
                            <td colspan="4">
                                <hr class='linhaCols'>
                            </td>
                        </tr>
                        <tr>
                            <td width="52%"><h4 class="colm">PRODUTO</h4></td>
                            <td width="16%"><h4 class="colm">PREÇO UNITÁRIO</h4></td>
                            <td width="16%"><h4 class="colm">PREÇO FINAL</h4></td>
                            <td width="16%"><h4 class="colm">QUANTIDADE</h4></td>
                        </tr>
                    <?php		
                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["produto_preco"];
                    ?>
                        <tr class='productRow'>
                            <td class="productCel">
                                <img class='elementImgCart' src="admin_area/imagens_produtos/<?php echo $item["produto_img"]; ?>" width="80" height='80'>
                                <p class='nomeProd'><b><?php echo $item["produto_nome"]; ?></b></p>  
                                <a href="carrinho.php?action=remove&code=<?php echo $item["code"]; ?>&retira=<?php echo $item["produto_id"]; ?>" class="btnRemoveAction"><i class="far fa-trash-alt"></i> Remover</a>
                            </td>
                            <td class="precoUnitCel">
                                <p class='precoProdUnit'><?php echo "R$ ".$item["produto_preco"]; ?></p>
                            </td>
                            <td class="precoCel">
                                <p class='precoProd'><?php echo "R$ ". number_format($item_price,2); ?></p>
                            </td>    
                            <td class="productCel">
                                <input class="txtQtd" type="text" size="15" name="qtd" value="<?php echo $item["quantity"]; ?>">
                                <!-- <input type="hidden" name="product_adjust_id[]" value=""> -->
                            </td>
                        </tr>
                        <tr class="lineRow">    
                            <td colspan="4">
                                <hr class='linhaCart'>
                            </td>
                        </tr>
                    <?php
                            $total_quantity += $item["quantity"];
                            $total_price += ($item["produto_preco"]*$item["quantity"]);
                        }
                    ?>
                    </div>
                    <tr class='resultadoCart'>
                        <td colspan="4">
                            <h5 class='subtotal'>Sub Total: <?php echo "R$ ".number_format($total_price, 2); ?></h5>   
                            <h5 class='totalQtd'>Total Itens: <?php echo $total_quantity; ?></h5>
                        </td>
                    </tr>
                    </table>
                    <?php
                        } else {
                    ?>
                    <div class="semRegistros">Seu carrino está vazio!!!</div>
                    <?php 
                        }
                    ?>
                    <div class='finalBtnsCart'>
                        <a href="index.php" class='btnCartSpec btnContinuar' name="continuar">Voltar às Compras</a>
                        <a class='btnCart btnAtualizar' id="btnEmpty" href="carrinho.php?action=empty&esvazia=todos">Esvaziar Carrinho</a>
                        <a class='linkBtnFinalizar btnCart btnFinalizar' href="checkout.php">Finalizar Compra</a>
                        <!-- <button class='btnCart btnAtualizar' type="submit" name="atualizar_cart">Atualizar quantidade</button> -->
                    </div>
                </div>
            </form>
            
        </div>
        <div class='l-footer_carrinho'>
        
        </div>
</body>
</body>
</html>