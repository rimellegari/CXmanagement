<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CX Diretoria de Infraestrutura</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="resethib.css"> <!--referenciando arquivo de layout-->
    <link rel="stylesheet" href="stylehib.css"> <!--referenciando arquivo de layout-->
    <link rel="stylesheet" href="navbarhib.css">
</head>


<body class="principal">
        <nav>
            <div class="logo">
                <h4> CX INFRA</h4>
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
       </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <?php require_once 'action.php'; ?>

        <?php
        if (isset($_SESSION['message'])):
        ?>
        <div class="alert alert-<?=$_SESSION['msg-type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        </div>
        <?php endif ?>
        <form action="action.php" method="POST" id ="form-add">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <!--ver video CRUD Indexdedb para virar automático-->
            <div class="cabe">
            <span>REGISTRO MANIFESTAÇÕES</span>
            <hr>
            </div>
     
                <label for="numid" class="numid">ID:</label>
                <input id="numid" name="numid" type="text" value="<?php echo $numid; ?>" placeholder="digite a ID" class="campo">
    
                <label for="datarec" class="datarec">Data de Recebimento:</label>
                <input id="datarec" name="datarec" type="date" value="<?php echo $datarec; ?>" placeholder="digite DD/MM/AAAA " class="campo campo-medio">
         

            <div class="grupo">
                <label for="datareg">Data de Registro:</label>
                <input id="datareg" name="datareg" type="date" value="<?php echo $datareg; ?>" placeholder="digite DD/MM/AAAA " class="campo campo-medio">
            </div>
            
            <div class="grupo">
                <label for="tipo">Tipo:</label>
                <select  name="tipo"  id="tipo" >
                    <option><?php echo $tipo; ?></option>
                    <option>Elogio</option>
                    <option>Reclamação</option>
                    <option>Solicitação</option>
                    <option>Sugestão</option>
                </select>
            </div>
            <div class="grupo">
                <label for="origem">Origem:</label>
                <select name="origem" id="origem">
                    <option><?php echo $origem; ?></option>
                    <option>Email</option>
                    <option>Ev. Est.</option>
                    <option>Ouvidoria</option>
                    <option>Tasy</option>
                </select>
            </div>
            <div class="grupo">
                <label for="rastrfonte">Rastreador:</label>
                <input id="rastrfonte" name="rastrfonte" type="text" value ="<?php echo $rastrfonte; ?>" placeholder="digite a ID" class="campo">
            </div>
            <div class="grupo">
                <label for="escopo">Escopo:</label>
                <select name="escopo" id="escopo">
                    <option><?php echo $escopo; ?></option>
                    <option>Educação</option>
                    <option>Saúde</option>
                </select>
            </div>
            <div class="grupo">
                <label for="setor">Serviço de origem:</label>
                <select name="setor" id="setor" >
                    <option><?php echo $setor; ?></option>
                    <option>Serv 1</option>
                    <option>Serv 2</option>
                    <option>Serv 3</option>
                </select>
            </div>
            <div class="grupo">
                <label for="unidade">Unidade:</label>
                <select name="unidade" id="unidade" >
                    <option><?php echo $unidade; ?> </option>
                    <option>opt 1</option>
                    <option>opt 2</option>
                    <option>opt 3</option>
                    <option>opt 4</option>
               
                </select>
            </div>
            <div class="grupo">
                <label for="area">Nome área:</label>
                <input id="area" name="area" type="text" value="<?php echo $area; ?>" placeholder="digite nome do setor/area" class="area">
            </div>
            <div class="grupo">
                <label for="perfil">Perfil cliente:</label>
                <select value="" name="perfil" id="perfil">
                    <option><?php echo $perfil; ?></option>
                    <option>Cli 1</option>
                    <option>Cli 2</option>
                    <option>Cli 3</option>
            
                </select>
            </div>
            <div class="grupo">
                <label for="nomecli">Nome:</label>
                <input id="nomecli" name="nomecli" type="text" value="<?php echo $nomecli; ?>" class="nomecli">
            </div>
            
            <div class="grupo">
                <label for="grteor">Grupo teor:</label>
                <select name="grteor" id="grteor">
                    <option><?php echo $grteor; ?> </option>
                    <option>Opção 1</option>
                    <option>Opção 2</option>
                     </select>
            </div>
         <div class="wrap">
                <div class="grupo">
                    <label for="voc" >Voz do cliente:</label>
                    <textarea id="voc" name="voc" type="text" value=""   class="voc"><?php echo $voc; ?></textarea>
                </div>
                <div class="grupo">
                    <label for="resposta">Resposta:</label>
                    <textarea id="resposta" name="resposta"  type="text" class="resposta"><?php echo $resposta; ?></textarea>
                </div>
                <div class="grupo">
                    <label for="dataresp">Data de Resposta:</label>
                    <input id="dataresp" name="dataresp" type="date" value="<?php echo $dataresp; ?>" placeholder="digite DD/MM/AAAA " class="campo campo-medio"><span id="msgErro"></span>
                </div>
            </div>
           
            <div class="botoes">
            <?php
            if($update==true):
            ?>
            <button type="submit" name="update" id="add-registro" class="btn btn-primary">Atualizar</button>
            <?php else: ?>
            <button type="submit" name="add" id="add-registro" class="btn btn-info">Adicionar</button>
            <!--<button type="submit" name="form-del" id="add-registro" class="btn btn-danger" style="width: 90.7px !important; height: 36px !important; text-align: center;" <a href="https://www.google.com.br/">Deletar</a></button>-->
            <?php endif; ?>
            <button type="submit" name="del" id="del" class="btn btn-danger"><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=w_YeiiSDA0G_ShMoxdw2U8Wt-VnhlK5Dm040JWtIyuNUNjA4WlM0TTlYOVBLMVZLQ0o1S0oyOFFQVS4u" target="_blank">Deletar</a></button>
            </div>
        </form>


        <section class="visualização">
            <section id="hr">
                <span>VISUALIZAÇÃO MANIFESTAÇÕES</span>

                <hr>
            </section>
            <div class="filtro">
            <label for="filtrar-ID">Filtre:</label>
            <input type="text" name="filtro" id="filtrar-id" placeholder="Digite o número da ID">
            <label for="filtrar-setor">Filtre:</label>
            <input type="text" name="filtro" id="filtrar-escopo" placeholder="Digite o nome do setor">
            </div>
            <?php
            $mysqli = new mysqli ('localhost', 'root', '','cxdi') or die (mysqli_error($mysqli));
            $result = $mysqli-> query("SELECT * FROM manifest") or die (mysqli_error($mysqli));
            ?>
            <table id="tabManif">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data Reg.</th>
                        <th>Tipo</th>
                        <th>Origem</th>
                        <th>Rastreador</th>
                        <th>Escopo</th>
                        <th>Serviço Origem</th>
                        <th>Unidade</th>
                        <th>Área</th>
                        <th>Perfil</th>
                        <th>Grupo Teor</th>
                        <th>Data Resp.</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                 </thead>
                <tbody id="tabela-registro">
                <?php
            //pre_r($result); - impressão dados da tabela
            //pre_r($result->fetch_assoc());
            /*pre_r($result->fetch_assoc()); //impressão valores dos campos
            function pre_r($array){
                echo '<pre>';
                print_r($array);
                echo '</pre>';*/
            while ($linha = $result->fetch_assoc()):?>
                <tr class="manifesta-linha">
                    <td class="info-numid"><?php echo $linha['numid']; ?></td>
                    <td class="info-datareg"><?php echo date('d/m/Y',strtotime($linha['datareg'])); ?></td>
                    <td class="info-tipo"><?php echo $linha['tipo']; ?></td>
                    <td class="info-origem"><?php echo $linha['origem']; ?></td>
                    <td class="info-rastr"><?php echo $linha['rastrfonte']; ?></td>
                    <td class="info-escopo"><?php echo $linha['escopo']; ?></td>
                    <td class="info-setor"><?php echo $linha['setor']; ?></td>
                    <td class="info-unid"><?php echo $linha['unidade']; ?></td>
                    <td class="info-area"><?php echo $linha['area']; ?></td>
                    <td class="info-perfil"><?php echo $linha['perfil']; ?></td>
                    <td class="info-grteor"><?php echo $linha['grteor']; ?></td>
                    <td class="info-dataresp"><?php if($linha['dataresp']=='0000-00-00'){
                                                                                echo "";
                                                                                }else{
                                                                                     echo date('d/m/Y',strtotime($linha['dataresp'])); 
                                                                                }?></td>
                    <td class="info-status" id=<?php if($linha['resposta']==" "){ echo"info-stab";}
                        else{echo"info-stcon";}?>>
                        <?php
                            if($linha['resposta']== " ") {
                                echo "pendente";
                            }else{
                                echo 'finalizado';}                              
         
                    
                    ?>
                    </td>
                    <td class="info-action">
                        <a id ="btn-xs"href="index.php?edit=<?php echo $linha['numid']; ?>" class="badge badge-info" style="color:white; width: 52px">Editar</a><br><br>
                        <a id ="btn-5w2h"href="index7.php" target="_blank" class="badge badge-dark" style="color:white; width: 52px">5W2H</a><br><br>
                        <a id ="btn-dng"href="index4.php" target="_blank" class="badge badge-secondary style="color:white; width: 52px>Detalhes</a>
                    </td>
                </tr>
            <?php endwhile; ?>
                </tbody>
            </table>

            
        </section>
        <!--<script src="js2/form02.js"></script>-->
        <script src="js2/editManif2.js"></script>
       <!-- <script src="js2/calcula-status.js"></script>-->
    
        <!--script src="js/form2.js"></script>-->
    <!--início bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--fim do bootstrap-->
</body>

</html>