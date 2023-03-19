<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- include the Tailwind CSS file in your HTML file. You can do this by adding the following line in the head section of your HTML file: -->
    <!-- <link rel="stylesheet" href="https://cdn.tailwindcss.com/"></link> -->
    <!-- jQuery 3.1.1 -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/1171a84c58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/home.css">
    <link rel="stylesheet" href="css2/AddUsers.css">
</head>
<body>
<nav class="mnb navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="ic fa fa-bars"></i>
        </button>
        <div style="padding: 15px 0;">
            <a href="#" id="msbo" style="color: #555"><i class="ic fa fa-bars"></i></a>
        </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">more <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Upgrade</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
        </ul>
        <form class="navbar-form navbar-right">
        <!-- <select style="border-radius: 3px; border: 1px solid #ccc; padding: 4px 1px 6px 1px; color:#555; ">
                <option selected>type</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select> -->
            <input type="text" class="form-control" style="margin-left: 5px; width: 379px; font-size: small;" placeholder="Search..."><span style="position: relative; right: 22px; top: 2px; color: #555;"><i class="fa-solid fa-magnifying-glass"></i></span>
        </form>
            
        </div>
    </div>
</nav>
    <!--msb: main sidebar-->
    <div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Brand -->
            <div class="brand-name-wrapper ">
            <a class="navbar-brand " href="#" style="font-weight : bolder; font-size: 25px; color: #393053">
                SK<span>.</span>
            </a>
            </div>

        </div>

        </div>

        <!-- Main Menu -->
        <div class="side-menu-container">
        <ul class="nav navbar-nav">
            <li><a href="welcomeL.php"><i class="fa fa-dashboard"></i><span style="margin-left: 8px;">Dashboard</span></a></li>
            <li><a href="AddArticle.php"><i class="fa-sharp fa-solid fa-square-plus"></i><span style="margin-left: 8px;"> Add Article</span></a></li>
            <li><a href="AllOperations.php"><i class="fa-solid fa-retweet"></i><span style="margin-left: 8px;"> All operations</span></a></li>
            <li><a href="UserStatus.php"><i class="fa-solid fa-users"></i><span style="margin-left: 8px;"> Users status</span></a></li>
            <li><a href="AddUsers.php"><i class="fa-solid fa-user-plus"></i><span style="margin-left: 8px;"> Add users</span></a></li>
            <li><a href="#"><i class="fa-solid fa-circle-info"></i><span style="margin-left: 8px;"> About</span></a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    </div>
    <!--main content wrapper-->
    <div class="mcw">
    <!--navigation here-->
    <!--main content view-->
    <div class="cv">
        <div>
        <div class="inbox">
            <div class="inbox-sb">
            </div>
            <div class="inbox-bx container-fluid">
                <div class="row" style="margin-bottom: 53px;">
                <div>
                    <section style="margin-left: 45px;font-size: 30px;margin-top: 20px;position: absolute;top: 89px;">
                        <div class="" style="">
                            <h2> Add users ::</h2>
                        </div>
                    </section>
                </div>
                <div class="wrapper">
                    <div class="container">
                        <article class="part card-details">
                            <form action="" if="cc-form" autocomplete="off">
                                <div class="group card-name">
                                    <label for="name">username <span style=" color: red;">*</span></label>
                                    <input type="text" id="name" class="" type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="group card-name">
                                    <label for="name">e-mail address <span style=" color: red;">*</span</label>
                                    <input type="text" id="name" class="" type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="group card-name">
                                    <label for="name">Phone number <span style=" color: red;">*</span</label>
                                    <input type="number" id="name" class="" type="text" placeholder="..." >
                                </div>
                                <div class="group card-name">
                                    <label for="name">Adresse <span style=" color: red;">*</span></label>
                                    <input type="text" id="name" class="" type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="group card-name">
                                    <label for="name">Identity card <span style=" color: red;">*</span></label>
                                    <input type="text" id="name" class="" type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="group card-name">
                                    <label for="name">Birthday <span style=" color: red;">*</span></label>
                                    <input type="date" id="name" style='font-size: 13px; font-family: "Tajawal", Arial ;' type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="group card-name">
                                    <label for="name">Type <span style=" color: red;">*</span></label>
                                    <input type="text" id="name" class="" type="text" maxlength="30" placeholder="...">
                                </div>
                                <div class="grup submit-group">
                                    <span class="arrow"></span>
                                    <input type="submit" class="submi" onclick="myFunction()" value="add article">
                                    <style>
                                        .submi {
                                            font-family: "Tajawal", Arial ;
                                            background-color: black; 
                                            color: white; 
                                            padding: 8px 30px; 
                                            border: none; 
                                            border-radius: 5px;
                                            letter-spacing: 0.20rem;
                                        }
                                        
                                        .submi:hover {
                                            background-color: #808080; 
                                            cursor: pointer; 
                                        }
                                    </style>
                                    <script>
                                        function myFunction() {
                                        alert("User added!");
                                        }
                                    </script>
                                </div>
                            </form>
                        </article>
                        <div class="part bg"></div>
                    </div>
                </div>
        <!-- ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->
        </div>
        </div>
    </div>
</div>
<script src="js/home.js"></script>
</body>
</html>