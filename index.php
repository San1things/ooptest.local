<?php

declare(strict_types=1);
include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>John Lloyd's Portfolio</title>
    <link rel="icon" href="images/icons/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poetsen+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/resetstylesheet.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <!-- BURGER MENU FOR MOBILE -->

    <nav class="burger-menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">PRODUCTS</a></li>
            <li><a href="firstpage/aboutme.php">ABOUT ME</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>

    <!-- ------ -->

    <!-- HEADER -->
    <header class="header-main">
        <div class="header-main-logo">
            <img src="images/testing.png" alt="mukakologo">
            <nav class="header-main-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#" class="smooth-scroll-about">ABOUT ME</a></li>
                    <li><a href="#" class="smooth-scroll-contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-main-sm">
            <a href="https://www.facebook.com/jhonlloyd.sanjuan">
                <div class="header-main-sm-fb"></div>
            </a>
            <a href="https://www.instagram.com/iaintsan1/">
                <div class="header-main-sm-ig"></div>
            </a>
            <div class="burger-menu-btn"></div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="main-intro">
            <h1 class="greetings"></h1>
            <h1>Welcome<br>to my first<br>website</h1>
            <p>This is my portfolio as an apiring Fullstack Web Developer.</p>
            <a href="#">View Portfolio</a>
        </div>
        <div class="main-quotes">
            <p>"Every great developer you know got there by solving<br>
                problems they were unqualified to solve until they<br>
                actually did it."</p><br><br>
            <p>"Writing code is like writing poetry. In web development,<br>
                every line must have a purpose, be beautiful, yet efficiently<br>
                serve its function."</p><br><br>
            <p>The web does not just connect machines, it connects people.<br>
                The craft of web development is not just about making a site<br>
                look good; it is about making connections.</p>
        </div>
    </main>

    <!-- CATEGORY -->
    <section class="index-category">
        <p>CATEGORIES</p>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Web Development</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Front End</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Lifestyle</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Projects</h3>
        </a>
    </section>

    <!-- ABOUT ME -->
    <section class="index-about">
        <div class="wrapper-main index-about-flex">
            <div class="index-about-img">
                <img src="images/mukako.png" alt="me">
            </div>
            <div class="index-about-text">
                <h2>
                    A BIT ABOUT ME.
                </h2>
                <p>
                    a passionate Full-Stack Web Developer with a strong foundation in both front-end and back-end technologies. I thrive on creating dynamic, responsive, and user-friendly web applications that solve real-world problems and enhance user experiences.
                </p>
                <a href="firstpage/aboutme.php">GET TO KNOW ME</a>
            </div>
            <div class="index-about-skill">
                <p>HTML & CSS</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill htmlcss"></div>
                </div>
                <p>PHP</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill php"></div>
                </div>
                <p>OOP</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill oop"></div>
                </div>
                <p>Javascript</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill js"></div>
                </div>
                <p>Web Development</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill wd"></div>
                </div>
            </div>
        </div> 
    </section>

    <!-- FOOTER -->
    <footer class="footer-main">
        <div class="wrapper-main footer-main-flex">
            <div class="footer-testemoni">
                <img src="images/footer/jl.jpeg" alt="">
                <p>"Tigas mo talaga ya bertong bayawak."</p>
            </div>
            <div class="footer-testemoni">
                <img src="images/footer/steve.jpg" alt="">
                <p>"Eh nag kuya dok."</p>
            </div>
            <div class="footer-testemoni">
                <img src="images/footer/jaja.jpg" alt="">
                <p>"May utang pa ko jollibee dyan hehe."</p>
            </div>
            <div class="footer-testemoni">
                <img src="images/footer/iska.jpg" alt="">
                <p>"Same jaja ating ilibre na."</p>
            </div>
            <div class="footer-testemoni">
                <img src="images/footer/peper.jpg" alt="">
                <p>"Pre lalaro ka ba."</p>
            </div>

            <a class="footer-gitwm" href="#">GET IN TOUCH WITH ME</a>

            <div class="footer-sitemap">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
                <ul>
                    <li><a href="#">WEB DEVELOPMENT</a></li>
                    <li><a href="#">FRONT END</a></li>
                    <li><a href="#">LIFESTYLE</a></li>
                    <li><a href="#">PROJECTS</a></li>
                </ul>
                <ul>
                    <li>
                        <p>If you want a custom product made website,
                            then dont hesitate to send an email or call me
                            so we can arange a small meeting. Have a blessed day.
                        </p>
                    </li>

                </ul>
                <ul class="contact-info-highlight">
                    <li>
                        <p>Contact Info:</p>
                    </li>
                    <li>
                        <p>(+63)929 175 3137</p>
                    </li>
                    <li>
                        <p>businesslikesan1@gmail.com</p>
                    </li>
                    <li>
                        <p>Barangay San Juan, Morong, Rizal</p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>



    <!-- cheatsheet reference
    <header class="header_main">
        <div class="div_1"></div>
        <div class="div_2"></div>
        <div class="div_3"></div>

    </header> -->


    <?php
    // $tao = new Person();
    // echo $tao->getName();

    // $object = new NewClass();
    // echo $object->getProperty();



    // $person1 = new Person();
    // $person1->setName("JAY ELS");
    // $person1->setGender("Male");

    // $person2 = new Person();
    // $person2->setName("MWAHAHHA");
    // echo $person2->name;
    // echo $person1->gender;

    // $person1 = new Person();

    // try{
    //     $person1->setName("titing baluktut uwu");
    //     echo $person1->getName();
    // } catch(TypeError $e){
    //     echo "Error!: " . $e->getMessage();
    // }



    // $usersObj = new UsersView();
    // $usersObj->showUser("John Lloyd");

    // $usersObj1 = new UsersContr();
    // $usersObj1->createUser("Poge", "Ako", "2000-05-05");
    ?>
    <!-- calculator reference
        <form action="includes/calc.inc.php" method="POST">
        <h1>Calculator</h1>
        <input type="number" name="num1" placeholder="Type the first number.">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Type the second number.">
        <button type="submit" name="submit">Calculate</button>
    </form> -->

    <!-- adding to database reference
        <form action="includes/users.inc.php" method="POST">
        <h1>Add to Database</h1>
        <input type="text" name="fname" placeholder="Type your First Name.">
        <input type="text" name="lname" placeholder="Type your Last Name.">
        <input type="date" name="bday" placeholder="Type your Last Name.">
        <button type="submit" name="submit">Add</button>
    </form> -->

    <script src="js/main.js">
        // let getPh = document.querySelector(".greetings");

        // let date = new Date();
        // let currentHour = date.getHours();

        // if (currentHour >=4 && currentHour < 10){
        //     getPh.innerHTML = "Good Morning!";
        // } else if (currentHour >=10 && currentHour < 12){
        //     getPh.innerHTML = "Good Day!";
        // } else if (currentHour >=12 && currentHour < 18){
        //     getPh.innerHTML = "Good Afternoon!";
        // } else if (currentHour >=18 && currentHour < 22){
        //     getPh.innerHTML = "Good Evening!";
        // } else if (currentHour >=22 && currentHour < 4){
        //     getPh.innerHTML = "Good Night!";
        // } else {
        //     getPh.innerHTML = "Good Night!";
        // }


    </script>
</body>

</html>