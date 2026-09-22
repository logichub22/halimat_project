<html>

<head>
    <title> REGISTRATION FORM </title>
    <link rel="stylesheet" href="regform.css">
</head>

<body>
    <div class="Registration">
        <h2> REGISTER HERE..</h2>
        <div class="container">
            <?php
            $time= date("H:i:s");
            if($time>="00:00:00" && $time<="11:59:59"){
                echo "<h3>Good Morning</h3>";
            }else if($time>="12:00:00" && $time<="13:59:59"){
                echo "<h3>Good Afternoon</h3>";
            }else{
                echo "<h3>Good Evening</h3>";
            }
            echo "<h4>Current Time: ".$time."</h4>";
            ?>
            <br>
            <br>
            <form action="output.php" method="POST">
                <img class="avatar" src="I80W1Q0.png" alt="avatar image">
                <br>
                <br>
                <label style="text-align: left;">Full Name:</label><br>
                <input type="text" name="user_name" placeholder="Name.." required>
                <br>
                <label>Email:</label> <br>
                <input type="text" name="email_address" placeholder="Email Address.." required>
                <br>
                
                
                <label>Phone Number:</label><br>
                <input type="tel" name="Phone_Number" placeholder="Enter Phone Number..">
                <br>
                <label>Password: </label> <br>
                <input type="password" name="user_password" placeholder="Password" required>
                <br>
                <label>Confirm Password: </label> <br>
         <input type="password" name="confirm_user_password" placeholder="Confirm Password" required>
                <br>
               
                <input type="Submit" value="REGISTER">
        </div>
        </form>
    </div>
</body>
</html>