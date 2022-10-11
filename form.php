<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIODATA DIRI</h1>
    <?php
        if(isset($_POST['submit'])){
            echo "Nama Lengkap             : " .$_POST['nama'], "<br";
            echo "Tempat, Tanggal Lahir    : " .$_POST['tempat']; echo $_POST['ttl'], "<br";
            echo "Nomor Handphone          : " .$_POST['nohp'], "<br";
            echo "Jenis Kelamin            : " .$_POST['jk'], "<br";
            echo "Email                    : " .$_POST['email'], "<br";
        }
        
    ?>
    <!-- // Nama Lengkap             : <?php echo $_POST['nama']; ?><br>
    // Tempat, Tanggal Lahir    : <?php echo $_POST['tempat']; ?><br><?php echo $_POST['ttl']; ?><br>
    // Nomor Handphone          : <?php echo $_POST['nohp']; ?><br>
    // Jenis Kelamin            : <?php echo $_POST['jk']; ?><br>
    // Email                    : <?php echo $_POST['email']; ?><br>

    // <?php
    //     include "file.php"
    // ?> -->
</body>
</html>