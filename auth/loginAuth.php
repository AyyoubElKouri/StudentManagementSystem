<?php
    require_once '../database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if ( isset($_POST['username'])  && isset($_POST['password']) &&
             !empty($_POST['username']) && !empty($_POST['password']) )
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // database management
            $sql = "select * from users where username = :username";
            $result = $pdo->prepare($sql);
            $result->execute(['username' => $username]);

            $user = $result->fetch(PDO::FETCH_ASSOC);

            if ($user ){
                if ($user['usertype'] == 1){
                    header("Location: ../profiles/admin.php");
                } else {    
                    header("Location: ../profiles/student.php");
                }
                exit;
            } else {
                echo "Your are not authorized";
            }

        } else {
            echo "Username or password is not set";
        }
    }


?>
