<?php
      session_start();
       
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
       
      //adiciona produto
       
      if(isset($_GET['acao'])){
          
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }
          
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }
          
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(isset($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }
       
      }
       
       
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Omega Info</title>
  <link rel="stylesheet" type="text/css" href="css/cssManual.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="utf-8">
</head>
 
<body>
<div id="tudo">

<!-- MENU -->
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                        <a href="home.php"><img src="img/logo.png" id="logo" alt="Omega Info"></a>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                      <ul class="nav navbar-nav">
                          <li>
                              <a href="#"><span class="glyphicon glyphicon-user"></span> Log-in/Sign-up</a>
                          </li>
                          <li>
                              <a href="montar_pc.php"><span class="glyphicon glyphicon-cog"></span> Montar Computador</a>
                          </li>
                <li>
                  <a href="computador.php"><span class="glyphicon glyphicon-modal-window"></span> Computadores</a>
                </li>
                          <li>
                              <a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Meu Carrinho</a>
                          </li>
                      </ul>
                      
                  </div>

                  <!-- /.navbar-collapse -->
              </div>
              <!-- /.container -->
          </nav>

          <!-- FIM DO MENU -->
		<div id="conteudo">
<table border="1" id="carrinho">
    <caption><h2>Carrinho de Compras</h2></caption>
    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Descri&ccedil;ão</th>
            <th width="100">Valor unitário</th>
            <th width="64">Sub total</th>
          </tr>
    </thead>
            <form action="?acao=up" method="post">
    <tfoot>
           <tr>
            <td colspan="5"><input type="submit" value="Atualizar carrinho" id="btn-atualizar" /></td>
            <tr>
            <td colspan="5"><a class="btn btn-warning" href="computador.php">Continuar Comprando</a> <!--ESSE INPUT DO TIPO BOTAO NAO VAI SER FUNCIONAL, ELE ESTA AQUI APENAS PARA MOSTRAR QUE PODERIA EXISTIR A FUNCAO FINALIZAR COMPRA.--><input id="btnFinalizar" type="button" value="Finalizar compra" class="btn btn-primary" /></td>
    </tfoot>
      
    <tbody>
               <?php
                     if(count($_SESSION['carrinho']) == 0){
                        echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
                     }else{
                        require("conexao.php");
                                                               $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                              
                              $qr    = mysqli_query($mysqli,"SELECT * FROM produtos WHERE id= '$id'") or die(mysql_error());
                              $ln    = mysqli_fetch_assoc($qr);
                              
                              $imagem  = '<img src="img/'.$ln['imagem'].'" class="img_carrinho"/>';
                              $nome  = $ln['nome'];
                              $descricao = $ln['descricao'];
                              $preco = number_format($ln['preco'], 2, ',', '.');
                              $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');
                               
                              $total += $ln['preco'] * $qtd;
                            
                           echo '<tr> 
                                   <td>'.$nome.'<br>'.$imagem.'</td>
                                   <td><input type="text" size="3" class="txt_car" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                   <td width="250">'.$descricao.'</td>
                                   <td>R$ '.$preco.'</td>
                                   <td width="150">R$ '.$sub.'</td>
                                   <td><a href="?acao=del&id='.$id.'"><img src="img/remove.png" width="20" height="20"></a></td>
                                </tr>';
                        }
                           $total = number_format($total, 2, ',', '.');
                           echo '<tr>
                                    <td colspan="4">Total</td>
                                    <td>R$ '.$total.'</td>
                              </tr>';
                     }
               ?>
    
     </tbody>
        </form>
</table>
 </div>
</div>
</body>
</html>