<?php include("classes/Curso.class.php");
      include("classes/class.DB.php");
      $con = DB::conexao();

   ?> 

<table class = "listarcurso" border = "1">

<tr>
    
    <th>Curso</th>
    <th>Preço</th>
    <th colspan= '2'>Operação</th>
</tr>

<?php
    $cursos = Curso::Listar();
    if($cursos){
    foreach($cursos as $curso){
?>
<tr>
        
        <td><?php echo $curso->getNome(); ?></td>
        <td><?php echo $curso->getPreco(); ?></td>
        
</tr>
<?php } } ?>
</table>