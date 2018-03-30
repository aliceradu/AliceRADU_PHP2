<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $make = $_POST['make'] ?? null;
   $model = $_POST['model'] ?? null;
   $year = $_POST['year'] ?? null;
   $colour = $_POST['colour'] ?? null; 
 
/*connection to database*/   
   try{
       $connect = new PDO('mysql:host=localhost;dbname=vehicles', 'root');
   }catch(PDOException $e){
       echo 'try again';
       die();
   }
};

/*data insertion into database*/
$sql = 'INSERT INTO vehicles(make, model, year, colour) VALUES (:make, :model, :year, :colour)';
$statement = $connect->prepare($sql);
$statement->bindValue('make', $make);
$statement->bindValue('model', $model);
$statement->bindValue('year', $year);
$statement->bindValue('colour', $colour);

if (!$statement->execute()) {
    echo 'try again';
    die();
}
    session_start();




