<?php

include("data_library.php");
$ins = $base->prepare("UPDATE `control_library` SET `nameStudent` = :nameStudent, `schoolName` = :schoolName, `studentLevel` = :studentLevel, `studentAge` = :studentAge, `studentAdress` = :studentAdress, `studentEmail` = :studentEmail WHERE `control_library`.`id` = :id;");
$ins->execute(array(
    "nameStudent"=>$_POST["nameStudent"],
    "schoolName"=>$_POST["schoolName"],
    "studentLevel"=>$_POST["studentLevel"],
    "studentAge"=>$_POST["studentAge"],
    "studentAdress"=>$_POST["studentAdress"],
    "studentEmail"=>$_POST["studentEmail"],
    "id"=>$_GET["id"],
));
header("Location:admin.php");

?>