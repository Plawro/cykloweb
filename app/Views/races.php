
<?php
echo "<h1>Závody</h1>";

foreach($race as $row){
    $flag = '<span"'.$row->country.'"></span>';
}

echo $pager->links();
