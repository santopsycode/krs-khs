<?php 

session_start();
require 'config.php';   //require sama dengan include yang berguna memanggil file 'config.php' 
 
if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama, 
                         level_user, 
                         id_user,
                         username
                  FROM users 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";   //membatasi jumlah qurey yang diambil
 
    $check_log = $dbconnect->prepare($sql_check);         //materi di dalam folder reference/reference_login.txt
    $check_log->bind_param('ss', $username, $password);
 
    $username = $_POST['username'];
    $password = md5( $_POST['password'] );
 
    $check_log->execute();
 
    $check_log->store_result();
 
    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $level_user, $id_user, $username);
 
        while ( $check_log->fetch() ) {             //inisiasi session
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['nama']       = $nama;
            $_SESSION['username']   = $username;
            
        }
 
        $check_log->close();
 
        header('location:on-'.$level_user);   //mengarahkan ke halaman dosen atau mhs sesuai dengan level-user
        exit();
 
    } else {
        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));    //pesan error
        exit();
    }
 
   
} else {                            //kondisi false 
    header('location:login.php');
    exit();
}

?>
