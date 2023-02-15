function registrasi($data) {
    global $conn;
    $username = strtolower(stripslashes($data["username"]);
    $passsword = mysqli_real_escape_string($data["password"]);
    $password2  mysqli_real_escape_string($data["password2"]);

    mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fatch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar')
        </script>"
        return false;
    }

    if($passsword !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
            return false;
        
    }
    //enkirpsi pass 
    $passsword = password_hash($password, PASSWORD_DEFAULT);
    
    //tambah userbaru ke database
    mysqli_query($conn, "INSERT IMTO user Values('','$username','$password')");

    return mysqli_affeted_rows($conn);

}
