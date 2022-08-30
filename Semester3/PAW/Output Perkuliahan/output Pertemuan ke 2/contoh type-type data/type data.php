<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type data</title>
</head>
<body>

<!--string-->
    <h2>output strlen :</h2>
    <?php
        echo strlen("Makan nasi goreng");
    ?>

    <hr>

    <h2>output str_word_count :</h2>
    <?php
        echo str_word_count("Makan nasi goreng");
    ?>

    <hr>

    <h2>output strrev :</h2>
    <?php
        echo strrev("Makan nasi goreng");
    ?>

    <hr>

    <h2>output strpos :</h2>
    <?php
        echo strpos("Makan nasi goreng","s");
    ?>

    <hr>

    <h2>output str_replace :</h2>
    <?php
        echo str_replace("nasi","ayam","Makan nasi goreng");
    ?>

    <hr>


    <!--integer-->
    <?php
        $angka = 17;
        var_dump($angka);
    ?>
    
    <hr>
    <br>
    
    <!--float-->
        <?php
        $angka = 3.14;
        var_dump($angka);
    ?>

    <!--boolean-->
        <?php
        $x = true;
        $y = false;         
    ?>

    <hr>
    <br>
    
    <!--array-->
    <?php
        $negara = array("malaysia","indonesia","laos","thailand");
        var_dump($negara);    
    ?>

    <hr>
    <br>
    
    <!--object-->
    <?php
        class Sapa
        {
            var $str;  
        }

        // membuat object pesan. ini disebut instansiasi
        $pesan = new Sapa();
        
        //memberikan nilai utk properti str pada objek pesan
        $pesan->str="Hello Wordl!"; 

        // mencetak nilainya (pengolahan data)
        echo $pesan->str; 
    ?>

    <hr>
    <br>
    
    <!--null-->
    <?php
        // x pertama kali diberi nilai 2
        $x = 2;
        if($x >0){
            echo "Bisa dibandingkan karena tidak null";
        }

        // x diberi NULL
        $x = null;
        if($x > 0){
            echo "Tidak bisa dibandingkan karena null";
        }
    ?>


</body>
</html>