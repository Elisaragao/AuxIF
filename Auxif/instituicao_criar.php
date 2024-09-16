<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- REFERENCIA AO BOOTSTRAP -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <title>Auxif</title>

    <style>

        form
        {
            text-align: center;
            margin: 100px auto;
        }
        input
        {
            display: block;
            margin: 10px auto;
            height: 30px;
            width: 200px;
        }
        img
        {
            text-align: center;
        }

        .col-sm-6
        {
            margin-left: 320px;
        }
    </style>
</head>
<body>
    

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            
    <form action="forum.php">
        <img src="img/AUXIF.png" alt="">
        
            <h3> Criar conta </h3>
            
            <div class="col-sm-6">
            <input type="text" placeholder="Email" class="form-control" name="email">
            <input type="text" placeholder="Criar senha" class="form-control" name="criarSenha">
            <input type="password" placeholder="Confirmar senha" class="form-control">
            <input type="text" placeholder="ID gerado" class="form-control">
            <input type="submit" value = "Criar conta" class="btn btn-info">
            </div>
            </form>

    </div>
    </div>
    </div>
</body>
</html>