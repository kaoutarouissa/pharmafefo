<h1>Stock batches</h1>

<table border="1">
    <?php foreach ($batches as $batch): ?>
        <tr>
            <td><?= $batch['lot_number'] ?></td>
            <td><?= $batch['expiry_date'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>