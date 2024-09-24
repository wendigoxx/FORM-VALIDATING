<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- author: I.R LANDONG-->
    <form action="" method="post">
        <input type="text" name="username" placeholder="ex. myName123"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">

        <?php
        session_start();
        include "conn.php";
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM accounts";

            $result = mysqli_query($conn,$sql);

            if($result -> num_rows > 0){
                while($rows = $result -> fetch_assoc()){
                   $_SESSION['username'] = $rows['username'];
                    header("location:home.php");

                    
                }
            }else{
                echo "no account! please register!";
            }
        }

?>

<a href="register.php">no account? Register Here!</a>
    </form>
</body>
</html>

