<?=$this->extend("layout/master");?>
<?=$this->section("content");?>


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

    $table->setHeading('Název závodu','Vlajka');
    foreach($array as $row){
        $flag = '<span class="fi fi-'.$row->country.'"></span>';
        $table->addRow(anchor("race/".$row->id,$row->default_name),$flag);
    } 
    echo $table->generate();
    echo $pager->links();
?>


<?=$this->endSection();?>