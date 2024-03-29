<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INICIAR SESIÓN</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Numans');

            html,body{
            background-image: url('app/img/login.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            background-position: center;
            }

            .container{
            height: 100%;
            align-content: center;
            }

            .card{
            height: 400px;
            margin-top: auto;
            margin-bottom: auto;
            width: 450px;
            background-color: rgba(0,0,0,0) !important;
            }

            .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
            }

            .social_icon span:hover{
            color: white;
            cursor: pointer;
            }

            .card-header h3{
            color: #9B9BB0;
            text-align: center;
            font-weight: bold;
            }

            .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
            }

            .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
            }

            input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

            }

            .remember{
            color: white;
            }

            .remember input
            {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
            }

            .login_btn{
            color: white;
            background-color: #47525E;
            }

            .login_btn:hover{
                color: white;
                text-decoration: none;
            }

            .card-footer{
                color:white;
                text-align: center;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <img src="app/img/logo.png" class="img-fluid" alt="Responsive image">
                    <div class="card-header">
                        <h3>Ingresar al Aula Virtual</h3>
                    </div>
                    <div class="card-body">
                       
                        <div class="input-group form-group">
                            <input type="text" class="form-control" placeholder="Nombre de usuario">
                            
                        </div>
                        <div class="input-group form-group">
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                        
                        <a href="inicio.php"><button class="btn btn-block login_btn">Acceder</button></a>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        © 2019 Facultad de Ingeniería de Sistemas e Informátoca
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>