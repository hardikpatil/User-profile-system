<?php include('header.php') ?>

<?php 
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty') !== false) {
        echo "Fill out all the fields!";
        # code...
    } else if (strpos($url, 'error_username') !== false) {
        # code...
        echo "Sorry, Username already exists. Create unique ID!";
    }

    if (isset($_SESSION['user_id'])) {
        echo 'Hi'.$first_name.'there! Welcome aboard' ;
    } else {
        echo "<h2>Sign up to get exlusive view of site<h2>";
    }

?>

<?php 
    
    if (isset($_SESSION['user_id'])) {
        # code...
        echo "<h2>Hey you are already logged in. Log out to Create new account</h2>";
    } else{

        echo 
        "<div class='form-bo'>
                <h1>Register here*</h1><br>
                <form action='includes/signup.inc.php' method='POST'>
                    <input type='text' name='fname' placeholder='First Name'><br>
                    <input type='text' name='lname' placeholder='Last  Name'><br>
                    <input type='text' name='uid' placeholder='User Name'><br>
                    <input type='password' name='pass' placeholder='Create Password'><br>
                    <input type='email' name='email_id' placeholder='Email Id'><br>
                    <button type='submit'>Register</button>
                </form>
        </div>";

    }
?>

<?php include('footer.php'); ?>