<?php
//connection bdd
include("data_library.php");
$ins = $base->prepare("INSERT INTO `control_library` (`id`, `nameStudent`, `schoolName`, `studentLevel`, `studentAge`, `studentAdress`, `studentEmail`) VALUES (NULL, :nameStudent, :schoolName, :studentLevel, :studentAge, :studentAdress, :studentEmail);");
$ins->execute(array(
    "nameStudent"=>$_POST["nameStudent"],
    "schoolName"=>$_POST["schoolName"],
    "studentLevel"=>$_POST["studentLevel"],
    "studentAge"=>$_POST["studentAge"],
    "studentAdress"=>$_POST["studentAdress"],
    "studentEmail"=>$_POST["studentEmail"],
));
header("Location: formular_student.php");

?>