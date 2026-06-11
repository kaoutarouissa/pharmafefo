<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Préparateur</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f1f5f9;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    height: 100vh;
    background: #0f172a;
    color: white;
    position: fixed;
    padding: 20px;
}

.sidebar h2 {
    color: #38bdf8;
}

.sidebar a {
    display: block;
    color: white;
    text-decoration: none;
    margin: 15px 0;
    padding: 10px;
    border-radius: 8px;
}

.sidebar a:hover {
    background: #1e293b;
}

/* MAIN */
.main {
    margin-left: 240px;
    padding: 20px;
}

/* CARDS */
.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card h3 {
    margin: 0;
}

/* FORM */
.form-box {
    background: white;
    padding: 20px;
    margin-top: 20px;
    border-radius: 12px;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ddd;
}

button {
    padding: 10px 15px;
    background: #3b82f6;
    color: white;
    border: none;
    border-radius: 8px;
}

/* TABLE */
table {
    width: 100%;
    background: white;
    margin-top: 20px;
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background: #0f172a;
    color: white;
}

tr:nth-child(even) {
    background: #f8fafc;
}

.badge {
    padding: 5px 10px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: bold;
    display: inline-block;
}


.green {
    /* background: #dcfce7; */
    color:green;
       font-weight: bold;
}

/* 🟠 WARNING (90 days) */
.orange {
    /* background: #ffedd5; */
    color: orange;
       font-weight: bold;
}

/* 🔴 URGENT (30 days) */
.red {
    /* background: #fee2e2; */
    color:red;
       font-weight: bold;
}

.yellow {
    /* background: #fef9c3; */
    color:yellow;
       font-weight: bold;
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>Pharma FEFO</h2>
    <a href="#">📊 Dashboard</a>
    <a href="#">📦 Stock</a>
    <a href="#">➕ Ajouter produit</a>
    <a href="#">⚠️ Alertes</a>
    <a href="#">🚪 Logout</a>
</div>

<!-- MAIN -->
<div class="main">

    <h1>Dashboard Préparateur</h1>

    <!-- CARDS -->
    <div class="cards">
        <div class="card">
            <h3>Produits</h3>
            <p>120</p>
        </div>

        <div class="card">
            <h3>Lots</h3>
            <p>340</p>
        </div>

        <div class="card">
            <h3>Expiring</h3>
            <p>15</p>
        </div>

        <div class="card">
            <h3>Stock faible</h3>
            <p>8</p>
        </div>
    </div>

    <!-- FORM ADD PRODUCT -->
    <div class="form-box">
        <h2>Ajouter produit</h2>

      <form method="POST" action="index.php?action=store_stock">

    <select name="product_id">
    <option value="1">Paracétamol</option>
    <option value="2">Amoxicilline</option>
    <option value="3">Vitamine C</option>
</select>
    <input type="text" name="lot_number" placeholder="Lot number">
    <input type="date" name="expiry_date">
    <input type="number" name="quantity" placeholder="Quantity">
    <input type="text" name="status" placeholder="status de produit">

    <button>Ajouter</button>
</form>
    </div>

    <!-- TABLE STOCK -->
    <h2>Stock (FEFO)</h2>

    <table>
        <tr>
            <th>Produit</th>
            <th>Lot</th>
            <th>Expiration</th>
            <th>Quantité</th>
            <th>Status</th>
        </tr>

        
   <?php if (!empty($stock) && is_array($stock)): ?>

        <?php foreach ($stock as $s): ?>

            <?php
                $today = new DateTime();
                $expiry = new DateTime($s['expiry_date']);

                if ($expiry < $today) {
                    $status = 'EXPIRED';
                } else {

                    $days = $today->diff($expiry)->days;

                    if ($days <= 30) {
                        $status = 'EXPIRING_30_DAYS';
                    } elseif ($days <= 90) {
                        $status = 'EXPIRING_90_DAYS';
                    } else {
                        $status = 'ACTIVE';
                    }
                }
            ?>

            <tr>
                <td><?= htmlspecialchars($s['name']) ?></td>
                <td><?= htmlspecialchars($s['lot_number']) ?></td>
                <td><?= htmlspecialchars($s['expiry_date']) ?></td>
                <td><?= htmlspecialchars($s['quantity']) ?></td>

                <td>

<?php if ($status === 'ACTIVE'): ?>

    <span class="badge green">ACTIVE</span>

<?php elseif ($status === 'EXPIRING_90_DAYS'): ?>

    <span class="yellow">Proche de péremption</span>

<?php elseif ($status === 'EXPIRING_30_DAYS'): ?>

    <span class="orange">Très proche</span>

<?php else: ?>

    <span class="red">EXPIRED</span>

<?php endif; ?>

</td>

            </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="5">
                Aucun stock trouvé
            </td>
        </tr>

    <?php endif; ?>

       

    </table>

</div>

</body>
</html>