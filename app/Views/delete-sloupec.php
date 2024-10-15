<?php
$this->extend("layout/master");
$this->section("content");

echo'<h1 class="text-center">Smazání kategorie: '.$riders->first_name + $riders->last_name.'</h1>';

echo '<div class="card mt-3" style="width: 14rem;">
    <div class="card-header fw-bold text-center  text-white bg-dark" style="height: 3rem;">'.anchor('riders', "zpět").' </div>
    </div>';

echo form_open('delete-sloupec/delete/complete');

echo '<div class="text-center">';
$button = array(
"type" => "submit",
"class" => "btn btn-dark",
"value" => "Smazat",
);
echo form_input($button);

echo '<input type="hidden" name="_method" value="DELETE">';
echo '<input type="hidden" name="id" value="'.$riders->id.'">';

echo form_close();
$this->endSection();
?>