<?php

function user_sort($a, $b) {

// smarts is all-important, so sort it first

if($b == 'smarts') {

return 1;

}

else if($a == 'smarts') {

return -1;

}

return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);

}

$values = array('name' => 'Buzz Lightyear',

'email_address' => 'buzz@starcommand.gal',

'age' => 32,

'smarts' => 'some');
$origin=$values;
$submitted=NULL;
$sort_type=NULL;
if(isset($_GET["submitted"])&&isset($_GET['sort_type'])){
$submitted=$_GET['submitted'];
$sort_type=$_GET['sort_type'];

    if($sort_type) {

if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {

$sort_type($values, 'user_sort');

}

else {

$sort_type($values);

}

}
}

?>

<form action="UserSorting.php" method="get">

<p>

<input type="radio" name="sort_type" value="sort"  />

Standard sort<br />

<input type="radio" name="sort_type" value="rsort" <?php echo $sort_type=='rsort'  ? ' checked="checked"' : '';?> />
Reverse sort<br />

<input type="radio" name="sort_type" value="usort" <?php echo $sort_type=='usort'  ? ' checked="checked"' : '';?> /> User-defined sort<br />

<input type="radio" name="sort_type" value="ksort" <?php echo $sort_type=='ksort'  ? ' checked="checked"' : '';?> /> Key sort<br />

<input type="radio" name="sort_type" value="krsort" <?php echo $sort_type=='krsort'  ? ' checked="checked"' : '';?> /> Reverse key sort<br />

<input type="radio" name="sort_type" value="uksort" <?php echo $sort_type=='uksort'  ? ' checked="checked"' : '';?> /> User-defined key sort<br />

<input type="radio" name="sort_type" value="asort" <?php echo $sort_type=='asort'  ? ' checked="checked"' : '';?> /> Value sort<br />

<input type="radio" name="sort_type" value="arsort"<?php echo $sort_type=='arsort'  ? ' checked="checked"' : '';?> /> Reverse value sort<br />

<input type="radio" name="sort_type" value="uasort" <?php echo $sort_type=='uasort'  ? ' checked="checked"' : '';?> /> User-defined value sort<br />

</p>

<p align="center">

<input type="submit" value="Sort" name="submitted" />

</p>

<p>

Values unsorted

</p>
<ul>

<?php

foreach($origin as $key=>$value) {

echo "<li><b>$key</b>: $value</li>";

}

?>

</ul>

    <?php
  
if($submitted){
echo "Values sorted by $sort_type";

?>
    <ul>

<?php

foreach($values as $key=>$value) {

echo "<li><b>$key</b>: $value</li>";

}
}
?>

</ul>
</ul>

</form>