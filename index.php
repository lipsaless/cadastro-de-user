
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'userdao.php';

    $dao = new UserDAO;
?>


<!DOCTYPE html>
<html>
    <head>

         <title></title>

           <!--Links CSS-->
        <link href="text/javascript" href="js/style.js">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css"> -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.css" rel="stylesheet">
         <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--Links JavaScript-->
         <!-- <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
         <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
         <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

        <!--DataTable bootstrap 4-->
         <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/style.js"></script>
    </head>



    <body>

                <ul class="nav justify-content-center">
                      <li class="nav-item">
                            <button class="btn btn-primary btn-nav" data-title="Cadastrar" data-toggle="modal" data-target="#exampleModal" data-view="view_cadastro.phtml" href="#">Novo</button>
                      </li>
                      <li class="nav-item">
                            <button class="btn btn-nav" href="#">Sobre</button>
                      </li>
                      <li class="nav-item">
                            <button class="btn btn-nav" href="#">Contato</button>
                      </li>
                </ul>

            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-form" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                </div>
              </div>
            </div>


            <!-- Inicio da Tabela -->
            <div class="form">
                <table class="table" id="table-rs">
                    <thead>
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>Nome</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                     </thead>
                    <tbody>
                    <?php foreach ($dao->findAll() as $key => $value) : ?>
                        <tr>
                            <!-- <td><?php echo $key+1 ?></td> -->
                            <td><?php echo $value['nome'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td>
                                <a href="form_editar_usuario.php?id=<?php echo $value['id'] ?>" data-id="<?php echo $value['id'] ?>" data-title="Editar" data-view="form_editar_usuario.php" class="btn-modal btn btn-primary" onlick="alterar(nome,email);" data-toggle="modal" data-target="#exampleModal">Editar</a>
                                <a href="excluir_usuario.php?id=<?php echo $value['id'] ?>" class= "btn btn-danger">Excluir</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Fim da Tabela -->






            <!--MODAL TELA DE LOGIN-->
             <!-- <button class="btn-modal"></button>
        <div id="modal">
            <div class="modal-box">
                <div class="modal-box-conteudo"> -->
                <!--INSERINDO FORMULARIO DE LOGIN NO CONTEUDO DO MODAL-->
                        <!-- <form class="ui form" >
                            <div class="field">
                                    <label>Login</label>
                                    <input id="email" name="first-name" placeholder="abc@gmail.com" type="email">
                            </div>
                            <div class="field">
                                    <label>Senha</label>
                                    <input id="senha" name="last-name" placeholder="" type="password">
                            </div>
                            <div class="field">
                            <div class="ui checkbox">
                                    <input tabindex="0" class="" type="checkbox">
                                    <label>Aceitar os Termos</label>
                            </div>
                            </div>
                                    <button id="botao" class="ui button" type="submit">Entrar</button>
                        </form>
                            </div>
                            <div class="">
                                    <button class=" negative ui button fechar">X</button>
                            </div>
                        </div>
                    </div>
                </div>  -->





    </body>
</html>