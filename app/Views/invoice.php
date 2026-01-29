<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>

<h2>INVOICE</h2>

<p><strong>Client:</strong> <?= htmlspecialchars($name) ?></p>
<p><strong>Amount:</strong> $<?= number_format($amount, 2) ?></p>
<p><strong>Date:</strong> <?= $date ?></p>

</body>
</html>
