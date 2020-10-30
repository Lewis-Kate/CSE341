<?php
session_start();
require "dbconnect.php";
$db = get_db();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}
$daysId = filter_input(INPUT_POST, 'daysId');
$monday = filter_input(INPUT_POST, 'monday');
$tuesday = filter_input(INPUT_POST, 'tuesday');
$wednesday = filter_input(INPUT_POST, 'wednesday');
$thursday = filter_input(INPUT_POST, 'thursday');
$friday = filter_input(INPUT_POST, 'friday');
$saturday = filter_input(INPUT_POST, 'saturday');
$sunday = filter_input(INPUT_POST, 'sunday');

  
      
    $stmt = $db->prepare('UPDATE days SET monday = :monday, tuesday = :tuesday, wednesday = :wednesday, thursday = :thursday, friday = :friday, saturday = :saturday, sunday = :sunday WHERE daysId = :daysId');
    $stmt -> bindValue(':daysId' , $daysId);        
    $stmt -> bindValue(':monday', $monday);
 $stmt -> bindValue(':tuesday', $tuesday);
 $stmt -> bindValue(':wednesday', $wednesday);
 $stmt -> bindValue(':thursday', $thursday);
 $stmt -> bindValue(':friday', $friday);
 $stmt -> bindValue(':saturday', $saturday);
 $stmt -> bindValue(':sunday', $sunday);
    
    
    $stmt->execute();
    $stmt->closeCursor();
    header('Location: view.php');    

    ?>



