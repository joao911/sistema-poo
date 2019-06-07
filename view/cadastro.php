<h1>Cadastro</h1>
<form action="index.php?pessoas" method="post">
<input type="text" name="nome" id=""placeholder="nome pessoa">
<input type="number" name="cpf" id="" placeholder="cpf pessoa">
<input type="number" name="idade" id="" placeholder="idade pessoa">
<select name="tipoPessoa" id="#">
<option value="usuario">Usuário</option>
<option value="usuario">Funcionário</option>
</select>
<input type="text" name="usuario" placeholder="Usuario">
<input type="password" name="senha" placeholder="Senha">
<input type="number" name="salario" placeholder="salario">
<button type="submit">Enviar</button>
</form>