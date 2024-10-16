<?php
$this->extend("layout/master");
$this->section("content");

echo '<h1 class="text-center"> Seznam závodníků </h1>';
echo '<div class="containter">';
echo '<div class="row">';

foreach($rider as $row) {
    echo '<div class="col-sm-6 col-md-3 col-6">';

    echo '<div class="card mt-3" style="width: 22rem;">
    <div class="card-header fw-bold text-center  text-white bg-dark" style="height: 3rem;"> '.anchor('index.php/rider/'.$row->id, $row->fist_name).' </div>
    <div class="btn btn-dark"> '.anchor('edit-sloupec/edit/'.$seznam->id, "Upravit").' </div>
    <div class="btn btn-dark"> '.anchor('delete-sloupec/delete/'.$seznam->id, "Smazat").' </div>


    
    </div>';
    echo '</div>';
}

echo '</div>';

echo anchor('add-sloupec/novy', 'Přidat závodníka', 'class="btn btn-dark"');

echo '</div>';

echo $pager->links();

$this->endSection();
?>