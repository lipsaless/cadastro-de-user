
  <?php
            require_once 'userdao.php';

            $dao = new UserDAO;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }

            $usuario = $dao->findUnit($id);

            ?>
<style>
        .btn
        {
            margin-left:10px;
        }
        .input-group-addon
        {
            margin-left:10px;
        }
    </style>


<form id="form-alt">
    <div class="form-group">
        <label  class="label" >Nome</label>
        <input id="input" name="nome" type="text" class="form-control" value="<?php echo $usuario['nome'] ?>">
    </div>
    <div class="form-group">
        <label  class="label" >Email </label>
        <input id="input" name="email" type="email" class="form-control" value="<?php echo $usuario['email']; ?>">
        <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
    </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<script>

    $(document).ready(function(){
        $("#form-alt").submit(function(){
            $.ajax({
                url: 'editar_usuario.php',
                data: $(this).serialize(),
                success: function(data){
                    $("#exampleModal").modal('toggle')
                }


            })

            return false
        })
    })
</script>

