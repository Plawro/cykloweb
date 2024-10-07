<?=$this->extend("layout/master");?>

<?=$this->section("content");?>

<?php

$table = new \CodeIgniter\View\Table();
$template = array(
    'table_open'=> '<table class="table table-bordered mt-5">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=> '</tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end'=> '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
);
$table->setTemplate($template);

$table->setHeading('First Name', 'Last Name', 'Country', 'Date of Birth', 'Place of Birth', 'Photo', 'Weight', 'Height', 'Link', 'Place Link', 'In Results');

$photo = $rider->photo ? '<img src="'.base_url('uploads/'.$rider->photo).'" class="img-fluid" alt="Rider Photo">' : 'No Photo';
$inResults = $rider->in_results ? 'Yes' : 'No';

$placeOfBirth = $rider->place_of_birth_name ? $rider->place_of_birth_name : 'Unknown';

$table->addRow(
    $rider->first_name,
    $rider->last_name,
    $rider->country,
    date('d.m.Y', strtotime($rider->date_of_birth)),
    $placeOfBirth,
    $photo,
    $rider->weight . ' kg',
    $rider->height . ' cm',
    '<a href="'.$rider->link.'">Profile Link</a>',
    '<a href="'.$rider->place_link.'">Place Link</a>',
    $inResults
);

echo $table->generate();
?>

<?=$this->endSection("content");?>
