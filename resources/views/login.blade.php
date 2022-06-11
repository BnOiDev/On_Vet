<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,600;0,800;0,900;1,200&family=Readex+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
</head>

<body>
    <div class="container">
        <div class="rounded d-flex">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <div style="font-family: 'Poppins', sans-serif; text-align: left">
                        <h3 style="color: black">Bem vindo ao</h3>
                        <h1><span style="color: #1B5BFF">On</span>Vet</h1>

                    </div>
                </div>
                <form action="">
                    <div class="">
                        <div class="input-group mb-3 w-100">
                            <input type="text" class="form-control" placeholder="usuario">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="senha">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lembrar-me
                            </label>
                        </div>
                        <button class="btn btn-primary text-center mt-2 w-100" type="submit">
                            Login
                        </button>
                        <br>
                        <div style="text-align: left; color: #1B5BFF">
                            <p>esqueceu sua senha?</p>
                        </div>
                    </div>
                </form>
            </div>
            <div id="fundo">
                <img id="img" src="\img\fundo.svg" alt="fundo">
            </div>
        </div>
    </div>

</body>

</html>
