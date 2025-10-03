<?php
if($_POST){
$nome=$_POST["nome1"];
$email=$_POST["email1"];
$data=$_POST["dataNas"];
$endr=$_POST["endr"];
$usuar=$_POST["user"];
$log=$_POST["login1"];
$snh=$_POST["senha1"];
$conf=$_POST["pass"];
  
    if(isset($_POST['user'])){
		   $usuar = $_POST['user']
      }
		else {
		   $usuar= "Não selecionado";
		  }
    echo "Nome do usuario:".$nome."<br/>";
    echo "Email:".$email."<br/>";
    echo "Nascimento:".$data."<br/>";
    echo "Endereço:".$endr."<br/>";
    echo "User:".$usuar."<br/>";
    echo "Login:".$log."<br/>";
    echo "Senha:".$snh."<br/>";
    echo "Confirmação de senha:".$conf."<br/>";

    echo "<br/><br/><br/>Senha validada com sucesso!";
  if(empty($_POST["nome1"]) || empty( $_POST["user"]) || empty($_POST["login1"]) ||empty($_POST["senha1"]) || empty($_POST["pass"])){
    echo "Nome do usuario:".$nome."<br/>";
    echo "Email:".$email."<br/>";
    echo "Nascimento:".$data."<br/>";
    echo "Endereço:".$endr."<br/>";
    echo "User:".$usuar."<br/>";
    echo "Login:".$log."<br/>";
    echo "Senha:".$snh."<br/>";
    echo "Confirmação de senha:".$conf."<br/>";

    echo "<br/><br/><br/>As informações de nome, login, tipo de usuário, senha e confirmação de senha são de preenchimento obrigátorio!!<br/><a href='form.html'>Volte ao Formulário</a>";
  }
  elseif($snh!=$conf){echo "Nome do usuario:".$nome."<br/>";
    echo "Email:".$email."<br/>";
    echo "Nascimento:".$data."<br/>";
    echo "Endereço:".$endr."<br/>";
    echo "User:".$usuar."<br/>";
    echo "Login:".$log."<br/>";
    echo "Senha:".$snh."<br/>";
    echo "Confirmação de senha:".$conf."<br/>";

    echo "<br/><br/><br/>Confirmação de senha invalida!! <a href='form.html'>Volte ao Formulário</a>";
  }
  else{
    echo "Nome do usuario:".$nome."<br/>";
    echo "Email:".$email."<br/>";
    echo "Nascimento:".$data."<br/>";
    echo "Endereço:".$endr."<br/>";
    echo "User:".$usuar."<br/>";
    echo "Login:".$log."<br/>";
    echo "Senha:".$snh."<br/>";
    echo "Confirmação de senha:".$conf."<br/>";

    echo "<br/><br/><br/>Senha validada com sucesso!";
  }    
  
else{
 echo "Você não esta autorizado a acessar está página!!!!!<br/><a href='form.html'>Volte ao Formulário</a>"
  }
};
?>