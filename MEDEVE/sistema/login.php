<?php
include "config/config.php";
include "data/dados.php";
include "includes/header.php";

$erro = "";

if ($_POST) {
    $logou = false;

foreach ($usuarios as $u) {
    if ($_POST["usuario"] == $u["usuario"] && $_POST["senha"] == $u["senha"]) {
        $logou = true;
        $_SESSION["usuario"] = $u["usuario"];
        $_SESSION["perfil"]  = $u["perfil"];
        break; 
    }
}

if ($logou) {
    header("Location: ./pages/dashboard.php");
    exit;
} else {
    $erro = "Login errado";
}
}
?>

<h3>Login</h3>

<form method="POST" class="col-md-4">
    <input name="usuario" class="form-control mb-2" placeholder="Usuário">
    <input type="password" name="senha" class="form-control mb-2" placeholder="Senha">
    <button class="btn btn-primary w-100">Entrar</button>
</form>

<?php if ($erro): ?>
<div class="alert alert-danger mt-2"><?php echo $erro; ?></div>
<?php endif; ?>

</div>
</body>
</html>