<?php
$this->extend("layout/master");
$this->section("content");

echo'<h1 class="text-center">Přídání závodníka</h1>';

echo '<div class="card mt-3" style="width: 14rem;">
    <div class="card-header fw-bold text-center  text-white bg-dark" style="height: 3rem;">'.anchor('riders', "zpět").' </div>
    </div>';

echo form_open('add-sloupec/novy/complete');

echo '<div class="text-center">';
$nazev1 = array(
"class" => "form-label"
);
echo form_label('Jméno', '', $nazev1);

echo '<div class="text-center">';
$pole1 = array(
"type" => "text",
"value" => $riders->first_name,
"name" => "first_name"
);
echo form_input($pole1);

echo '<div class="text-center">';
$nazev2 = array(
"class" => "form-label"
);
echo form_label('Přijmení', '', $nazev2);

echo '<div class="text-center">';
$pole2 = array(
"type" => "text",
"value" => $riders->last_name,
"name" => "last_name"
);
echo form_input($pole2);

echo '<div class="text-center">';
$nazev3 = array(
"class" => "form-label"
);
echo form_label('Země (zkratka)', '', $nazev3);

echo '<div class="text-center">';
$pole3 = array(
"type" => "text",
"value" => $riders->country,
"name" => "country"
);
echo form_input($pole3);

echo '<div class="text-center">';
$nazev4 = array(
"class" => "form-label"
);
echo form_label('Datum narození (Y-M-D)', '', $nazev4);

echo '<div class="text-center">';
$pole4 = array(
"type" => "text",
"value" => $riders->date_of_birth,
"name" => "date_of_birth"
);
echo form_input($pole4);

echo '<div class="text-center">';
$nazev5 = array(
"class" => "form-label"
);
echo form_label('Místo narození (čísla do 2868)', '', $nazev5);

echo '<div class="text-center">';
$pole5 = array(
"type" => "text",
"value" => $riders->place_of_birth,
"name" => "place_of_birth"
);
echo form_input($pole5);

echo '<div class="text-center">';
$nazev6 = array(
"class" => "form-label"
);
echo form_label('Fotka (název souboru s příponou)', '', $nazev6);

echo '<div class="text-center">';
$pole6 = array(
"type" => "text",
"value" => $riders->photo,
"name" => "photo"
);
echo form_input($pole6);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Váha (celé čísla)', '', $nazev7);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text",
"value" => $riders->weight,
"name" => "weight"
);
echo form_input($pole7);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Výška (celé čísla)', '', $nazev8);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text",
"value" => $riders->height,
"name" => "height"
);
echo form_input($pole8);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Odkaz', '', $nazev9);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text",
"value" => $riders->link,
"name" => "link"
);
echo form_input($pole9);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Místo odkazu', '', $nazev10);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text",
"value" => $riders->place_link,
"name" => "place_link"
);
echo form_input($pole10);

echo '<div class="text-center">';
$nazev7 = array(
"class" => "form-label"
);
echo form_label('Výsledky (vždy 1)', '', $nazev11);

echo '<div class="text-center">';
$pole7 = array(
"type" => "text",
"value" => $riders->inResults,
"name" => "inResults"
);
echo form_input($pole11);

echo '<div class="text-center">';
$meziPole = array(
"class" => "form-label"
);
echo form_label('', '', $meziPole);

echo '<div class="text-center">';
$button = array(
"type" => "submit",
"class" => "btn btn-dark",
"value" => "Upravit",
);
echo form_input($button);

echo '<input type="hidden" name="_method" value="PUT">';
echo '<input type="hidden" name="id" value="'.$riders->id.'">';

echo form_close();
$this->endSection();
?>