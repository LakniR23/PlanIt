<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanIt</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/main.css">
    <!--<link rel="stylesheet" href="css/all1.css">-->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous">
    </head>
<body body data-section="all">
    <div class="wrapper">
        <div class="header">
            <div class="left-wrapper">
                <a href="index2.php">
                    <img src="images/logo 2.png" alt="PlanIt logo" width="160px" height="100px">
                </a>
            </div>
        
            <div class="right-wrapper">
                Well begun is half done.
            </div>
        </div>
            
        <br>

        <a href="index.php"><img src="images/back.png" alt="Back" width="20px" height="20px" style="margin-left:20px;"></a>
        
        <br>
        <br>
        
        <div class="body">
            <h1>All</h1>

            <br>

            <div class="row">
                <input type="text" id="input-box" placeholder="Add task">
                <button id="addButton"><img src="images/plus.png" alt="Add" width="10px" height="10px"></button>
            </div>

            <div class="options">
                <div class="all">
                    <button>All</button>
                </div>

                <div class="pending">
                    <button>Pending</button>
                </div>

                <div class="completed">
                    <button>Completed</button>
                </div>
            </div>

            <div class="tasks">
                <ul type="none" id="list-container">
                    <!--<li class="checked">Task 1</li>
                    <li>Task 2</li>
                    <li>Task 3</li>-->
                </ul>
            </div>
        </div>

        <script src="js/script.js"></script>  
        <br>
        <br>
        <br>
        <br>
    </div>
    

    <footer>
        <div class="links">
            <a href="about.php">About us</a> <br> <br>
            <a href="privacy.php">Privacy Policy</a> <br> <br>
            <a href="terms.php">Terms of Service</a>
        </div>

        <div class="contact">
            Contact us :<br> <br>
            <a href="tel:+94 113 982 392">+94 113 982 392</a> <br> <br>
            <a href="planitsupport@gmai.com">planitsupport@gmail.com</a>
        </div>

        <div class="social-media">
            Follow us on :<br> <br>
            <a href="https://www.instagram.com/PlanIt"><i class="fa-brands fa-instagram"></i>   Instagram</a> <br> <br>
            <a href="https://www.facebook.com/PlanIt"><i class="fa-brands fa-facebook"></i>    Facebook</a>
        </div>
    </footer>

    
</body>
</html>