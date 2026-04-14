<?php
include "../config/config.php";
include "../includes/auth.php";
include "../includes/header.php";
?>

<h3>Dashboard</h3>

<p>Bem vindo <?php echo $_SESSION["usuario"]; ?></p>

<a href="contas.php" class="btn btn-primary btn-sm">Contas</a>
<a href="../logout.php" class="btn btn-danger btn-sm">Sair</a>

</div>
</body>
</html>