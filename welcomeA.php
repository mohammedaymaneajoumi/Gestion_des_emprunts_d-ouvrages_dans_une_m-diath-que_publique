<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/footers.css">
    <link rel="stylesheet" href="css/pagination.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/reserve.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/1171a84c58.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="blurry-filter"></div>
    <header>
        <div>
            <article id="title"><span class="parent">Unsplash</span><br/><span class="name">SACRED KNOWLEDGE</span></article>
            <article id="reference">
            <svg id="profile-icon" width="35" height="35" viewBox="0 0 50 50">
                <path fill="currentcolor" d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
            </svg>
            </article>
        </div>
        <script>
            var profileIcon = document.getElementById("profile-icon");
            profileIcon.addEventListener("click", function() {
                window.location.href = "profile.php";
            });
        </script>
    </header>

    <div class='d-flex mt-5' style="justify-content: center;">
            <select  style=" border-radius: 3px; color: #8d949a;">
                <option selected>select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select style="margin-left: 10px; border-radius: 3px; color: #8d949a;">
                <option selected>select menu</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class='col-md-6 d-flex' style="margin-left: 10px;">
                <div class='search-box'>
                    <form class='search-form'>
                    <input class='form-control' placeholder='ex: livre, roman, DVD, mémoire de recherche, magazine, etc.' type='text'>
                    <button class='btn btn-link search-btn'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    </form>
                </div>
            </div>
    </div>

    <main class="container">
        
        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>you've got 24 hours to pick up your item</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>222222222222222222222</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>33333333333333333333333333</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>4444444444444444444444444444</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>55555555555555555555555555555</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>666666666666666666666666666</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>777777777777777777777777777777777777777</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>

        <section class="card ">
            <div class="product-image">
                <img src="img/poster1.jpg" alt="OFF-white Red Edition" draggable="false" />
            </div>
            <div class="product-info">
                <h2>Company of One</h2>
                <p>Auteur : Paul Jarvis</p>
                <P>Date de publication : 15 janvier 2019</P>
                <P>état : Neuf</P>
                <P>type  : livre</P>
                <P>nombre de pages : 220 pages</P>
            </div>
                <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                <div id='dialog'>
                <label id="dlg-back" for="dialog_state"></label>
                <div id='dlg-wrap'>
                    <label id="dlg-close" for="dialog_state"><i class="fa-sharp fa-solid fa-circle-xmark"></i></label>
                    <h2 id='dlg-header'>Are you sure?</h2>
                    <div id='dlg-content'>888888888888888888888888888888888888888</div>
                    <div id='dlg-prompt'>
                    <div class='button positive'><i class="icon ion-ios-checkmark-empty"></i> Yes, let's do it!</div>
                    <div class='button'><i class="icon ion-ios-close-empty"></i> No, I'll reconsider</div>
                    </div>
                </div>
                </div>
                <main id='main' class='main_area'>
                <div class='center'>
                    <label class="button mt-4" for="dialog_state"><i class="icon ion-ios-upload-outline
                    "></i> Reserve Now</label>
                </div>
                <div id='console'></div>
    
        </section>


        
    </main>

</main>
<!-- pagination -->
<div class="content_detail__pagination cdp" actpage="1">
			<a href="#!-1" class="cdp_i">prev</a>
			<a href="#!1" class="cdp_i">1</a>
			<a href="#!2" class="cdp_i">2</a>
			<a href="#!3" class="cdp_i">3</a>
			<a href="#!4" class="cdp_i">4</a>
			<a href="#!5" class="cdp_i">5</a>
			<a href="#!6" class="cdp_i">6</a>
			<a href="#!7" class="cdp_i">7</a>
			<a href="#!8" class="cdp_i">8</a>
			<a href="#!9" class="cdp_i">9</a>
			<a href="#!10" class="cdp_i">10</a>
			<a href="#!11" class="cdp_i">11</a>
			<a href="#!12" class="cdp_i">12</a>
			<a href="#!13" class="cdp_i">13</a>
			<a href="#!14" class="cdp_i">14</a>
			<a href="#!15" class="cdp_i">15</a>
            <a href="#!16" class="cdp_i">16</a>
			<a href="#!17" class="cdp_i">17</a>
			<a href="#!18" class="cdp_i">18</a>
			<a href="#!19" class="cdp_i">19</a>
			<a href="#!+1" class="cdp_i">next</a>
		</div>
    <!-- FOOOOTER -->
    <!-- FOOOOTER -->
<div class="footer-dark">
        <footer>
            <div class="container ">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">books</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">Hosting</a></li>
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
    <script src="reserve.js"></script>
</body>
</html>