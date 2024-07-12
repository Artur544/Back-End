<h1> Editar Automóveis </h1>

<form method="post" action="/update">
<input type="hidden" name="id_up" value="<?=$dados['codigo']?>">  
<label> Marca: </label><br>
<input type="text" name="marca_update" value="<?=$dados['marca']?>"><br>
<label> Modelo: </label><br>
<input type="text" name="modelo_update" value="<?=$dados['modelo']?>"><br>
<label> Ano: </label><br>
<input type="number" name="ano_update" value="<?=$dados['ano']?>"><br>
<label> Km: </label><br>
<input type="number" name="km_update" value="<?=$dados['km']?>"><br>
<label> Preço: </label><br>
<input type="number" name="preco_update" value="<?=$dados['preco']?>"><br>
<button type="submit"> Enviar </button>

</form>