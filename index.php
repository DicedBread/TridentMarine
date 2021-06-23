<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TridentMarine</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script/courses_nav.js"></script>
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/courses.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <?php //include('setup.php')?>
    <?php include('includes/header.php') ?>
        
        <div class="main">
            <div class="heroimageslide" onclick="test()">
                <img class="heroimage_display" id="heroImage1" src="./images/hero_image_1.jpg" alt="">
                <img class="heroimage_display_none" id="heroImage2" src="./images/hero_image_2.jpg" alt="">
                <img class="heroimage_display_none" id="heroImage3" src="./images/hero_image_3.jpg" alt="">
                <img class="heroimage_display_none" id="heroImage4" src="./images/hero_image_4.jpg" alt="">

                <!-- <div class="bruh">
                    <div>
                        <img class="heroimage_display" id="heroImage1" src="./images/hero_image_1.jpg" alt="">
                    </div>
                </div> -->
            </div>

            <div class="info_cont">
                <div class="info_text">
                    <h3>Our Purpose</h3>
                    <p>Trident Marine’s purpose is to provide top quality maritime training to both recreational boaties and those wishing to work towards the commercial qualifications. With over 25 years of instructing maritime courses Trident marine is able to provide a wealth of knowledge to which vessel you intend to drive. 
                    </p>
                </div>
                <div class="info_image">
                    <img src="images/Img_1.jpg" alt="boat">
                </div>
            </div>
            
            <div class="bottomhalf">
                <div class="wave_1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path  fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,144C384,107,480,53,576,64C672,75,768,149,864,165.3C960,181,1056,139,1152,128C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                    </svg>
                </div><!--  svg_1 end -->

                <!-- bottomhalf foreground -->
                <div class="content_wrap">
                    <div class="content">
                        <div class="title_search_cont">
                            <div class="title">
                                <h2>Courses</h2>
                            </div>
                            <div class="search">
                                <div class="search_icon">
                                    <!-- <img src="/svg/Ellipse 1.svg" alt="">
                                    <img src="/svg/Line 1.svg" alt=""> -->
                                </div>
                                <form class="search" action="search">
                                    <input type="text" name="Search" id="" placeholder="Search...">
                                </form>
                            </div>
                        </div>

                        <div class="coursesboxes">
                            <div>
                                <h2>Personal Watercraft </h2>
                                <p>Personal Watercraft courses provide a way to learn how to properly operate personal water crafts.</p>
                            </div>
                            <div>
                                <h2>Power Boating</h2>
                                <p>The power boating courses provide  
                                    courses for beginners to powerboating as well as courses that are more advanced.</p>
                            </div>
                            <div>
                                <h2>Motor Boating</h2>
                                <p>Motor Boating courses provides experience to skipper a boat or be a proficient helmsman.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- second background image -->
                <div class="backgroundimg"></div>

                <div class="wave_2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,261.3C384,245,480,171,576,154.7C672,139,768,181,864,197.3C960,213,1056,203,1152,208C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                      </svg>  
                </div>

            </div> <!-- bottomhalf end -->
            <?php include('includes/footer.php')?>
        </div><!--  main end -->
    </div><!-- wrap end -->
    
</body>
</html>