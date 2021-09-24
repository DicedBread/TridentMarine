<?php include('./setup.php');

?>
<header class="speed">
    <div class="brand">
        <div class="logoimg"></div>
        <h1>Trident Marine</h1>
    </div>
        <!-- nav -->
    <div class="nav">
        <a class="nav_btn" href="./index.php">
            <h2>Home</h2>
        </a>
        <a class="nav_btn" href="./courses.php">
            <h2>Courses</h2>
        </a>
        <a class="nav_btn" href="./aboutus.php">
            <h2>About us</h2>
        </a>
        <a class="user_icon icon" href="./user.php"></a>
        <a class="logout_icon icon" href="./login/logout.php"></a>
    </div>

    <!-- mobile -->
    <div class="mobile_nav_toggle_btn" onclick="mobileNav()">
        <div class="drop_icon" id="dropIcon"></div>
        <div class="mobile_nav hide" id="mobileNav">
            <a class="m_nav_btn" href="./index.php">
                <h2>Home</h2>
            </a>
            <a class="m_nav_btn" href="./courses.php">
                <h2>Courses</h2>
            </a>
            <a class="m_nav_btn" href="./aboutus.php">
                <h2>About us</h2>
            </a>
        </div>
        <div class="blur hide" id="blur"></div>
    </div>
</header>