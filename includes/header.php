<header>
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
    </div>

    <!-- change to a and use button thing -->

    <!-- mobile -->
    <div class="mobile_nav_drop" onclick="mobileNav()">
        <div class="drop_icon" id="dropIcon"></div>
        <div class="blur" id="blur" onclick="mobileNav()"></div>
        <div class="mobile_nav_cont" id="mobileNav">
            <button onclick="document.location='./index.php'">
                <h2>Home</h2>
            </button>
            <button onclick="document.location='./courses.php'">
                <h2>Courses</h2>
            </button>
            <button onclick="document.location='./aboutus.php'">
                <h2>About us</h2>
            </button>
        </div>
    </div>
</header>