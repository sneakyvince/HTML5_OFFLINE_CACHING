<?php
//Zorgt ervoor dat PHP herkent dat dit een manifest is.
header('Content-type: text/cache-manifest');

echo "CACHE MANIFEST
# 2017-10-07 v1.0.0
/users/i342465/cache/cities.php";

//Pakt de stad uit de variabele $city.
$sql = "SELECT * FROM sights WHERE sightcity = '" . $city . "'";
$result = mysqli_query($dbconn, $sql);

//Alle afbeeldingen die bij die stad horen doet hij hier cachen.
while($row = mysqli_fetch_assoc($result)){
    echo '/users/i342465/cache/img/' . $row['sightimg'];
}

//Standaard dingen die voor elke pagina gecached moeten worden.
echo '/users/i342465/cache/favicon.ico
/users/i342465/cache/css/main.css
/users/i342465/cache/css/bootstrap-theme.css
/users/i342465/cache/css/bootstrap-theme.min.css
/users/i342465/cache/css/bootstrap.min.css
/users/i342465/cache/css/bootstrap.css
/users/i342465/cache/fonts/glyphicons-halflings-regular.eot
/users/i342465/cache/fonts/glyphicons-halflings-regular.svg
/users/i342465/cache/fonts/glyphicons-halflings-regular.ttf';

/*
CACHE MANIFEST
# 2017-10-07 v1.0.0
/users/i342465/cache/cities.php
/users/i342465/cache/favicon.ico
/users/i342465/cache/css/main.css
/users/i342465/cache/css/bootstrap-theme.css
/users/i342465/cache/css/bootstrap-theme.min.css
/users/i342465/cache/css/bootstrap.min.css
/users/i342465/cache/css/bootstrap.css
/users/i342465/cache/fonts/glyphicons-halflings-regular.eot
/users/i342465/cache/fonts/glyphicons-halflings-regular.svg
/users/i342465/cache/fonts/glyphicons-halflings-regular.ttf
/users/i342465/cache/img/20150906-164825-largejpg.jpg
/users/i342465/cache/img/centro-storico.jpg
/users/i342465/cache/img/colosseum-palatine-hill.jpg
/users/i342465/cache/img/inside-the-basilica.jpg
/users/i342465/cache/img/stedentrip-rome.jpg
/users/i342465/cache/img/walls-inside.jpg
*/
?>

FALLBACK:
/html/
/users/i342465/cache/offline.html
