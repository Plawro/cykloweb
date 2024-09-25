<?=$this->extend("layout/template");?>

<?=$this->section("content");?>
<h1 class="text-center mt-5"><?= $race->default_name?></h1>
<?php
$table = new \CodeIgniter\View\Table();
$template = array(
    'table_open'=> '<table class="table table-bordered mt-5">',
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

$table->setHeading('Název','Ročník','Datum','Logo','Kategorie','Počet etap', 'Délka etap');
foreach ($raceyear as $row) {
    if($row->start_date != $row->end_date){
        $multiDay = date('d.m.Y', strtotime($row->start_date)) . ' až ' . date('d.m.Y', strtotime($row->end_date));
    }else{
        $multiDay = $row->start_date;
    }
    if($row->logo == ''){
        $logo = 'Není přidané logo';
    }else{
        $logo = '<img src="'.base_url('vendor/images/'.$row->logo).'" class="img-fluid logo h-50">';
    }
    $table->addRow($row->real_name,$row->year,$multiDay,$logo,$row->category,anchor('etapa/'.$row->id_race_year,$row->pocet), $row->delka);
}
echo $table->generate();
?>
<?=$this->endSection("content");?>