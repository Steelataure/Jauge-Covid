<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
 
require_once "config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if(($_SERVER["REQUEST_METHOD"] ?? 'GET') == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Entrez un nom d'utilisateur";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Entrez un mot de passe";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            $param_username = trim($_POST["username"]);
            
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];

                        if($password == $hashed_password){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: admin.php");

                        } else{
                            $login_err = "Nom d'utilisateur ou mot de passe invalide";
                        }
                    }
                } else{
                    $login_err = "Nom d'utilisateur ou mot de passe invalide";
                }
            } else{
                echo "Problèmes techniques...";
            }

            unset($stmt);
        }
    }
    
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 480px; padding: 25px; }
    </style>
</head>
<?php include("php/header.php") ?>
<body>


<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
    <div class="wrapper">
        <h2>Login administrateur</h2>
        <p>Veuillez renseigner vos identifiants pour vous connecter</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p><br> Vous n'êtes pas administrateur ?<a href="index.php"> Revenir à l'accueil</a></p>
        </form>
    </div>
</div>
</div>






</body>
</html>
