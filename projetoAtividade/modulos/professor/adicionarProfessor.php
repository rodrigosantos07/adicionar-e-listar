<?php include('classes/Professor.class.php');
    include('classes/class.DB.php');
    $con = DB::conexao();
?>

<h1>Adicionar Professor</h1>

<form class="adicionaraluno" method="post" action="">
 Nome: <input type='text' name='nome'> <br/><br/>
 Especialidade: <input type='text' name='especialidade'> <br/><br/>
 Idade: <input type='text' name='idade'><br/><br/>
 Email: <input type='text' name='email'><br/><br/>
<input type='submit' name='botao' value="Salvar">
</form>
<br/><br/><br/><br/>
<?php

if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){

$professor = new Professor();
$professor->setNome($_POST['nome']);    
$professor->setEspecialidade($_POST['especialidade']);
$professor->setIdade($_POST['idade']);
$professor->setEmail($_POST['email']);
$professor->adicionar();


echo "<br/>  O nome inserido é: ".$aluno->getNome();
echo "<br/>  a Especialidade é: ".$aluno->getEspecialidade();
echo "<br/>  A idade inserida é: ".$aluno->getIdade();
echo "<br/>  O Email inserido é: ".$aluno->getEmail();

}
    
?>