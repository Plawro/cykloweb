<?=$this->extend("layout/master");?>
<?=$this->section("content");?>


<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Lokace', 'Závodníci', 'Závody', 'Stage'],
      datasets: [{
        label: '# of Votes',
        data: [<?=$locations ?>, <?=$riders ?>, <?=$races ?>, <?=$stages ?>],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
</script>

<?php
$path = 'assets/abc.jpg';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<img src="<?php echo $base64?>" width="150" height="150"/>

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

    $table->setHeading('Název závodu');
    foreach($array as $row){
        $table->addRow(anchor("race/".$row->id,$row->default_name));
    } 
    echo $table->generate();
?>


<?=$this->endSection();?>