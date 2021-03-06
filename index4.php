<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Adicionais</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./reset.css"> <!--referenciando arquivo de layout-->
    <link rel="stylesheet" href="./style4.css"> <!--referenciando arquivo de layout-->
    <link rel="stylesheet" href="./navbar2.css"> <!--referenciando arquivo de layout-->
</head>
        
        
<body class="principal">
<?php require_once 'detprocess.php'?>
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
       <form action="detprocess.php" method="POST">
       <div class="kaizen">
           <span>INFORMAÇÕES ADICIONAIS</span>
           <hr>
                <label class="labelnumid" for="numid">ID:</label>
                <input id="numid" name="numid" type="text" value="<?php echo $numid; ?>" placeholder="digite a ID" class="campo">
        </div>
       <div class="kaizen">
                <label for="solicitante">Solicitante:</label>
                <input id="solicitante" name="solicitante" type="solicitante" value="<?php echo $solicitante; ?>"  class="campo">
        </div>
        <div class="kaizen">
                <label for="numchamado">ID do chamado que necessita de detalhes:</label>
                <input id="numchamado" name="numchamado" type="numchamado" value="<?php echo $numchamado; ?>"  class="campo">
        </div>
        <div class="kaizen">
                <label for="setor">Setor:</label>
                <select name="setor" id="setor" >
                    <option><?php echo $setor; ?> </option>
                    <option>Serv 1</option>
                    <option>Serv 2</option>
                    <option>Serv 3</option>
                </select>
        </div>
        <div class="kaizen">
                <label for="datareg">Data de registro:</label>
                <input id="datareg" name="datareg" type="date" value="<?php echo $datareg; ?>"  placeholder="digite DD/MM/AAAA " class="campo campo-medio">
        </div>
        <div class="kaizen">
                <label for="infoadd">Detalhes adicionais:</label>
                <textarea id="infoadd" name="infoadd" type="text"><?php echo $infoadd; ?></textarea>
        </div>
        <div class="kaizen">
                <label for="datacon">Data de Conclusão</label>
                <input id="datacon" name="datacon" type="date" <?php echo $datacon; ?>>
        </div>
        
        <section class="manif-form4">
            <div class="botoes">
            <?php 
                if($atualizar == true):
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
       <div>
            <section id="hr2s">

            <span class="hr2">VISUALIZAÇÃO INFORMAÇÕES ADICIONAIS</span>
            
            <hr id="hrf">
                </section>
        </div>
            </section>
        <table id="tabkaizen">
        <?php

    $mysqli = new mysqli('localhost','root','', 'cxdi') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM detalhes") or die(mysqli_error($mysqli));
?>
<thead>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Solicitante</th>
                    <th>ID do chamado - detalhes</th>
                    <th>Setor</th>
                    <th>Data de Registro</th>
                    <th>Informações necessárias</th>
                    <th>Data de Conclusão</th>
                    <th>Status</th>
                    <th id="cs" colspan=2;>Ação</th>
                     
               </tr>
            </thead>
            <tbody>
            <?php  while ($linha = $result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $linha['numid'];?></td>
                    <td><?php echo $linha['solicitante'];?></td>
                    <td><?php echo $linha['numchamado'];?></td>
                    <td><?php echo $linha['setor'];?></td>
                    <td><?php echo date('d/m/Y',strtotime($linha['datareg'])); ?></td>
                    <td><?php echo $linha['infoadd']?></td>
                    <td>
                        <?php if($linha['datacon']=='0000-00-00'){echo "";
                        }else{
                            echo date('d/m/Y',strtotime($linha['datacon'])); 
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
                        <a id="edit" href="index4.php?edit=<?php echo $linha['numid'];?>" class="btn btn-info">Editar</a>
                        <a id="dng" href="detprocess.php?delete=<?php echo $linha['numid'];?>" class="btn btn-danger">Deletar</a>
                        </td>
                </tr>
                <?php endwhile;?>
            
            </tbody>

        </table>
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

</html>