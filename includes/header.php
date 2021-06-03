<header>
    <div class="brand">
        <div class="logoimg"></div>
        <h1>Trident Marine</h1>
    </div>
        <!-- nav -->
    <div class="nav">
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

    <!-- mobile -->
    <div class="mobile_nav_drop" onclick="mobileNav(open)">
        <div class="drop_icon"></div>
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
        <div class="blur"></div>
    </div>
</header>