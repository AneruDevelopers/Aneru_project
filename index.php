<!DOCTYPE>
<?php

    session_start();
    include("functions/main.php");
    require_once('geoplugin.class.php');
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
            $geoplugin = new geoPlugin();
            $geoplugin->locate();   
            $buscar_armazem = "SELECT * FROM armazem";
            $run_arm = mysqli_query($con, $buscar_armazem);
            while ($row_arms = mysqli_fetch_array($run_arm)) {
                 $id_cid = $row_arms['id_cid'];
                 
                 $buscar_cidade = "SELECT * FROM cidade Where id_cid = $id_cid";
                 $run_cid = mysqli_query($con, $buscar_cidade);
                        while ($row_cid = mysqli_fetch_array($run_cid)) {
                            $city = $row_cid['nome_cid'];
                           
                            $cidade_plugin = $geoplugin->city;
                               // if($city == $cidade_plugin){  
                                $_SESSION['id_cidade'] =  3;//$id_cid;
                                $_SESSION['nome_cidade'] = "nome_cidade";//$city; 

                              // }

                          }
                      }

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MarketViser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/css/main.css" />  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro|Titillium+Web" rel="stylesheet">             
    <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css" type="text/css">
    <script type="text/javascript" src="js/main.js" async></script>
</head>
<body>
    <div class="l-wrapper">
        <div class='l-header-top'>
           <p class='txtCupon'>20% de desconto em toda a loja | Código: OGOFERS13</p>
        </div>
        <div class="l-header">
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
        <div class="l-header-bottom" id="headerSticky">
                <ul class="usuarioHeader">
                    <li class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="carrinho.php"><?php total_itens(); ?><i class="fas fa-shopping-basket"></i></a></li>
                    <li id="btnModal" class="celulaUsuaurioHeader"><a class="linkUsuaurioHeader" href="#"><i class="far fa-user-circle"></i></a></li>
                </ul>
                <ul class="menuHeader clearfix">
                    <li id="btnMenuHeader" class="celulaMenuHeader" onmouseover="javascript:mostra(); " onmouseout="javascript:esconde();" onclick="toggle_visibility('modalMenuHeader');"><a class="linkMenuHeader" href="#"><i class="fas fa-warehouse"></i> Armazém</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="comofuncionamos.php">Como Funcionamos</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#">Atendimento</a></li>
                    <li class="celulaMenuHeader"><a class="linkMenuHeader" href="#"><i class="fas fa-ticket-alt"></i> Cupons</a></li>
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
                <form class="formPesquisa" method="get" action="resultados.php" enctype="multipart/form-data">
                    <input class="pesquisaTxt" type="text" name="buscaBarra" placeholder="Clique e pesquise">
                        <button class="pesquisaBtn" type="submit" name="search">
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>
        </div>
        <div class="l-banner">
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
                <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img class="imgSlide" src="img/ecommerce.jpg">
                            <div class="divBtnDentroSlide">
                                <!-- <button class="btnDentroSlide"><a class="linkBtnDentroSlide" href="#">Compre já!</a></button> -->
                            </div>
                        </div>
                    
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img class="imgSlide" src="img/computador.jpg">
                            <div class="divBtnDentroSlide">
                                <!-- <button class="btnDentroSlide"><a class="linkBtnDentroSlide" href="#">Compre já!</a></button> -->
                            </div>
                        </div>
                    
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img class="imgSlide" src="img/shopping.jpg">
                            <div class="divBtnDentroSlide">
                                <!-- <button class="btnDentroSlide"><a class="linkBtnDentroSlide" href="#">Compre já!</a></button> -->
                            </div>
                        </div>
                    
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                      </div>
                      <br>
                    
                      <div class="dotSlide" style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
        </div>
        <div class="l-main">
            <?php carrinho(); ?>

            <h2 class="tituloOfertas"> <?php  
          if (!empty($_SESSION['nome_cidade'])) {
             $cidade =  "OFERTAS IMPERDÍVEIS EM ".$_SESSION['nome_cidade'];
          }


           echo $cidade;
             ?></h2>
            <div class="owl-carousel owl-theme sectionSlideProd owl-dots owl-item">
            <?php
                $product_array = $db_handle->runQuery("SELECT * FROM produtos ORDER BY RAND() LIMIT 0,12");
            
        
                    foreach($product_array as $key=>$value){

                      if ($product_array[$key]['armazem_id'] == $_SESSION["id_cidade"]) {                      
                      if ($product_array[$key]['quantidade'] > 0) {
              
            ?>
                <div class='produto_thumb'>
                    <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]['code']; ?>&add_carrinho=<?php echo $product_array[$key]['produto_id']; ?>">
                        <a href='detalhes.php?id_prod=<?php echo $product_array[$key]["produto_id"]; ?>'>
                            <img class="imagemThumb" src="admin_area/imagens_produtos/<?php echo $product_array[$key]["produto_img"]; ?>"  width="180" height="180">
                            <div class="product-tile-footer">
                            <h4 class='nomeProduto'><?php echo $product_array[$key]["produto_nome"]; ?>
                        </a>
                        <p class='precoProduto'><?php echo "R$".$product_array[$key]["produto_preco"]; ?></p>
                        <div class="cart-action">
                            <select class="productQtd" name="quantity">
                                <?php 
                                $q = $product_array[$key]["quantidade"];
                                    $n = 1; 
                                    while ($q >= $n ) {
                                        echo "<option value='$n'>$n</option>";
                                        $n++;
                                    }
                                 ?>
                            </select>
                            <a class='linkBtnAddCart' href="index.php" style='float:right;'><button type="submit" class='btnAddCart'><i class='fas fa-cart-plus'></i></button></a></div>       
                    </div>
                    </form>
                </div>
            <?php
                    }

                }
            
        }

            
            ?>
            </div>

        </div>
        <div class="l-footer">            
    
        </div>
    </div>
    <script src="OwlCarousel2-2.3.4\docs_src\assets\vendors\jquery.min.js" type="text/javascript"></script>
    <script src="OwlCarousel2-2.3.4\dist\owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
    
        $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            }
        })
        });
    
    </script>
</body>
</html>