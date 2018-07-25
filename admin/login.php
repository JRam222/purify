<?php

session_start();

if (isset($_POST['submit'])){
    include 'conn.php';
    
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pwd = mysqli_real_escape_string($mysqli, $_POST['pwd']);
    //$pwd = password_hash($pwd,PASSWORD_DEFAULT);
    //error handlers
    if(empty($username) || empty($pwd)){
        header("Location: index.php?login=empty");
        exit();
    }else{
        $sql ="SELECT * FROM users WHERE username='$username' ";
        $result = mysqli_query($mysqli, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: index.php?login=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //de-hashing the pwd
                $hashedPwdCheck = password_verify($pwd,$row["pwd"]);
                //echo $pwd;
                if($hashedPwdCheck == false){
                    header("Location: index.php?login=erro");
                    exit();
                }elseif($hashedPwdCheck == true){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['first'] = $row['first'];
                    $_SESSION['last'] = $row['last'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    header("Location: index.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: index.php?login=error");
    exit();
}
?>