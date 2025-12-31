<?php

session_start();
// echo session_id();



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['email'] ==='admin@test.com' && $_POST['password'] === '1234'){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['email'] = $_POST['email'];
        session_regenerate_id(true);
        header('location: dashboard.php');
        exit;
    }
    $error = 'identifiants incorrectes';
}





?>

<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>
<?php if (isset($error)) echo "<p>$error</p>"; ?>

<form method="post">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button>Se connecter</button>
</form>

</body>
</html>
