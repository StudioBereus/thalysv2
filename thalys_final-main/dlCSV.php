<?php 
global $connection;
$connection="";
try {
    $connection = new PDO('mysql:host=localhost;dbname=festival', 'root', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_LOWER,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$query = $connection->query("SELECT * FROM participants"); 
 
 if($query->rowCount() > 0){ 
     $delimiter = ","; 
     $filename = "liste_participants" . date('Y-m-d') . ".csv"; 
      
     $f = fopen('php://memory', 'w'); 
      

     $fields = array('ID', 'NOM', 'PRENOM', 'EMAIL', 'NUM_THALYS', 'VILLE', 'NOMBRE DEFINI','DATE CHOISIE','DATE D\'INSCRIPTION'); 
     fputcsv($f, $fields, $delimiter); 
      

     while($row = $query->fetch()){ 

         $lineData = array($row['id_participant'], $row['nom'], $row['prenom'], $row['email'], $row['num_thalys'], $row['ville'],
         $row['nb_participants'], $row['date_choisie'],$row['inscription']); 
         fputcsv($f, $lineData, $delimiter); 
     } 
      

     fseek($f, 0); 
      

     header('Content-Type: text/csv'); 
     header('Content-Disposition: attachment; filename="' . $filename . '";'); 
      

     fpassthru($f); 
 } 
 exit;
