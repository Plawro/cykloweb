<?php

echo $this->extend('layout/master');
echo $this->section('content');

echo form_open('registerComplete');
if (!empty($message)) {
    echo '<div class="alert alert-danger text-center" role="alert">'
         . $message .
         '</div>';
}

?>

<div class="text-center mb-4">
    <h1 class="text-uppercase register-title">
        <i class="fa-solid fa-arrows-rotate fa-spin"></i> Registrace
    </h1>
</div>

<div class="register-group mx-auto" style="max-width: 400px;">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="user" placeholder="Enter username" name="user" required>
        <label for="user">Username</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        <label for="name">Jméno</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname" required>
        <label for="surname">Příjmení</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        <label for="email">Email</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" placeholder="" name="password" required>
        <label for="password">Password</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="passwordConfirm" placeholder="" name="passwordConfirm" required>
        <label for="passwordConfirm">Password again</label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Registrace</button>
</div>

<?php
echo form_close();
echo $this->endSection();
?>
