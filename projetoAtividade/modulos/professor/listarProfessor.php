<?php
    include('classes/Professor.class.php');
    include('classes/class.DB.php');
    $con = DB::conexao();

            
?>
<table class = "listarProfessor" border = "1">

<tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Especialidade</th>
    <th>Idade</th>
    <th>Email</th>
   
    
</tr>

<?php
     $professores = Professor::Listar();
     if($professores){
    foreach($professores as $professor){
?>
    <tr>
        <td><?php echo $professor->getId();?></td>
        <td><?php echo $professor->getNome();?></td>
        <td><?php echo $professor->getEspecialidade();?></td>
        <td><?php echo $professor->getIdade();?></td>
        <td><?php echo $professor->getEmail();?></td>
        

    </tr>
<?php
    }}
?>
</table>