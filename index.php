<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/newindex.css">
    <link rel="shortcut icon" href="#">
    <title>La cartelera</title>
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
<div class="copyright">
            <p>#mustSeeFromNikaMosquito</p>
        </div>
    
        <div>
        <p class="socialMedia"> 
            <a href="https://www.facebook.com/hashtag/mustseefromnikamosquito/" target="_blank" rel="noopener noreferrer"><img src="/images/Facebook.png" style="width: 40px"><alt="FB"></alt></a>
            <a href="https://www.instagram.com/explore/tags/mustseefromnikamosquito/" target="_blank" rel="noopener noreferrer"><img src="/images/Instagram.png" style="width: 40px"><alt="IG"></alt></a>
        </p>  
        </div>          
</footer>

    </body>
</html>

