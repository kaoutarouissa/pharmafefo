<h1> Produits expirant dans les joursprochaines</h1>

<?php if (!empty($expiring) && is_array($expiring)): ?>

<table border="1" cellpadding="10" cellspacing="0" style="width:100%; background:white;">
    <tr style="background:#0f172a; color:white;">
        <th>Produit</th>
        <th>Lot</th>
        <th>Quantité</th>
        <th>Date péremption</th>
    </tr>

    <?php foreach ($expiring as $e): ?>
        <tr style="background:#ffedd5;">
            <td><?= htmlspecialchars($e['name']) ?></td>
            <td><?= htmlspecialchars($e['lot_number']) ?></td>
            <td><?= htmlspecialchars($e['quantity']) ?></td>
            <td><?= htmlspecialchars($e['expiry_date']) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php else: ?>

    <p style="color:green; font-weight:bold;">
        ✅ Aucun produit en alerte pour le moment
    </p>

<?php endif; ?>