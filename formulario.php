<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | NUMBO</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');


         *{

            margin: 0px;



         }

        body{
            font-family: Poppins;
            background-color:#A3AEF0;
            color: #615850;
        }
        
        .box{
            color: white;
            position: absolute;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            top: 90%;
            left: 50%;
        }
      
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 15px;
            border-radius: 10px;
            outline: none;
            font-size: 20px;
        }
        #submit{
            text-decoration: none;
            font-style: bold;
            color: white;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-right: 30px;
            padding-left: 30px;
            border-radius: 15px;
            background-color: #EB6100;
            box-shadow:  100px black;
            font-size: 15px;
            margin-right: 15px;
        }
        #reset{

            text-decoration: none;
            font-style: bold;
            color: white;
            padding:20px ;
            border-radius: 15px;
            background-color: #EB6100;
            box-shadow:  100px black;
            font-size: 15px;
        }
        nav {

width: 100%;

display: flex;

position: fixed;

background-color: #4857BD;

z-index: 99;

}

nav a {

color: white;

margin: auto 20px auto 40px;

text-decoration: none;

font-weight: bold;

}

nav li {

float: left;

list-style: none;

margin-left: 20px;

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
</head>
<body>
<header>
        <div>
            <nav>
                <img src="img/numbo.png" width="200px" height="100px">
                
                <center>
                <ul>

                    <li><a href="#">                                                            </a></li>
                    <li><a href="#">                                                            </a></li>
                    <li><a href="#">                                                            </a></li><br><br>
                    <li><a href="#">                                                            </a></li>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="ctt.php">Contato</a></li>
                    <li><a href="planos.php">Planos</a></li>
                    <li><a href="formulario.php">Cadastre-se</a></li>
                    <li><a href="login.php">Login</a></li>



                </ul>
                </center>
            
            </nav>
        </div>
    </header><br><br><br><br><br><br>
       <center> 
    <div class="titulo">
    
        </div>

    <div class="box">



        <form action="formulario.php" method="POST">
          
                <h1>Cadastro</h1><br><br>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <p><center>
                <input type="submit" name="enviar" id="submit">
                <input type="reset"  name="limpar" id="reset">
                </center></p>
        </form>
    </div><br><br><br><br><br><br></center>
</body>
</html>