<nav>
    <div class="logo">
        <a href="index.php">Authentication System</a>
    </div>
    <ul>
        <li><a class="<?= activeLink('index.php',true)?>" href="index.php">Home</a></li>
        <li><a class="<?= activeLink('about.php')?>" href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
    </ul>
    <?php
    if(isset($_SESSION['user'])){
        echo "<ol>Hello ".$_SESSION['user']['email']."</ol>";
        echo "<ol><li><a href='actions/logout.php'>Logout</a></li></ol>";
    }else{
    echo '<ol>
        <li class="login-btn">Login</li>
        <li class="signup-btn">Register</li>
    </ol>';
    }
    ?>
</nav>