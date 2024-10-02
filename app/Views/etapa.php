<?=$this->extend("layout/master");?>

<?=$this->section("content");?>
<h1 class="text-center mt-3">Přehled etap závodu: <?= $name->real_name ?></h1>
<?php
$table = new \CodeIgniter\View\Table();
$template = array(
    'table_open'=> '<table class="table table-bordered table-striped table-hover mt-5">',
    'thead_open'=> '<thead>',
    'thead_close'=> '</thead>',
    'heading_row_start'=> '<tr>',
    'heading_row_end'=>' </tr>',
    'heading_cell_start'=> '<th>',
    'heading_cell_end' => '</th>',
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

$table->setHeading('Číslo etapy','Datum','Start etapy','Cíl etapy','Délka etap', 'Typ etapy', 'Převýšení', 'Logo', 'Výsledky');
foreach ($stage as $row) {
    $date = new DateTime($row->date);
    $formattedDate = $date->format('d.m.Y');
    if($row->profile == ''){
        $profil = 'Není přidaný profil';
    }else{
        $profil = '<img src="'.base_url('vendor/profiles/'.$row->profile).'" class="img-fluid logo ">';
    }
    $table->addRow($row->number,$formattedDate,$row->departure,$row->arrival,$row->distance,$row->name,$row->vertical_meters, $profil, anchor('vysledky/'.$row->id,'Výsledky'));
}
echo $table->generate();
?>
<?=$this->endSection("content");?>