<?php 
include('../config.php');
// ON RECUPERE LES DONNEES DU FORMULAIRE ET ON LES RANGE PROPREMENT DANS DES VARIABLES
if(isset($_POST['submit'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $emailconnect = htmlspecialchars($_POST['email']);
        $passwordconnect = htmlspecialchars(sha1($_POST['password']));
		if (!empty($emailconnect) && !empty($passwordconnect)){
                        $requser = $bdd->prepare("SELECT * FROM  users WHERE  email = ? AND password = ? "); 
                        $requser->execute(array($emailconnect,$passwordconnect));
                        $userexist = $requser->rowCount();
                        if($userexist == 1){
                             $userinfo = $requser->fetch();
                             $_SESSION['id'] = $userinfo['id'];
                             $_SESSION['name'] = $userinfo['name'];
                             $_SESSION['email'] = $userinfo['email'];
                             $_SESSION['status'] = "Connect Successfully";
                             $_SESSION['status_code'] = "success";
                             header("Location: /LOGINPROJECT/formulaires/login.php?id=".$_SESSION['id']);
                        }else{
                             $_SESSION['status'] = "Invalid Email/Password";
                             $_SESSION['status_code'] = "error";
                             header('Location: /LOGINPROJECT/formulaires/login.php');
                        }
        }else{
            $_SESSION['status'] = "Please Fill All the boxes";
            $_SESSION['status_code'] = "error";
            header('Location: /LOGINPROJECT/formulaires/login.php');
        }

    } else {
        $_SESSION['status'] ="Unknow error";
        $_SESSION['status_code'] = "error";
        header('Location: /LOGINPROJECT/formulaires/login.php');
    }
}   
