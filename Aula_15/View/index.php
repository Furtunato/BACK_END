<?php
require_once __DIR__ . '/../Controller/bebidaController.php';

use Controller\BebidaController;

$controller = new BebidaController();

// Lógica das ações
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

$lista = $controller->ler();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Bebidas</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #1e88e5;
            color: white;
            padding: 15px 20px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 40px;
            color: #1e88e5;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        form input, form select {
            flex: 1 1 150px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            background: #1e88e5;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 16px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px;
        }

        button:hover {
            background: #1565c0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background: #f0f0f0;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .delete-btn {
            background: #e53935;
        }

        .delete-btn:hover {
            background: #b71c1c;
        }

        footer {
            text-align: center;
            padding: 10px;
            color: #777;
            font-size: 13px;
        }
    </style>
</head>
<body>
<header>🍾 Sistema de Gerenciamento de Bebidas</header>

<main>
    <h2>Cadastrar nova bebida</h2>
    <form method="POST">
        <input type="hidden" name="acao" value="criar">
        <input type="text" name="nome" placeholder="Nome da bebida" required>
        <select name="categoria" required>
            <option value="">Categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="text" name="volume" placeholder="Volume (ex: 350ml)" required>
        <input type="number" step="0.01" name="valor" placeholder="Valor (R$)" required>
        <input type="number" name="qtde" placeholder="Quantidade" required>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Bebidas cadastradas</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Volume</th>
            <th>Valor (R$)</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>

        <?php if (empty($lista)): ?>
            <tr><td colspan="6">Nenhuma bebida cadastrada ainda.</td></tr>
        <?php else: ?>
            <?php foreach ($lista as $bebida): ?>
                <tr>
                    <td><?= htmlspecialchars($bebida->getNome()) ?></td>
                    <td><?= htmlspecialchars($bebida->getCategoria()) ?></td>
                    <td><?= htmlspecialchars($bebida->getVolume()) ?></td>
                    <td><?= number_format($bebida->getValor(), 2, ',', '.') ?></td>
                    <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="acao" value="deletar">
                            <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                            <button type="submit" class="delete-btn" onclick="return confirm('Deseja excluir esta bebida?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</main>
</body>
</html>
