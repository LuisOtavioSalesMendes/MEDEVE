<?php
include "../config/config.php";
include "../includes/auth.php";
include "../data/dados.php";

if (!isset($_SESSION['contas'])) {
    $_SESSION['contas'] = $contas;
}

if ($_POST) {
    $novaConta = [
        "descricao" => $_POST["descricao"],
        "valor"     => $_POST["valor"],
        "tipo"      => $_POST["tipo"],
        "status"    => "Pendente"
    ];
    $_SESSION['contas'][] = $novaConta;
    header("Location: contas.php");
    exit;
}

if (isset($_GET['pagar'])) {
    $indice = $_GET['pagar'];
    $_SESSION['contas'][$indice]['status'] = "Pago";
}

if (isset($_GET['excluir'])) {
    $indice = $_GET['excluir'];
    $conta = $_SESSION['contas'][$indice];

if ($_SESSION["perfil"] != "cliente" || $conta["status"] == "Pago" || $conta["tipo"] == "Receber") {
        unset($_SESSION['contas'][$indice]);
        $_SESSION['contas'] = array_values($_SESSION['contas']);
    }
}

$contas = $_SESSION['contas'];

include "../includes/header.php";
?>

<h3>Contas</h3>

<form method="POST" class="row g-2 mb-3">
    <div class="col">
        <input name="descricao" class="form-control" placeholder="Descrição">
    </div>
    <div class="col">
        <input name="valor" class="form-control" placeholder="Valor">
    </div>
    <div class="col">
        <select name="tipo" class="form-select">
            <option>Pagar</option>
            <option>Receber</option>
        </select>
    </div>
    <div class="col">
        <button class="btn btn-success w-100">Adicionar</button>
    </div>
</form>

<?php if (count($contas) == 0): ?>
    <p>Nenhuma conta cadastrada.</p>
<?php else: ?>
<table class="table table-bordered table-sm">
    <tr>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Tipo</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($contas as $i => $c): ?>
    <tr>
        <td><?= $c["descricao"] ?></td>
        <td><?= $c["valor"] ?></td>
        <td><?= $c["tipo"] ?></td>
        <td><?= $c["status"] ?></td>
        <td>
    <?php if ($c["tipo"] != "Receber"): ?>
        <a href="?pagar=<?= $i ?>" class="btn btn-success btn-sm">Pagar</a>
    <?php endif; ?>

<?php if ($_SESSION["perfil"] != "cliente" || $c["status"] == "Pago" || $c["tipo"] == "Receber"): ?>
    <a href="?excluir=<?= $i ?>" class="btn btn-danger btn-sm">Excluir</a>
<?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>

<a href="dashboard.php" class="btn btn-secondary btn-sm">Voltar</a>

</div>
</body>
</html>