<?php

include("data_library.php");
$ins = $base->prepare("DELETE FROM `control_library` WHERE `control_library`.`id` = :id ");

$ins->execute(array("id"=>$_GET["id"]));
header("Location:admin.php");


?>