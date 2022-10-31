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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cad.css">
    <title>Cadastro | NUMBO</title>
    <style>         
         
    </style>
</head>
<body>
<header>
        <div id="title">
            <img src="numbopreta.png" width="220px" style="margin-left: -240px;">
        </div>

        <ul>
            <a id="nav" href="index.html"><li>Início</li></a>
            <a id="nav" href="service.html"><li>Serviços</li></a>
            <a id="nav" href="sobre.html"><li>Sobre</li></a>
            <a id="nav" href="ctt.html"><li>Contato</li></a>
            <a href="login.html" id="login-btn"><li>Login</li></a>
        </ul>
    </header><br><br><br><br><br><br>


    <div class="box">

        <form action="formulario.php" method="POST">
          
                <center>
                <h1 style="font-weight: bold; font-size: 50px;">Cadastro</h1><br><br></center>
                <br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome completo</label><br>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label><br>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">Email</label><br>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label><br>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    
                </div><br>
                <center>
                <h3>Sexo:</h3>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento" id="dataLabel"><b>Data de Nascimento:</b></label><br><br>
                <input type="date" name="data_nascimento" id="data_nasc" required></center>
                <br><br><br>
                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade</label><br>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="UF">Estado</label><br>
                <select id="UF" name="UF">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="endereco" class="labelInput">Endereço</label><br>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    
                </div>
                <br><br>
                <center>
                <p>
                <input type="submit" name="enviar" id="submit" class="btns">
                <input type="reset"  name="limpar" id="reset" class="btns">
                </p>
                </center>
        </form>
    </div><br><br><br><br><br><br>

               
</body>
</html>