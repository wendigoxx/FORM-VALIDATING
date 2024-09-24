<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="item1">
        <h1>register</h1>
    <form action="" method="post">
        <input type="text" name="username">
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    include "conn.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!preg_match('/^[A-Za-z0-9]{8,}$/', $password)){
            echo "Password must be at least 8 characters long and contain only letters and numbers.";
        }else{
            $sql = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn,$sql);

            if($result){
                echo "Account created successfully.";
            }else{
                echo "Error creating account.";
            }



        }
    }
    ?>

    <a href="log-in.php">Log In</a>
        </div>

    </div>
    
</body>
</html>