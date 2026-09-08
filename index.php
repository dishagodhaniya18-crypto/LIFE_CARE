
<?php

// LifeCare NGO 

$ngo_name = "LifeCare";

$tagline = "Together for a Greener Future";

$description = "LifeCare is an environmental NGO working to protect nature, reduce waste, conserve water and promote sustainable living.";

// Impact Data
$trees_planted = "5,240+";
$waste_recycled = "3,850+";
$water_projects = "28+";
$volunteers = "750+";

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $ngo_name; ?> LifeCare | Environment & Sustainability NGO
    </title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


     <!-- NAVIGATION BAR -->

<header class="navbar">

    <div class="logo">

        <a href="index.php">

            <img src="pic/lg6.jpeg" alt="left" >

            <span>
                
                <b>LIFE</b> <strong>CARE</strong>

            </span>

        </a>

    </div>


    <nav class="nav-links" id="navLinks">

    <button class="menu-btn" onclick="toggleMenu()">☰</button>

        <a href="index.php">
            Home
        </a>

        <a href="programs.php">
            Programs
        </a>

        <a href="volunteer.php">
            Volunteer
        </a>

        <a href="donate.php">
            Donate
        </a>

        <a href="about.php">
            About
        </a>

        <butoon href="login.php"
           class="login-btn">

            Login

        </butoon>

        <butoon href="register.php"
           class="register-btn">

            Register

        </butoon>

    </nav>

</header>




    <!-- HERO / HOME SECTION -->

<section class="hero">

    <div class="hero-content">


        <p class="tagline">

            🌍 <?php echo $tagline; ?>

        </p>


        <h1>

            Protect Our Planet.

            <br>

            <span>
                Change Our Future.
            </span>

        </h1>


        <p class="hero-description">

            <?php echo $description; ?>

        </p>


        <div class="hero-buttons">


            <a href="volunteer.php"
               class="btn">

                Become a Volunteer

            </a>


            <a href="programs.php"
               class="outline-btn">

                Explore Programs

            </a>


        </div>

    </div>

</section>



<section class="stats">

  <div><b>5,240+</b><span>🌳 Trees Planted</span></div>
  
  <div><b>3,850 kg</b><span>♻️ Waste Recycled</span></div>
  
  <div><b>28+</b><span>💧 Water Projects</span></div>
  
  <div><b>750+</b><span>🤝 Volunteers</span></div>

</section>


     <!-- IMPACT SECTION -->
 
     <!-- PROGRAMS PREVIEW -->


<section class="programs">


    <div class="section-heading">


        <p class="section-label">

            WHAT WE DO

        </p>


        <h2>

            <b> Small Actions -</b><span> Big Impact.</span>
        
        </h2>


        <h3>

            Our Environmental Programs

        </h3>


        <p>

            Take action today and help
            protect our planet.

            </br>

            Our mission is to create environmentally responsible communities through practical sustainability programs.

        </p>


    </div>


    <div class="program-container">


        <!-- PROGRAM 1 -->

        <div class="program-card">


            <div class="program-icon">

                🌳

            </div>


            <h3>

                Tree Plantation

            </h3>


            <p>

                Planting trees and creating
                greener communities.

            </p>


            <a href="programs.php"
               class="learn-more">

                Learn More →

            </a>


        </div>



        <!-- PROGRAM 2 -->

        <div class="program-card">


            <div class="program-icon">

                ♻️

            </div>


            <h3>

                Waste Management

            </h3>


            <p>

                Promoting recycling and
                reducing plastic waste.

            </p>


            <a href="programs.php"
               class="learn-more">

                Learn More →

            </a>


        </div>



        <!-- PROGRAM 3 -->

        <div class="program-card">


            <div class="program-icon">

                💧

            </div>


            <h3>

                Water Conservation

            </h3>


            <p>

                Protecting water resources
                for future generations.

            </p>


            <a href="programs.php"
               class="learn-more">

                Learn More →

            </a>


        </div>


    </div>

</section>




     <!-- CALL TO ACTION -->

<section class="cta">


    <div>


        <p class="section-label">

            JOIN OUR MISSION

        </p>


        <h2>

            Be a Part of the Change

        </h2>


        <p>

        
            🌱 Your time, skills and support can
            help create a cleaner and greener future.

            <br>

            🌿 Join LifeCare and become part of a community working for a cleaner,greener world,close to nature.🌍

        </p>


    </div>



    <div class="cta-buttons">


        <a href="volunteer.php"
           class="btn white-btn">

            Join as Volunteer

        </a>


        <a href="donate.php"
           class="btn transparent-btn">

            Support Us

        </a>


    </div>


</section>




     <!-- FOOTER -->

<footer>

    <div class="footer-grid">

        <div>
            
            <a class="logo" href="index.html">
                
                <img src="pic/lg6.jpeg" alt="left" >

                <span>
                    
                    <b>LIFE</b> <strong>CARE</strong>
                
                </span>
            
            </a>
            
            <p>
                
                Protect Nature • Reduce Waste • Save Resources

            </p>
        
        </div>
    
        <div>
            
            <h4>Quick Links</h4>
            
            <a href="programs.html">Programs</a>
            
            <a href="volunteer.html">Volunteer</a>
            
            <a href="about.html">About</a>
        
        </div>
    
        <div>
            
            <h4>Account</h4>
            
            <a href="login.html">
                
                Login

            </a>
            
            <a href="register.html">
                
                Register
            
            </a>
        
        </div>
    
        <div class="footer-contact">
            
            <h4>Contact</h4>
            
            <p>📧 Nature@lifecare.org</p>
            
            <p>📞 +91 98765 43210</p>
            
            <p>📍 Gujarat, India</p>
        
        </div>
  
    </div>
  
    <div class="copyright">
        
        © 2026 LifeCare | Environment & Sustainability NGO. All Rights Reserved.
    
    </div>


</footer>


</body>

</html>