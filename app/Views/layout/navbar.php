
<nav style="display: <?= !$isPDF ? 'block' : 'none'; ?>" class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('races')?>">Závody</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('randomRider')?>">Závodník</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('genPDF')?>">PDF</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="<?=base_url('/')?>">Cykloweb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto">
                    <?php
                    if (!$isLogged){
                        echo "<li class='nav-item'>";
                        echo anchor('login','Přihlášení',['class' => 'btn btn-primary me-2']);
                        echo '</li>';

                        echo "<li class='nav-item'>";
                        echo anchor('register','Registrace',['class' => 'btn btn-primary']);
                        echo '</li>';
                    }
                    if ($isLogged){
                        echo "<li class='nav-item me-4 d-flex align-items-center'>";
                        echo "<p class='text-secondary mb-0'>". $username ."</p>";
                        echo '</li>';

                        echo "<li class='nav-item'>";
                        echo anchor('logout','Odhlásit',['class' => 'btn btn-primary']);
                        echo '</li>';
                    }
                    ?>
                
            </ul>
        </div>
    </div>
</nav>