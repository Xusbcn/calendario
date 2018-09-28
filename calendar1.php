<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$data_actual   = getdate();
$primer_dia = getdate(mktime(0,0,0,$data_actual['mon'],1,$data_actual['year']));
$ultim_dia  = getdate(mktime(0,0,0,$data_actual['mon']+1,0,$data_actual['year']));


?>

<?php

echo '<table>';
echo '  <tr><th colspan="7">'.$data_actual['month']." - ".$data_actual['year']."</th></tr>";
echo '<tr class="days">';
echo '  <td>Mo</td><td>Tu</td><td>We</td><td>Th</td>';
echo '  <td>Fr</td><td>Sa</td><td>Su</td></tr>';
?> 

<?php
echo '<tr>';
for($i=1;$i<$primer_dia['wday'];$i++){
    echo '<td>&nbsp;</td>';
}
$actday = 0;
for($i=$primer_dia['wday'];$i<=7;$i++){
    $actday++;
    echo "<td>$actday</td>";
}
echo '</tr>';
?> 

<?php
$fullWeeks = floor(($ultim_dia['mday']-$actday)/7);

for ($i=0;$i<$fullWeeks;$i++){
    echo '<tr>';
    for ($j=0;$j<7;$j++){
        $actday++;
        echo "<td>$actday</td>";
    }
    echo '</tr>';
    }
    ?> 

    <?php
    if ($actday < $ultim_dia['mday']){
    echo '<tr>';

    for ($i=0; $i<7;$i++){
        $actday++;
        if ($actday <= $ultim_dia['mday']){
            echo "<td>$actday</td>";
        }
        else {
            echo '<td>&nbsp;</td>';
        }
    }

    echo '</tr>';
}
?> 

</body>
</html>