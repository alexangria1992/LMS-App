<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library Management System</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    <style type="text/css">
     nav {
        float: right;
        word-spacing: 30px;
        padding: 20px;
    }

    nav li {
        display: inline-block;
        line-height: 80px;
    }
    </style>
<body>
    <div class="wrapper">  
        <header>
            <div class="logo">
                <img style="background-repeat:  no-repeat;;" src="images/9.png" alt="">
                <h1 style="color: white">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
        <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="">BOOKS</a></li>
                    <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                    <li><a href="">ADMIN_LOGIN</a></li>
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </nav>
        </header>
    <section>
    <br><br><br>
    <div class="sec_img">
                <br><br><br><br>
                <div class="box">
                    <h1 style="text-align: center; font-size: 30px;">Welcome to library</h1><br>
                    <h1 style="text-align: center;font-size: 25px;">Opens at 09:00</h1><br>
                    <h1 style="text-align: center;font-size: 25px;">Closes at 15:00</h1><br>
            </div>
        </div>
        </section>
        <?php
            include 'footer.php';
        ?>
    </div>

</body>
</html>  