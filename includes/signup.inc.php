
<?php

    if (isset($_POST['signup-submit'])) {
        require 'connect.php';

        $username = $_POST['uid'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];

        if (empty($username) || empty($password) || empty($passwordRepeat)) {
            header("Location: ../signup.php?error=emptyfields&uid=".$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
            header("Location: ../signup.php?error=invalid&uid=");
            exit();
        }
        else if($password !== $passwordRepeat){
            header("Location: ../signup.php?error=Passwordcheckuid=".$username);
            exit();
        }
        else{
            $sql= "SELECT username FROM mytable WHERE username=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror=");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0) {
                    header("Location: ../signup.php?error=usertaken=");
                    exit();
                }
                else{
                    $sql= "INSERT INTO mytable (username, password) VALUES (?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../signup.php?error=sqlerror=");
                        exit();
                    }
                    else {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


                        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signup=success");
                        exit();
                    }

                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

    else {
        header("Location: ../signup.php");
        exit();

    }
