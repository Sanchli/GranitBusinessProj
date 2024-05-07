<!DOCTYPE HTML>
<html>
<style>
    <?php include 'styles1.css'; ?>
</style>
<body>

<?php include('./header.php')
?>
<div class="loginSheet">
<form action="includes/login.inc.php" method="post">
   <h3>Name</h3><input type="text" name="name" style="background-color: #0dcaf0"><br>
    <h3>Password</h3> <input type="password" name="pwd" style="background-color: #0dcaf0"><br>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo '<p style="color:#ff0000; text-align: center"> Fill in all fields!</p>';
        }
    }
    ?>
    <br>
        <button type="submit" name="login-submit">Submit</button>
    </form>
   </div>

<div class="SignUpSheet">
    <form action="signup.php">
        <button type="submit" name="signup-login" style="padding-bottom:10px; ">Sign Up</button>
    </form>
</div>

<br>

<?php include('./footer.php')
?>

</body>
</html>