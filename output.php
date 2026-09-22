<?php
    $name = $_POST['user_name'];
    $email = $_POST['email_address'];
    $phone = $_POST['Phone_Number'];
    $password = $_POST['user_password'];
    $confirm_password = $_POST['confirm_user_password'];






    // echo "Name: " . $name . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Phone: " . $phone . "<br>";
    // echo "Password: " . $password . "<br>";
    // echo "Confirm Password: " . $confirm_password . "<br>";

    
?>
<table border="1" cellpadding="10" cellspacing="0">
    <caption>REGISTRATION FORM</caption>

<th>
    <tr>
        <td>Full Name:</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Email Address:</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo $password; ?></td>
    </tr>
    <tr>
        <td>Confirm Password:</td>
        <td><?php echo $confirm_password; ?></td>
    </tr>

</table>


<a href="index.php">Go Back</a>                                 