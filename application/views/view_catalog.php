</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/katalog.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="nav"></div>
        <div class="card-bundle">
            <?php foreach ($events as $event) { ?>
                <div class="card <?= $event->id == 1 ? 'card1': ''?>">
                    <img src="<?= base_url() ?>assets/img/<?= $event->image_path ?>">
                    <p class="judul"><?= $event->name ?></p>
                    <div class="deskripsi">
                        <p><?= $event->description ?></p>
                    </div>
                    <a href="<?= base_url() . 'catalog/' . $event->id ?>">
                        <button class="button">more</button>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>