<?php
$profileArray = [
    "nama" => "Fauzi", 
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"] . "<br>";

echo "------------------------" . "<br>";

$profileMultiArray = [
    [
        "nama" => "Fauzi",
        "semester" => 2
    ],[
        "nama" => "Santika",
        "semester" => 2
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}