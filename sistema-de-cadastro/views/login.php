<?php
$page="Login";
include("views/header.php");
?>
	<div id="cadastrar"><a href="./cadastro.php" title="Cadastre-se e venha fazer sua festa!"> Cadastre-se &raquo;</a></div>
	<div id="login" class="form bradius">
		<div class="message" style="<?php echo $display?>"><?php echo $msg;?></div>
		<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img class="logoimg" src="css/imagens/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?>"
			width="150" height="100"/></a></div>
		<div class="acomodar">
		<form name="login" method="post" action="index.php?acao=logar">
			<label for="usuario">Usuário:</label><input type="text" class="txt bradius" id="usuario" name="usuario" value=""/>
			<label for="senha">Senha:</label><input type="password" class="txt bradius" id="senha" name="senha" value=""/>
			<input type="submit" class="sb bradius" value="Entrar">
		</form>
		<!--acomodar-->
		</div>
		<!--login-->
	</div>

</body>
</html>
