<?php
include_once '../user.php';
include_once '../user_session.php';
$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    header("Location:principal.php");
}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        header("Location:principal.php");
        
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o contraseña incorrectos";
        include_once '../FormLogin.php';
    }
}else{
    //echo "login";
    include_once '../FormLogin.php';
}
?>