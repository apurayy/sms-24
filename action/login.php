<?php 

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if($email == 'admin@gmail.com' && $pass == '123456'){
            session_start();
            $_SESSION['login']=true;
            header('location:../admin/index.php');
        }else{
            echo "Invalid Password";
        }

    }


?>