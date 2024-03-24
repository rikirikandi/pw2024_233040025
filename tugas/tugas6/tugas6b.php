<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6B</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            border: 1px solid black;
            color: white;
            display: flex;
            margin: 2px;
        }

        .kotak h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }

        .row1 {
            .kotak {
                background-color: skyblue;
            }
        }

        .row2 {
            .kotak {
                background-color: darkgray;
                color: black;
            }
        }
    </style>
</head>
<body>
<form action="" method="post">
            <label for="angka">Masukan angka : </label>
            <input type="text" name="jumlah-angka" id="angka">
            <input type="submit">
    </form>
    <?php if(!isset($_POST["jumlah-angka"])) : ?>
    <?php else : ?>
        <?php for ($i = $_POST["jumlah-angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><h2><?= "$i" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>