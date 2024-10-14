<?php

echo $this->extend('layout/master');
echo $this->section('content');

echo form_open('loginComplete');
if (!empty($message)) {
    echo '<div class="alert alert-danger text-center" role="alert">'
         . $message .
         '</div>';
}

?>

<div class="text-center mb-4">
    <h1 class="text-uppercase login-title">
        <i class="fa-solid fa-arrows-rotate fa-spin"></i> Přihlášení
    </h1>
</div>

<div class="login-group mx-auto" style="max-width: 400px;">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        <label for="email">Email</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" placeholder="Heslo" name="password" required>
        <label for="password">Heslo</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Přihlášení</button>
</div>

<?php
echo form_close();
echo $this->endSection();
?>
