<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1171a84c58.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/home.css">
    <link rel="stylesheet" href="css2/card.css">
    <!-- include the Tailwind CSS file in your HTML file. You can do this by adding the following line in the head section of your HTML file: -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/"></link>
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
            <input type="text" class="form-control" style="margin-left: 5px; width: 379px;" placeholder="Search..."><span style="position: relative; right: 22px; top: 2px; color: #555;"><i class="fa-solid fa-magnifying-glass"></i></span>
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
            <a class="navbar-brand " href="#" style="font-weight : bolder; color: #393053">
                SK<span>.</span>
            </a>
            </div>

        </div>

        </div>

        <!-- Main Menu -->
        <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-puzzle-piece"></i> Components</a></li>
            <li><a href="#"><i class="fa fa-heart"></i> Extras</a></li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
                <i class="fa fa-diamond"></i> Apps
                <span class="caret"></span>
            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
                <div class="panel-body">
                <ul class="nav navbar-nav">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Ecommerce</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="#">Social</a></li>
                </ul>
                </div>
            </div>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
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

        <!-- ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->
            <div class="row">
                <!-- <div class="col-md-2">
                
                </div> -->
                <section style="margin-left: 35px">
                    <div class="col-md-10">
                    <h2> Welcome back :)</h2>
                    </div>
                </section>
                <section class="d-flex">
                <div class="product-card">
                    <div class="product-tumb">
                        <img src="img/poster1.jpg" alt="" style="width: 150px;">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">novel</span>
                        <h4><a href="">Company of One</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-tumb">
                        <img src="img/poster1.jpg" alt="" style="width: 150px;">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">novel</span>
                        <h4><a href="">Company of One</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-tumb">
                        <img src="img/poster1.jpg" alt="" style="width: 150px;">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">novel</span>
                        <h4><a href="">Company of One</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-tumb">
                        <img src="img/poster1.jpg" alt="" style="width: 150px;">
                    </div>
                    <div class="product-details">
                        <span class="product-catagory">novel</span>
                        <h4><a href="">Company of One</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    </div>
                </div>

                </section>
            </div>
        </div>
        </div>
    </div>
</div>
<script src="home.js"></script>

</body>
</html>