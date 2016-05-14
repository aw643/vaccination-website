<!DOCTYPE html>

<html>
    <head>
        <title>VEIn-Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        
        <!--Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        
        
        <!-- Style Sheets -->
        <link rel="stylesheet" href="../css/style.css">
        
        <!-- Javascript -->	
        <script src="../js/jquery-1.11.3.js"></script>
        <script src="../js/myScript.js"></script>

<!--Body-->
    <body>
        <!--Header-->
        <div class="banner-image">
            <!--NavBar-->
            <?php include "../components/nav.php"; ?>
            
            <div class="index-title">
                <h1>CONTACT US</h1>
                <p>Please feel free to reach out to us with any comments or questions!</p>
            </div>
        </div>
        
        
        <!--Content-->
            <!--Article-->
            <!--Paragraph Content-->      
        <div class="paragraph-content">
            <?php include "../scripts/form.php"; ?>
                <div class="form-container">
                <p class="normal-text"> To join our list serv, please indicate so in your message. We look forward to hearing from you!</p>
                <form id="sticky_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <label>Name:
                        <input
                        type="text"
                        name="name"
                        value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"
                        >
                        <br><br><span class="error"><?php echo $nameErr;?> </span><br>
                    </label>

                    <br><label>Email:
                        <input
                        type="email"
                        name="email"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"
                        >
                        <br><br><span class="error"><?php echo $emailErr;?> </span><br>
                    </label>

                    <br><label>Message: <textarea
                        name="message"
                        placeholder="Please enter your message here."
                    ><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
                        <br><br><span class="error"><?php echo $messageErr;?> </span><br>
                    </label>
                    
                    <br><input type="submit" name="submit" value="Submit">
                </form>
                </div>
                <?php
                echo "<p class='normal-text'>The following was submitted:</p>\n";
                echo "\t\t<p class='normal-text'>Name: $name</p>\n";
                echo "\t\t<p class='normal-text'>Email: $email</p>\n";
                echo "\t\t<p class='normal-text'>Message: $message</p>\n";
                echo "\t\t<p class='normal-text'>$emailSent</p>"; ?>
        </div> 
        
        <!--Footer-->
        <div class="footer">
            <p class="footer-text">Website Created by Derrick Ho, Ally Wu, and Lily Lin</p>
        </div>

        <!-- Javascript -->	
        <script src="../js/myScript.js"></script>
        
    </body>
</html>