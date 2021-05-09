<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
</head>

<body>
    <ul>
        <?php foreach ($events as $event) { ?>
            <li>
                <a href="<?= base_url() . 'catalog/' . $event->id ?>"><?= $event->name ?></a>
            </li>
        <?php } ?>
    </ul>
</body>

</html>