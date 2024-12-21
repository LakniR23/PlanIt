<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanIt</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous">
    
</head>
<body>
    <div class="header">
        <div class="left-wrapper">
            <a href="index.php">
                <img src="images/logo 2.png" alt="PlanIt logo" width="160px" height="100px">
            </a>
        </div>
        <div class="right-wrapper">
            Well begun is half done.
        </div>
    </div>
        
    <br>
    <a href="index.php"><img src="images/back.png" alt="Back" width="20px" height="20px" style="margin-left:20px;"></a>
    <br><br>
    
    <div class="body">
        <div class="calendar">
            <div class="digital_clock">

                <div class="time">
                    <span class="hours">00</span>:
                    <span class="minutes">00</span>:
                    <span class="seconds">00</span>
                    <span class="format">AM</span>
                </div>
            </div>


            <div class="header">
                <div class="month">July 2021</div>
                <div class="btns">
                    <!-- today -->
                    <div class="btn today">
                    <i class="fas fa-calendar-day"></i>
                    </div>
                    <!-- previous month -->
                    <div class="btn prev">
                    <i class="fas fa-chevron-left"></i>
                    </div>
                    <!-- next month -->
                    <div class="btn next">
                    <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                </div>
                <div class="weekdays">
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>
                <div class="day">Sun</div>
                </div>
                <div class="days">
                <!-- render days with js -->
                </div>
            </div>
        </div>

        <script src="js/calendar.js"></script>
    </div>


    <footer>
        <div class="links">
            <a href="about.php">About us</a> <br><br>
            <a href="privacy.php">Privacy Policy</a> <br><br>
            <a href="terms.php">Terms of Service</a>
        </div>

        <div class="contact">
            Contact us:<br><br>
            <a href="tel:+94 113 982 392">+94 113 982 392</a> <br><br>
            <a href="planitsupport@gmail.com">planitsupport@gmail.com</a>
        </div>

        <div class="social-media">
            Follow us on:<br><br>
            <a href="https://www.instagram.com/PlanIt"><i class="fa-brands fa-instagram"></i> Instagram</a> <br><br>
            <a href="https://www.facebook.com/PlanIt"><i class="fa-brands fa-facebook"></i> Facebook</a>
        </div>
    </footer>
</body>
</html>
