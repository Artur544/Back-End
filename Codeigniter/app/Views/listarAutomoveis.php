<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<style>

#sucess {
  font-family: 'Arial';
  color: white;
  background: green;
  width: 100%;
  height: 30px;
  line-height: 30px;
  text-align: center;
}

#remove {
  font-family: 'Arial';
  color: white;
  background: red;
  width: 100%;
  height: 30px;
  line-height: 30px;
  text-align: center;
}
<input type="hidden" name="id_up" value="<?=$dados['codigo']?>">  
#edit {
  font-family: 'Arial';
  color: white;
  background-color: 'rgb(0, 200, 0)';
  width: 100%;
  height: 30px;
  line-height: 30px;
  text-align: center;
}

</style>

<h2> Dados dos automóveis </h2>
<p><a href="http://localhost:8080/form_insert">Inserir automóveis</a></p>

<?php
if (session()->get('success')){
    echo "<div id='sucess'><strong> ". session()->getFlashdata('success')."</strong></div>";
}
if (session()->get('success_remove')){
    echo "<div id='remove'><strong>". session()->getFlashdata('success_remove')."</strong></div>";
}
if (session()->get('edit')){
  echo "<div id='edit'><strong>". session()->getFlashdata('edit')."</strong></div>";
}
?>



<table>
  <tr>
    <th>Codigo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Km</th>
    <th>Preco</th>
    <th> </th>
  </tr>
  <?php

foreach ($dados as $auto){
echo "<tr>  <td> ".$auto['codigo']. "</td>  <td>". $auto['marca']. "</td> <td>".$auto['modelo']."</td> <td>".$auto['km']." </td> <td>". $auto['preco']." </td> 
<td>";
?>

<form method="post" action="/remover">
<input type="hidden" name="id_removed" value="<?=$auto['codigo']?>">   
<button type="submit"> Remover </button>
</form>


</td><td>

<form method="get" action="/formupdate/<?=$auto['codigo']?>"> 
<button type="submit"> Editar </button>
</form>

<?php
echo "</td> </tr>";
}
?>
</table>


<br><BR>
<br><BR>
<br><BR>
<br><BR>
<br><BR>

</body>
</html>
