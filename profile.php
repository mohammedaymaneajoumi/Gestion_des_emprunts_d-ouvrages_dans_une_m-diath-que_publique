<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/EditProfile.css">
    <script src="https://kit.fontawesome.com/1171a84c58.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="blurry-filter"></div>
        <header>
            <div>
                <article id="title"><span class="parent">Unsplash</span><br/><span class="name">SACRED KNOWLEDGE</span></article>
                <!-- <article id="reference">
                <svg id="profile-icon" width="35" height="35" viewBox="0 0 50 50">
                    <path fill="currentcolor" d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
                </svg>
                </article> -->
                    <!-- log out button  -->
                    <span style="font-size: 2em;">
                        <i class="fa-solid fa-arrow-right-from-bracket" ></i>
                    </span> 

            </div>
        </header>
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div
            class="image d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-dark" style="height: 140px; width: 140px; border-radius: 50%">
                <img
                src="img/pngegg.png"
                height="100"
                width="100" />
            </button>
            <span class="name" style="margin-top: 1rem !important;">aymane Elajoumi</span>
            <span class="idd">@elajoumi6_</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                <span class="idd1">Oxc4c16a645_b21a</span>
                <span><i class="fa fa-copy"></i></span>
            </div>
            <div class="d-flex">
            <main role="main">
                <button class="popup-trigger btn" id="popup-trigger"><span>Edit Profile</span></button>
            </main>
            </div>
            <div class="text" style="margin-top: 5rem !important; color: #625e59;">
                <p>Full name : Mohammed Aymane elajoumi</p>
                <p>e-mail : mohammed.aymane@gmail.com</p>
                <p>Phone number : +212 6 07 44 42 20</p>
                <p>Adresse : ouama tangier , morocco</p>
                <p>C.I.N : KB225112</p>
                <P>Birthday : 28.08.2002</P>
                <p>type : Etudiant</p>
            </div>
            <div class="px-2 rounded mt-4 date">
                <span class="join">Created at May,2021</span>
            </div>
            </div>
        </div>
        </div>
    <!-- modal-->
            <div class="overlay" id="overlay">
            <div class="overlay-background" id="overlay-background"></div>
            <div class="overlay-content" id="overlay-content">
                <div class="fa fa-times fa-lg overlay-close" id="overlay-close"></div>
                <h3 class="main-heading">Edit Profile</h3>
                <h5 class="blurb">Please enter valid informations &mdash;</h5>
                <form class="signup-form" method="post" action="#" novalidate="novalidate">
                    <label for="">Full Name</label>
                    <input id="" type="text" name="name" autocomplete="off"/>
                    <label for="">e-mail address</label>
                    <input id="" type="email" name="name" autocomplete="off"/>
                    <label for="">Phone number</label>
                    <input id="" type="number" name="email" autocomplete="off"/>
                    <label for="">Adresse</label>
                    <input id="" type="text" name="pw" autocomplete="off"/>
                    <label for=""> C.I.N</label>
                    <input id="" type="text" name="cpw" autocomplete="off"/>
                    <label for="">Birthday</label>
                    <input id="" type="text" name="cpw" autocomplete="off"/>
                    <label for="">Type</label>
                    <input id="s" type="text" name="cpw" autocomplete="off"/>
                    <button class="btn btn-outline submit-btn"><span>submit</span></button>
                </form>
            </div>
            </div>

    <!-- FOOOOTER -->
<div class="footer-dark">
        <footer>
            <div class="container ">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">novels</a></li>
                            <li><a href="#">books</a></li>
                            <li><a href="#">DVDs</a></li>
                            <li><a href="#">magazines</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>sacred knowledge</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <p class="copyright">sacred knowledge © 2018</p>
                </div>
                
            </div>
        </footer>
    </div>
    <script src="js/EditProfile.js"></script>
</body>
</html>
