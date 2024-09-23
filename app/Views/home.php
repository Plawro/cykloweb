<?=$this->extend("layout/master");?>
<?=$this->section("content");?>


<?php
    foreach($array as $row){
        echo "<div class='container'>
                <p>".$row->default_name."</p>
             </div>";
    } 
?>


<?=$this->endSection();?>