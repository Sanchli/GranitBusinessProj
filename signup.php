<!DOCTYPE HTML>
<html>
<style>
    <?php include 'styles1.css'; ?>
</style>

<body>

<?php include('./header.php'); ?>

<style>
    main{
        color: white;
    }
</style>
<main>
    <h1 style="text-align: center; padding-bottom: 20px">Signup</h1>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo '<p style="color:#ff0000; text-align: center"> Fill in all fields!</p>';
        }
    }
    ?>
    <div class="SignupPageBox">
    <form class="form-signup" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <br>
        <button type="submit" name="signup-submit" style="margin-right: 20px; margin-top: 20px">Signup</button>
    </form>
    </div>
</main>
<?php include('./footer.php'); ?>

</body>

</html>