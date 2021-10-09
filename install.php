<?php
//Anslut till databas
include("configuration/config.php");

$db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);

if($db->connect_errno > 0){
    die('fel vid anslutning [' . $db->connect_error . ']');
}

//SQL fråga skapa tabell kurser
$sql = "DROP TABLE IF EXISTS courses;
    CREATE TABLE courses(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    coursecode VARCHAR(255) NOT NULL,
    cname VARCHAR(255) NOT NULL,
    progression VARCHAR(255) NOT NULL,
    courseplan VARCHAR(255) NOT NULL
    );";

$sql .= "
    INSERT INTO courses(coursecode, cname, progression, courseplan) VALUES('DT057G', 'Webbutveckling I', 'A', 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=22782');
    INSERT INTO courses(coursecode, cname, progression, courseplan) VALUES('DT084G', 'Introduktion till programmering i JavaScript', 'A', 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=30554');
";

echo "<pre>$sql</pre>";

if($db->multi_query($sql)) {
    echo "Tabeller installerade.";
}else {
    echo "Fel vid installation av tabeller.";
}