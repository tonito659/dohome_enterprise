<?php
if (!isset($_SESSION)) {
    session_start();
}
//database configuration
$dbHost = 'localhost';
$dbUsername = 'dohome';
$dbPassword = 'dohome';
$dbName = 'dohome';

//connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//get search term
$name = $_GET['term'];

//get matched data from skills table
$query = $db->query("SELECT Mail FROM user WHERE Mail LIKE '%" . $name . "%' ");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['Mail'];
    //$data[] = $row['Prenom'];
}

//return json data
echo json_encode($data);
?>