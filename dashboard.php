<?php
session_start();


if (!isset($_SESSION['is_logged_in'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Dashboard</h2>
<p>
    <strong>Don't underestimate this dashboard 🤪</strong>
</p>

<!-- <p>Bienvenue </p> -->
 <p>Bienvenue <?php echo $_SESSION['email']; ?></p>

<a href="logout.php">Déconnexion</a>

</body>
</html>
