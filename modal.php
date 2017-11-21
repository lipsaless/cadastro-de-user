<!DOCTYPE html>
<html>
        <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript" charset="utf-8">
                $(document).ready(function(e){
                    $('.btn-primary').click(function(){
                        $('#modal').fadeIn(100);

                        });


                    $('.fechar, #modal').click(function(event){
                        if(event.target !== this){
                            return;
                        }
                        $('#modal').fadeOut(100);
                    });
                });
            </script>


        </head>



        <body>

        <!--MENU-->
        <div class="ui menu">
            <div class="item">
                <div class="ui primary button">Cadastrar</div>
            </div>
            <div class="item">
                <div class="ui button btn_modal">Login</div>
            </div>
        </div>
        <!--FIM MENU-->



        <!--MODAL TELA DE LOGIN-->
        <div id="modal">
            <div class="modal-box">
                <div class="modal-box-conteudo">
                <!--INSERINDO FORMULARIO DE LOGIN NO CONTEUDO DO MODAL-->
                        <form class="ui form" >
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
                </div>



                <!--MODAL TELA DE CADASTRO-->
                <div id="modal_cadastro">
                    <div class="modal_box_cad">
                        <div class="modal_cad_conteudo"> </div>
                        <div class="fechar_cad"></div>
                    </div>
                </div>
                <!--FIM MODAL TELA DE CADASTRO-->









        </body>
</html>