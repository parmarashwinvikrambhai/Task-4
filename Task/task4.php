<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
}
echo preg_replace('/[^0-9]/','', $name);
?>
