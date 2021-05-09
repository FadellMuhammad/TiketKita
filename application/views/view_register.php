<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?= form_open(base_url() . 'register') ?>
    <div class="input-m">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
        <?= form_error('email'); ?>
    </div>
    <div class="input-m">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <?= form_error('password'); ?>
    </div>
    <div class="input-m">
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2" placeholder="Ketik ulang Password">
        <?= form_error('password2'); ?>
    </div>
    <button type="submit" name="registrasi">
        Buat Akun
    </button>
    <?= form_close() ?>
</body>

</html>