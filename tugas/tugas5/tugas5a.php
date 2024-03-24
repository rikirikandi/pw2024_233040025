<?php

$mahasiswa = [
    ["nama" => "Riki Rikandi", 
    "nrp" => "233040025",
    "Email" => "rikirikandi1234@gmail.com",
    "Jurusan" => "Teknik Informatika"
],
["nama" => "M.Riyyadu Solihin", 
"nrp" => "233040027",
"Email" => "bangyadd123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Biagi Archie Fais", 
"nrp" => "233040006",
"Email" => "racing123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Asep saepul milah", 
"nrp" => "233040004",
"Email" => "asepkasep123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Bangkrick", 
"nrp" => "233042330",
"Email" => "bangkrick123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Marchiko", 
"nrp" => "146040027",
"Email" => "marchiko123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Humaira", 
"nrp" => "233041123",
"Email" => "humaira123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Lord Branz", 
"nrp" => "233040221",
"Email" => "branztt123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
["nama" => "Lemonaru", 
"nrp" => "233042342",
"Email" => "lemonaru123@gmail.com",
"Jurusan" => "Teknik Informatika"
],
    ["nama" => "Luminare", 
    "nrp" => "233040001",
    "Email" => "luminare123@gmail.com",
    "Jurusan" => "Teknik Informatika",
  
]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</head>
<body>
    
</body>
</html>