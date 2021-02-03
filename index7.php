<!DOCTYPE html>
<html lang="en">
     <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>5W2H</title>
     <!--bootstrap-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <!--Font Awesome-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="./reset.css"> <!--referenciando arquivo de layout-->
     <link rel="stylesheet" href="./style5.css"> <!--referenciando arquivo de layout-->
     <link rel="stylesheet" href="./navbar2.css"> <!--referenciando arquivo de layout-->
     </head>


          <!--<script src="js2/form02.js"></script>-->
          <script src="js2/editManif2.js"></script>
          <script src="app.js"></script>
          <!-- <script src="js2/calcula-status.js"></script>-->
     
          <!--script src="js/form2.js"></script>-->
     <!--início bootstrap-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <!--fim do bootstrap-->
     </body>

     <body class="principal">
     <?php require_once "5wprocess.php"?>
          <nav>
          <div class="logo">
               <h4>CX INFRA</h4>
          </div>
          <ul class="nav-link">
          <li>
                <a href="index.php">Registrar</a>
                </li>
                <li>
                <div class="manex">
                <a href="index3.php">Manifestações<br>Excluídas</a>
                </div>
                </li>
                <li>
                <div class="mandel">
                <a href="index4.php">Solicitação<br>Detalhes</a>
                </div>
                </li>
                <li>
                <a href="index7.php">5W2H</a>
                </li>
                <li>
                <a href="index2.php">Melhorias</a>
                </li>
                <li>
                <a href="#">Indicadores</a>
                </li>
          </ul>
          </nav>
          <?php
               if(isset($_SESSION['mensagem'])): ?>
               <div class="alert alert-<?=$_SESSION['tipomsg']?>">
               <?php
                    echo $_SESSION['mensagem'];
                    unset($_SESSION['mensagem']);
               ?>
               </div>
          <?php endif ?>
          <div class="wrap">
          <form action="5wprocess.php" method="POST">
          <div class="kaizen">
                    <span>PLANO DE AÇÃO - 5W2H</span>
                    <hr>
                         <label class="labelnumid" for="numid">ID:</label>
                         <input id="numid" name="numid" type="text" value="<?php echo $numid?>" placeholder="digite a ID" class="campo">
               </div>
               <!--numid-->
               <div class="caixa1">  
                    <div class="kaizen">
                                   <label for="numchamado">ID da manifestação</label>
                                   <input id="numchamado" name="numchamado" type="numchamado" value="<?php echo $numchamado?>"  class="campo">
                    </div>

                    <div class="kaizen">
                                        <label for="what">O quê?</label>
                                        <textarea id="what" name="what" type="text"><?php echo $what?></textarea>
                    </div>

                    <div class="kaizen">
                         <label for="why">Por quê?</label>
                              <textarea id="why" name="why" type="text"><?php echo $why?></textarea>
                    </div>
               </div>
               
               <div class="caixa1">
                    <div class="kaizen">
                         <label for="onde">Onde?</label>
                              <textarea id="onde" name="onde" type="text"><?php echo $onde?></textarea>
                    </div>

                    <div class="kaizen">
                    <label for="who">Quem?</label>
                              <textarea id="who" name="who" type="text"><?php echo $who?></textarea>
                    </div>

                    <div class="kaizen">
                    <label for="how">Como?</label>
                              <textarea id="how" name="how" type="text"><?php echo $how?></textarea>
                    </div>
               </div>
               <div class="caixa1">
                    <div class="kaizen">
                    <label for="much">Quanto(R$)?</label>
                              <textarea id="much" name="much" type="text"><?php echo $much?></textarea>
                    </div>

                    <div class="kaizen">
                              <label for="prazo">Quando(prazo)?</label>
                              <input id="prazo" name="prazo" type="date"<?php echo $prazo?>>
                    </div>
                    <div class="kaizen" id="datacon1">
                              <label for="datacon">Data de Conclusão</label>
                              <input id="datacon" name="datacon" type="date" <?php echo $datacon?>>
                    </div>
               </div>
               <section class="manif-form4">
                    <div class="botoes">
                         <?php
                              if($atualizar==true):
                         ?>
                              <button type="submit" name="upd" id="add-registro" class="btn btn-primary">Atualizar</button>
                         
                         <?php else: ?>
               
                         <button type="submit" name="add" id="add-registro" class="btn btn-info">Adicionar</button>
                         <?php endif; ?>
                         <!--<button type="submit" name="form-del" id="add-registro" class="btn btn-danger" style="width: 90.7px !important; height: 36px !important; text-align: center;" <a href="https://www.google.com.br/">Deletar</a></button>-->     
                    </div> 
               </section>


          </form>
          </div>
          <section id="hr2s">

          <span class="hr2">VISUALIZAÇÃO PLANOS DE AÇÃO - 5W2H</span>

               <hr id="hrf">
          </section>
        <table id="tabkaizen">
        <?php
        $mysqli = new mysqli('localhost','root','', 'cxdi') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM 5w2h") or die(mysqli_error($mysqli));
        ?>
        <thead> 
                <tr>
                    <th>ID</th>
                    <th>O quê?</th>
                    <th>Por quê?</th>
                    <th>Onde?</th>
                    <th>Quem?</th>
                    <th>Como?</th>
                    <th>Quanto(R$)?</th>
                    <th>Quando(prazo)?</th>
                    <th>Data de Conclusão</th>
                    <th id="cs" colspan=2;>Ação</th>
                     
               </tr>
               </thead>
                     <tbody>
                          <?php  while ($linha = $result->fetch_assoc()):?>
                         <tr>
                              <td><?php echo $linha['numchamado'];?></td>
                              <td><?php echo $linha['what'];?></td>
                              <td><?php echo $linha['why'];?></td>
                              <td><?php echo $linha['onde'];?></td>
                              <td><?php echo $linha['who'];?></td>
                              <td><?php echo $linha['how'];?></td>
                              <td><?php echo $linha['much'];?></td>
                              <td><?php echo date('d/m/Y',strtotime($linha['prazo'])); ?></td>
                              <?php if($linha['prazo']=='0000-00-00'){echo "";
                              }else{
                                   echo date('d/m/Y',strtotime($linha['prazo'])); 
                              }?>
                              </td>
                              <td id=<?php if($linha['datacon']=="0000-00-00"){ echo"info-stab";}
                                   else{echo"info-stcon";}?>>
                              <?php if($linha['datacon']== "0000-00-00"){
                                             echo "pendente";    
                                        }else{
                                             echo 'finalizado';}  ?>
                              </td>
                              <td class="cstd"colspan=2;>
                              <div class="buttons">
                              <a id="edit" href="index7.php?edit=<?php echo $linha['numid'];?>" class="btn btn-info">Editar</a>
                              <a id="dng" href="5wprocess.php?delete=<?php echo $linha['numid'];?>" class="btn btn-danger">Deletar</a>
                              <a id="anexo" href="#" class="btn btn-secondary">Anexar</a>
                              </div>
                              </td>
                         </tr>
                         <?php endwhile;?>
               </tbody>
  
</html>