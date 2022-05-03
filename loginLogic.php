<?php  // for simple login

    $login = false;
    $showError = false;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'partials/_dbconnection.php';

        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == "" || $password == "")
        {
            header("location: login.php");
        }

        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if(password_verify($password, $row['password']))
                {
                    $login = true;

                    session_start();
                    $_SESSION['ID'] = $row['ID'];
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['first_name'] = $row['name'];

                    header("location: index.php");
                } else {
                    $showError = "Invalid credentials...";
                }
            }
        } else {
            $showError = "Invalid credentials...";
        }
    }
?>