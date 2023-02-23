<?php
if (isset($_POST['submit'])) {
    $d1=$_POST['sdate'];
    $d2=$_POST['edate'];

$ts1 = strtotime($d1);
$ts2 = strtotime($d2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
echo"Answer is:".$diff;

}
?>