<?php
    include('classes/Aluno.class.php');
    include('classes/class.DB.php');
    $con = DB::conexao();

            
?>
<table class = "listarAluno" border = "1">

<tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Email</th>
    
    
</tr>

<?php
     $alunos = Aluno::Listar();
     if($alunos){
    foreach($alunos as $aluno){
?>
    <tr>
        <td><?php echo $aluno->getId();?></td>
        <td><?php echo $aluno->getNome();?></td>
        <td><?php echo $aluno->getIdade();?></td>
        <td><?php echo $aluno->getEmail();?></td>
       

    </tr>
<?php
    }}
?>
</table>