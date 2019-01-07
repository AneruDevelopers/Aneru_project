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
                    if(isset($_SESSION["cart_item"])){
                        $total_quantity = 0;
                        $total_price = 0;
                    ?>
                    <div class="colunasCart">
                        <h4 class="colmI">PREÇO UNITÁRIO</h4>
                        <h4 class="colmII">PREÇO FINAL</h4>
                        <h4 class="colmIII">QUANTIDADE</h4>
                    </div>	
                    <hr class='linhaCols'>
                    <?php		
                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["produto_preco"];
                            ?>
                                <div class='productDiv'>
                                    <img class='elementImgCart' src="admin_area/imagens_produtos/<?php echo $item["produto_img"]; ?>" width="80" height='80'>
                                    <p class='nomeProd'><b><?php echo $item["produto_nome"]; ?></b></p>
                                    <p class='precoProdUnit'><?php echo "R$ ".$item["produto_preco"]; ?></p>
                                    <p class='precoProd'><?php echo "R$ ". number_format($item_price,2); ?></p>
                                    <a href="carrinho.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remover</a>
                                        <input class="txtQtd" type="text" size="15" name="quantity" value="<?php echo $item["quantity"]; ?>">
                                    <hr class='linhaCart'>
                                </div>
                            <?php
                                $total_quantity += $item["quantity"];
                                $total_price += ($item["produto_preco"]*$item["quantity"]);
                            }
                            ?>
                    </div>
                    <div class='resultadoCart'>
                        <h5 class='subtotal'>Sub Total: <?php echo "R$ ".number_format($total_price, 2); ?></h5>
                        <h5 class='totalQtd'>Total Itens: <?php echo $total_quantity; ?></h5>
                    </div>
                    <?php
                        } else {
                    ?>
                    <div class="semRegistros">Seu carrino está vazio!!!</div>
                    <?php 
                        }
                    ?>
                    <div class='finalBtnsCart'>
                        <a href="index.php" class='btnCartSpec btnContinuar' name="continuar">Voltar às Compras</a>
                        <a class='btnCart btnAtualizar' id="btnEmpty" href="carrinho.php?action=empty">Esvaziar Carrinho</a>
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