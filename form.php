<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <form id="form" onsubmit="return validacao();">
          <div class="form-group">
            <label for="email">Nome</label>
            <input name="nome" type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">email:</label>
            <input name="email" type="password" class="form-control" id="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>


    <script>
    function validacao(){
        var form = document.getElementById('form')
        console.log(form.nome.value)

        if (form.nome.value == ""){
            alert("Preencha o campo nome");
            return false
        }


        return false
            if (document.form.nome.value == ""){
        alert("Preencha o campo nome");
        document.form.nome.focus();
        return false;
    }
    }
    </script>
</body>
</html>