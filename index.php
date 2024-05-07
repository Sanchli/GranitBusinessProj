<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Edgar Sanchez">
    <title>Granite Zinac</title>
</head>

<style>
<?php include 'styles1.css'; ?>
</style>

<body>
<?php include('./header.php'); ?>

<h1 style="text-align: center">Welcome to Granite Zinac</h1>
<?php
if(isset($_SESSION['userId'])){
    echo '<p class="login-status"> You are logged in!</p>';
}
else {
    echo '<p class="login-status"> You are logged out!</p>';
}
?>

<div class="kitchenImg">
    <img type="img" src="granitezinac.jpeg" alt="kitchenPhoto">
    <img type="img" src="photo2.jpeg" alt="kitchenPhoto1">
    <img type="img" src="photo3.png" alt="kitchenPhoto2">
    <img type="img" src="photo4.jpeg" alt="kitchenPhoto3">
<?php include('./footer.php'); ?>

</body>

</html>