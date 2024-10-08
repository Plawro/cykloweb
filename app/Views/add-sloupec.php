<?php
$this->extend("layout/master");
$this->section("content");

echo'<h1 class="text-center">Přídání kategorie</h1>';

echo '<div class="card mt-3" style="width: 14rem;">
    <div class="card-header fw-bold text-center  text-white bg-dark" style="height: 3rem;">'.anchor('rider/1', "zpět").' </div>
    </div>';

echo form_open('add-sloupec/novy/complete');

echo '<div class="text-center">';
$nazev1 = array(
"class" => "form-label"
);
echo form_label('Jméno', '', $nazev1);

echo '<div class="text-center">';
$pole1 = array(
"type" => "text"
);
echo form_input('first_name', '', $pole1);

echo '<div class="text-center">';
$nazev2 = array(
"class" => "form-label"
);
echo form_label('Přijmení', '', $nazev2);

echo '<div class="text-center">';
$pole2 = array(
"type" => "text"
);
echo form_input('last_name', '', $pole2);

echo '<div class="text-center">';
$nazev3 = array(
"class" => "form-label"
);
echo form_label('Země (zkratka)', '', $nazev3);

echo '<div class="text-center">';
$pole3 = array(
"type" => "text"
);
echo form_input('country', '', $pole3);

echo '<div class="text-center">';
$nazev4 = array(
"class" => "form-label"
);
echo form_label('Datum narození (Y-M-D)', '', $nazev4);

echo '<div class="text-center">';
$pole4 = array(
"type" => "text"
);
echo form_input('date_of_birth', '', $pole4);

echo '<div class="text-center">';
$nazev5 = array(
"class" => "form-label"
);
echo form_label('Místo narození (čísla do 2868)', '', $nazev5);

echo '<div class="text-center">';
$pole5 = array(
"type" => "text"
);
echo form_input('place_of_birth', '', $pole5);

echo '<div class="text-center">';
$nazev6 = array(
"class" => "form-label"
);
echo form_label('Fotka (název souboru s příponou)', '', $nazev6);

echo '<div class="text-center">';
$pole6 = array(
"type" => "text"
);
echo form_input('photo', '', $pole6);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Váha (celé čísla)', '', $nazev7);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text"
);
echo form_input('weight', '', $pole7);
echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Výška (celé čísla)', '', $nazev8);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text"
);
echo form_input('height', '', $pole8);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Odkaz', '', $nazev9);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text"
);
echo form_input('link', '', $pole9);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Místo odkazu', '', $nazev10);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text"
);
echo form_input('place_link', '', $pole10);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Výsledky (vždy 1)', '', $nazev11);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text"
);
echo form_input('inResults', '', $pole11);

echo '<div class="text-center">';
$meziPole = array(
"class" => "form-label"
);
echo form_label('', '', $meziPole);

echo '<div class="text-center">';
$button = array(
"type" => "submit",
"class" => "btn btn-dark",
"value" => "Přidat",
);
echo form_input($button);


echo form_close();
$this->endSection();
?>