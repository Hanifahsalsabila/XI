<?php
require 'namafolder/namafunctions.php'
if(isset($_POST["register"]) ) {

    if(registrasi($_POST) > 0 ) {
      echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";  
    } eslse {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>halaman registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    
<h1>Halaman Registrasi</h1>
<form action="" method="post">

    <ul>
        <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">password</label>
            <input type="password" name="password" id="password">  
        </li>
        <li>
        <label for="password2">konfirmasi password</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">register</button>
        </li>
    </ul>
</form>
</body>
</html>