<?php
session_start();
require "dbconnect.php";
$db = get_db();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case "register":
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $db->prepare('INSERT INTO users (username, password) VALUES(:username, :password)');
        $stmt -> bindValue(':username', $username);
        $stmt -> bindValue(':password', $passwordhash);
        
        $stmt->execute();
}

