<?php session_start(); ?>

<?php
if (isset($_SESSION['user_id'])) {

    echo "<aside>
            <div class='widget'>
                <form action='includes/logout.inc.php'>
                    <button>LOG OUT</button>
                </form><br>
                <a href='#''>Profile</a>
                <a href='#'>Setting</a>
            </div>";   
} 

else {
    
    echo "<aside>
    <div class='widget'>
        <h2>Login Here</h2>
        <div class='inner'>
            <form action='includes/login.inc.php' method='POST'>
                <input type='text' name='username' placeholder='username'>
                <input type='password' name='password' placeholder='password'><br>
                <button type='submit'>Login</button>
            </form>
        </div>
    </div>";

}
?>
<div class="widget">
            <h2><a href="signup.php">Register</a></h2>
</div>

</aside>