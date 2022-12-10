<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartelera BBDD Mysql con php</title>
</head>
<body>
    <<h1>#MustSeeFromNikaMosquito</h1>
    
    <section class="row";

<?php

include "./database/openDatabase.php";

$sql = "SELECT * FROM movies ORDER BY movies.director DESC";
$query = $connection->prepare($sql);
$query->execute();
$moviesList = $query->fetchAll(PDO::FETCH_OBJ);

foreach($moviesList as $movieUnique){
    
    echo <<<TAG
    <article class="col-sm d-flex justify-content-around">
    <div class="card text-center" style="width: 15rem">
        <img class="card-img-top" src="{$movieUnique ->img}">
        
        <div class="card-body">
        <h5 class="card-title">{$movieUnique -> id}. {$movieUnique -> title}</h5>
        <h6 class="card-text">{$movieUnique -> director}</h6>
        <p class="card-text">{$movieUnique -> resume}</p>
        </div>
    </div>
    </article>
    
    TAG;

}

include "./database/closeDatabase.php";

?>

<footer>
    <<div>@copyright</div>    
</footer>
    </body>
</html>

