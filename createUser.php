<?php 
// ON APPELLE LA CONNEXION A LA BASE DE DONNEES AFIN DE POUVOIR FAIRE DES REQUETES ENSUITES
include('config.php');



// ON RECUPERE LES DONNEES DU FORMULAIRE ET ON LES RANGE PROPREMENT DANS DES VARIABLES
if(isset($_POST['submitbtn'])){
    $name = htmlspecialchars($_POST['name']);
    $email1 = htmlspecialchars($_POST['email']);
    $email2 = htmlspecialchars($_POST['confEmail']);
    $password1 = htmlspecialchars(sha1($_POST['password']));
    $password2 = htmlspecialchars(sha1($_POST['confPassword']));
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['confEmail']) && isset($_POST['password']) && isset($_POST['confPassword'])){
        $name = htmlspecialchars($_POST['name']);
        $email1 = htmlspecialchars($_POST['email']);
        $email2 = htmlspecialchars($_POST['confEmail']);
        $password1 = htmlspecialchars(sha1($_POST['password']));
        $password2 = htmlspecialchars(sha1($_POST['confPassword']));

		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['confEmail'])  && !empty($_POST['password']) && !empty($_POST['confPassword'])){

            $namelenght = strlen($name);
            if ($namelenght <= 255) {
                if($email1 == $email2) {
                    if (filter_var($email1 , FILTER_VALIDATE_EMAIL)) {
                        if($password1 == $password2) {

                            // Nous allons utiliser les données précédentes dans une requete SQL, la requete SQL est l'ordre que donne PHP a la base de donnée
                        // Cette requete ci nous permet de INSERER une/des valeurs sur la BDD
                        $requete = $bdd->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            
                        // Une fois la requete prete, nous pouvons la lancer, si tout va bien, on est redigirés vers PHPCP33BIS(dans MON cas, la page d'acceuil), si il y a une erreur, nous récupérons le message d'erreur
                        
                                $requete->execute(array($name,  $email1 , $password1));
                                $_SESSION['status'] = "Account Create Successfully";
                                $_SESSION['status_code'] = "success";
                                header('Location: /LOGINPROJECT/login.php');
                        } else {
                            $_SESSION['status'] = "Password not Conform"; 
						    $_SESSION['status_code'] = "error";
                            header('Location: /LOGINPROJECT/register.php');

                        }
                        
                    } else {
                            $_SESSION['status'] = "Invalid Email";
						    $_SESSION['status_code'] = "error";
                            header('Location: /LOGINPROJECT/register.php');

                    }
                } else {
                    $_SESSION['status'] =" Email not Conform";
                    $_SESSION['status_code'] = "error";
                    header('Location: /LOGINPROJECT/register.php');

                }
               

            } else {
                $_SESSION['status'] ="Oups your Pseudo lenght is to long";
                $_SESSION['status_code'] = "error";
                header('Location: /LOGINPROJECT/register.php');

            }
        } else {
            $_SESSION['status'] ="Please fill all the cage";
            $_SESSION['status_code'] = "error";
            header('Location: /LOGINPROJECT/register.php');

        }


    } else {
        $_SESSION['status'] ="Please fill all the cage";
        $_SESSION['status_code'] = "error";
        header('Location: /LOGINPROJECT/register.php');


    }
    
} else {
            $_SESSION['status'] ="Unknow error";
            $_SESSION['status_code'] = "error";
            header('Location: /LOGINPROJECT/register.php');

}
 




