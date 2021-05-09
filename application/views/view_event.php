<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
</head>

<body>
    <p><?= $event->name ?></p>
    <a href="<?= base_url() . 'catalog/' . $event->id . '/ticket' ?>">Beli Tiket</a>
</body>

</html>