<?php
session_start();

if (!isset($_SESSION['array_data'])) {
    $_SESSION['array_data'] = ["PHP", "HTML", "CSS"];
}

if (isset($_POST['action'])) {

    if ($_POST['action'] === 'add' && !empty($_POST['value'])) {
        $_SESSION['array_data'][] = htmlspecialchars($_POST['value']);
    }

    if ($_POST['action'] === 'delete' && isset($_POST['index'])) {
        $index = intval($_POST['index']);

        if (isset($_SESSION['array_data'][$index])) {
            array_splice($_SESSION['array_data'], $index, 1);
        }
    }

    if ($_POST['action'] === 'reset') {
        $_SESSION['array_data'] = ["PHP", "HTML", "CSS"];
    }

    header("Location: array.php");
    exit;
}

$data = $_SESSION['array_data'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array | DataStructureLab</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .page {
            max-width: 1100px;
            margin: auto;
            padding: 70px 25px;
        }

        .page-title {
            margin-bottom: 40px;
        }

        .page-title small {
            color: #6f9cff;
        }

        .page-title h1 {
            font-size: 45px;
            margin: 10px 0;
        }

        .page-title p {
            color: var(--muted);
        }

        .panel {
            background: #111728;
            border: 1px solid #283149;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .controls {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        input {
            background: #0b101d;
            border: 1px solid #303950;
            color: white;
            padding: 13px;
            border-radius: 9px;
            outline: none;
        }

        button {
            border: none;
            cursor: pointer;
            padding: 13px 18px;
            border-radius: 9px;
            color: white;
            font-weight: 600;
            background: #5b8cff;
        }

        button:hover {
            opacity: .85;
        }

        .reset {
            background: #343c52;
        }

        .array-container {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .array-item {
            width: 140px;
            background: linear-gradient(145deg, #1a2340, #12182b);
            border: 1px solid #34415f;
            border-radius: 13px;
            text-align: center;
            padding: 20px 10px;
            animation: pop .35s ease;
        }

        .array-index {
            color: #6f9cff;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .array-value {
            font-weight: 700;
        }

        .arrow {
            display: flex;
            align-items: center;
            color: #3c4864;
        }

        .info {
            margin-top: 25px;
            color: #8791ab;
            font-size: 14px;
        }

        @keyframes pop {
            from {
                opacity: 0;
                transform: scale(.7);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="logo">⚡ DataStructure<span>Lab</span></div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="array.php">Array</a>
        <a href="linked-list.php">Linked List</a>
        <a href="stack.php">Stack</a>
    </div>
</nav>

<div class="page">

    <div class="page-title">
        <small>01 / LINEAR DATA STRUCTURE</small>
        <h1>📦 Array Simulator</h1>
        <p>
            Array menyimpan data secara berurutan dan setiap elemen
            memiliki indeks.
        </p>
    </div>

    <div class="panel">

        <h3>Tambah Elemen</h3>

        <br>

        <form method="POST" class="controls">

            <input
                type="text"
                name="value"
                placeholder="Contoh: JavaScript"
                required
            >

            <button name="action" value="add">
                + Tambah
            </button>

            <button
                type="submit"
                name="action"
                value="reset"
                class="reset">
                Reset
            </button>

        </form>

    </div>

    <div class="panel">

        <h3>Visualisasi Array</h3>

        <div class="array-container">

            <?php foreach ($data as $index => $value): ?>

                <div class="array-item">

                    <div class="array-index">
                        INDEX [<?= $index ?>]
                    </div>

                    <div class="array-value">
                        <?= htmlspecialchars($value) ?>
                    </div>

                    <br>

                    <form method="POST">

                        <input
                            type="hidden"
                            name="index"
                            value="<?= $index ?>"
                        >

                        <button
                            name="action"
                            value="delete"
                            style="background:#ef4444;font-size:11px;padding:7px 10px;">
                            Hapus
                        </button>

                    </form>

                </div>

                <?php if ($index < count($data)-1): ?>

                    <div class="arrow">→</div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <div class="info">
            Total elemen: <strong><?= count($data) ?></strong>
        </div>

    </div>

</div>

</body>
</html>
