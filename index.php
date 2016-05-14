<!DOCTYPE html>

<html>
    <head>
        <title>GROUP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        
        <!--Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        
        
        <!-- Style Sheets -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- Javascript -->	
        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/myScript.js"></script>

<!--Body-->
    <body>
        <!--Header-->
        <div class="banner-image">
            <!--NavBar-->
            <?php include "scripts/navbar.php"; ?>
            
            <!--Header Title-->
            
            <div class="index-title">
                <h1>CORNELL VACCINATIONS</h1>
                <p>Educating the Ithaca community about the benefits of vaccinations</p>
            </div>
        </div>
        
        <!--Content-->
            <!--Article-->
                <!--Sub Category Selections-->
        <div>
            <ul class="subcategory-list">
                <li>
                    <div class="subcategory-image" id="sub1">
                        <a href="pages/contact.html">
                          <span class="text-content"><span>CONTACT</span></span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="subcategory-image" id="sub2">
                        <a href="pages/about.html">
                          <span class="text-content"><span>ABOUT</span></span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="subcategory-image" id="sub3">
                        <a href="pages/faq.html">
                          <span class="text-content"><span>FAQ</span></span>
                        </a>
                    </div>
                </li>
                </ul>
        </div>
            <!--Paragraph Content-->
        
        <div class="paragraph-content">
            <h1>Overview of the Club</h1>
            <p class="normal-text">
                Vaccinations is a public health group education group that aims to educate the campus and greater Ithaca communities about the benefits of and the science behind vaccinations, in light of recent events such as the allegations that vaccines cause autism. They aim to dispel harmful myths through public outreach events and general educational announcements such as reminders of the free vaccinations on campus.<br><br>
                To read more about the club, visit the about page <a href="pages/about.html">HERE</a>
            </p>
            
        </div>
        
        <!--Footer-->
        <div class="footer">
            <p class="footer-text">Created by Derrick Ho, Ally Wu, and Lily Lin</p>
        </div>
        

        <!-- Javascript -->	
        <script src="js/myScript.js"></script>
        
    </body>
</html>