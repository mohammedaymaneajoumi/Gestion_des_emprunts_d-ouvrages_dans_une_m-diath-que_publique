<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- This code  load the jQuery library from the jQuery content delivery network (CDN)  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Alternatively, you can download the jQuery library and include it in your project directory.  -->
    <!-- <script src="path/to/jquery.min.js"></script> -->
    <!-- all css and bootstrap always to use -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/logine.css">
</head>

<body>

    <div class="container">
        <section id="formHolder">

            <div class="row">

                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <a href="#" class="logo">SK <span>.</span></a>

                    <div class="heading">
                        <h2>SACRED KNOWLEDGE</h2>
                        <p style="color: #646365">For An Enlightened Society</p>
                    </div>

                    <div class="success-msg">
                        <p>Great! You are one of our members now</p>
                        <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>


                <!-- Form Box -->
                <div class="col-sm-6 form">

                    <!-- Login Form -->
                    <div class="login form-peice switched">
                        <form action="welcomeB.php" method="post">
                            <div class="form-group">
                                <label for="loginemail">Email Adderss</label>
                                <input type="email" name="member_email" id="loginemail" required>
                            </div>

                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" name="member_Password" id="loginPassword" required>
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Login">
                                <a href="#" class="switch">I'm a member</a>
                            </div>
                        </form>
                    </div>


                    <!-- bibliothecaire Form -->
                    <div class="signup form-peice">
                        <form action="welcomeA.php" method="post">

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="librarian_email" id="email" class="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="librarian_password" id="password" class="pass" required>
                            </div>

                            <div class="CTA">
                                <input type="submit" value="Login" id="submit">
                                <a href="#" class="switch">I'm a librarian</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <footer>
            <p>
                made by: <a href="#" class="text-danger" target="_blank">aymaneelajoumi</a>
            </p>
        </footer>
    </div>
    <script src="logine.js"></script>
</body>
</html>