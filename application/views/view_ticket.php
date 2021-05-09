<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tickets</title>
</head>
<body>
    <ul>
        <?php foreach ($tickets as $ticket) { ?>
            <li>
                <p>event: <?= $ticket->eventname ?></p>
                <p>pembeli: <?= $ticket->username ?></p>
                <p>institusi: <?= $ticket->institution ?></p>
                <p>code: <?= $ticket->code ?? 'Pembayaran belum di verifikasi' ?></p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>