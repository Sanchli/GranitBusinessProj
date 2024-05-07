<!DOCTYPE HTML>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Edgar Sanchez">
    <title>Granite Zinac</title>
    <style>
        <?php include 'styles1.css'; ?>
    </style>
</head>

<body>
a
<?php include('./header.php'); ?>

<h4>Welcome</h4>
<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>

<?php

$sql = "SELECT * FROM mytable";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "No data found in the database.";
}

?>


<?php include('./footer.php'); ?>

</body>

</html>
