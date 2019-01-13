<?php 
include("functions/main.php");
session_start();
if (!empty($_GET['esc_cid'])) {

	$t =$_GET['esc_cid'];
                            $cid = "SELECT * FROM cidade WHERE id_cid = '$t'";

                            $cid_r = mysqli_query($con, $cid);

                            while ($row_c = mysqli_fetch_array($cid_r)) {
                            $nome = $row_c['nome_cid'];
                            }
					$_SESSION['id_cidade'] = $_GET['esc_cid'];
                    $_SESSION['nome_cidade'] = $nome;
                  if (!empty($_SESSION['id_cidade'])) {
                  		header('Location: index.php');
                  	}	
}


 
 ?>

<h1 align="center">Desculpe o único estado que estamos Funcionando em São Paulo</h1>

         <div align="center">      
         <form method="get" action="">

               <select  name="esc_cid"   tabindex="1">
                    <optgroup label="Escolha uma Cidade">
                     <?php
                                
                            $buscar_cid = "SELECT * FROM cidade";

                            $run_cid = mysqli_query($con, $buscar_cid);

                            while ($row_cid = mysqli_fetch_array($run_cid)) {

                                $cid_id = $row_cid['id_cid'];
                                $cid_nome = $row_cid['nome_cid'];
                                $cid_est = $row_cid['id_est'];
                                echo "<option   value='$cid_id'>$cid_nome</option>";
                            }
                           
                        ?>
                        <input type="submit" value="Enviar">
                        </optgroup>
                </select>
			</form>

             </div>
	
</select>

</body></html>
