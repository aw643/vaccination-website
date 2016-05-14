

<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    
    if ($currentPage == "index.php") {
    echo "<div class='logo'>
                <a class='menu-icon' href='index.html'><img src='img/vein.png' alt='LOGO'></a>
                </div>
                <div class='header'>
                    <div class='nav-items'>
                        <ul class='menu'>
                            <li><a class='menu-link' href='pages/contact.php'>CONTACT</a></li>
                            <li><a class='menu-link' href='pages/photos.php'>PHOTOS</a></li>       
                            <li><a class='menu-link' href='pages/calendar.php'>CALENDAR</a></li>  
                            <li><a class='menu-link' href='pages/faq.php'>FAQ</a></li>  
                            <li><a class='menu-link' href='pages/files.php'>FILES</a></li>  
                            <li><a class='menu-link' href='pages/members.php'>MEMBERS</a></li>
                            <li><a class='menu-link' href='pages/about.php'>ABOUT</a></li>
                        </ul>
                    </div>
                </div>";
    }
    
    else {echo "<div class='logo'>
                <a class='menu-icon' href='../index.html'><img src='../img/vein.png' alt='LOGO'></a>
                </div>
                <div class='header'>
                    <div class='nav-items'>
                        <ul class='menu'>
                            <li><a class='menu-link' href='contact.php'>CONTACT</a></li>
                            <li><a class='menu-link' href='photos.php'>PHOTOS</a></li>       
                            <li><a class='menu-link' href='calendar.php'>CALENDAR</a></li>  
                            <li><a class='menu-link' href='faq.php'>FAQ</a></li>  
                            <li><a class='menu-link' href='files.php'>FILES</a></li>  
                            <li><a class='menu-link' href='members.php'>MEMBERS</a></li>
                            <li><a class='menu-link' href='about.php'>ABOUT</a></li>
                        </ul>
                    </div>
                </div>";
    }
?>