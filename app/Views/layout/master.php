<html>
    <head> 
        <title><?=$title?></title>
        <?= $this->include("layout/assets");?> 
    </head> 
    <body>
        <?= $this->include("layout/navbar");?>

        <div class= "container-fluid">
            <?= $this->renderSection("content"); ?>
        </div>

    <?= $this->include("layout/footer");?>
    </body>
</html>