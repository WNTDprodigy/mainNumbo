<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | NUMBO</title>
    <link rel="stylesheet" href="style-navbar.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        body{
            font-family: Poppins;
            background: #A3AEF0;
            text-align: center;
            color: #615850;
            padding: 0px;
            margin: 0px;
        }
      
        .btns-home a{
            text-decoration: none;
            font-style: bold;
            color: white;
            padding: 10px;
            border-radius: 5px;
            background-color: #EB6100;
            box-shadow:  100px black;
        }

    
        /*HEADER */

       
        hr{

            width: 700px;
            height: 2px;
            background-color: #615850;
            border: none;
        }
        h2{
            font-style: normal;
            font-size: 25px;
        }
        h1{
            font-size: 50px;
            font-style: bold;
        }



    </style>
    <script src="mobile-navbar.js"></script>
</head>

<body>
<nav>
        <img src="img/numbo.png" width="15%" height="150%">
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header><br><br><br><br><br><br>
    <h1>ACESSE A QUALQUER HORA E DE QUALQUER LUGAR</h1><hr>
    <h2>o sistema em nuvem mais democratico do país</h2><br><br>
    <div class="btns-home">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div><br><br>
    <div><img src="img/banner2.jpg" width="100%"height="50%"></div>
</body>
</html>