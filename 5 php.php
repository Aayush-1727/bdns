1. in software folder >php_mongo.dll >copy this file and paste it in xampp--> php--> ext Edit the configuration --> xampp --> php ---> php(Type: Configuration setting) 
2. Open xampp Apache → Start (Make it active) and Admin(Make it active) Browser will open Remove dashboard and instead give the name of the file (eg: insert.php) 
3. save every code of this in same folder
4. Save all files in .php

3. insert.php

<?php

$m = new MongoClient();

echo "Connection to database successfully";

$db = $m -> MYDB239720;

echo "\nDatabase selected successfully";

$col = $db -> MyCol;

echo "\nCollection selected successfully";

$doc = array(

    "name" => "Aayush",
    "age" => 20,
    "dept" => "TYIT",
    "rollno" => 239720

);

$col -> insert($doc);

echo "\nDocument inserted successfully";

?>

on cmd: show dbs

4. update.php 

<?php

$m = new MongoClient();

echo "Connection to database successfully";

$db = $m -> MYDB239720;

echo "\nDatabase selected successfully";

$col = $db -> MyCol;

echo "\nCollection selected successfully";

$col -> update(
    array("name" => "Aayush"),
    array('$set' => array("age" => 19))
);

echo "\nDocument updated successfully";

?>
on cmd: show dbs

5. retrieve.php

<?php

$m = new MongoClient();

echo "Connection to database successfully";

$db = $m -> MYDB239720;

echo "\nDatabase selected successfully";

$col = $db -> MyCol;

echo "\nCollection selected successfully";

$cursor = $col -> find();

foreach($cursor as $doc)
{
    echo "<br/>";
    echo $doc["name"]."<br/>";
    echo $doc["age"]."<br/>";
    echo $doc["dept"]."<br/>";
    echo $doc["rollno"]."<br/>";
}

?>

show dbs

6. delete.php:

<?php

$m = new MongoClient();

echo "Connection to database successfully";

$db = $m -> MYDB239720;

echo "\nDatabase selected successfully";

$col = $db -> MyCol;

echo "\nCollection selected successfully";

$col -> remove(array("name" => "Aayush"));

echo "\nDocument deleted successfully";

?>

show dbs


