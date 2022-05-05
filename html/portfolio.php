<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../fonts/icomoon/style.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Font Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap"
      rel="stylesheet"
    />
    <!-- Img finestra + titolo -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../images/loghi/logoAxland/logoFinestra.ico"
    />
    <title>Axland | Creative studio - Portfolio</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="site-navbar" role="banner" style="position: relative">
      <!-- MENU RESPONSIVE -->
      <nav class="siteNavigation">
        <!-- Sopra i 1000px della dimensione dello schermo ==== MENU NORMALE -->
        <div class="content">
          <img class="site-logo" src="../images/loghi/logoAxland/logo.png" />
        </div>
        <div class="content menu">
          <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="servizi.php">Servizi</a></li>
            <!--<li><a href="caseStudies.php">Case studies</a></li>-->
            <li><a href="about.php">About us</a></li>
            <li><a href="#">Contattaci</a></li>
          </ul>
        </div>
        <!-- Sotto i 1000px della dimensione dello schermo ==== MENU BURGER -->
        <div class="burger content">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>

    <main>
      <div class="row mt-3">
        <div class="col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mb-3">
          <h1 class="gradientMontserrat"><b>Portfolio</b></h1>
          <p class="mt-2 mb-4" id="textPortfolioFoto">
            Grazie alla sua semplicità, una fotografia arriva dritta al cuore.
            La potenza di uno scatto, racchiude in sé un
            <b>espressione comunicativa istantanea</b>. Studiamo la luce e il
            colore in modo dettagliato per creare set perfettamente in linea con
            le esigenze del cliente.
          </p>
          <p class="mt-2 mb-4" id="textPortfolioVideo">
            La forza emotiva del video cattura con efficacia l’attenzione. Le
            immagini coinvolgono ed ispirano fiducia nello spettatore per la
            loro <b>concretezza immediata</b>. Mettiamo al primo posto la
            semplicità, come elemento imprescindibile nella comunicazione.
          </p>
        </div>
        <div class="col-sm-1 col-md-2 col-lg-3"></div>
      </div>
      <!-- BTN CHANGE FOTO/VIDEO-->
      <div class="container containerBtnFotoVideo">
        <div class="row">
          <div class="col-6 col-md-16">
            <button
              class="float-right functionFotoVideo mr-2 font-weight-bold btnFoto activeBtn"
            >
              Photography
            </button>
          </div>
          <div class="col-6 col-md-6">
            <button
              class="float-left functionFotoVideo ml-2 font-weight-bold btnVideo noActiveBtn"
            >
              Filmmaking
            </button>
          </div>
        </div>
      </div>
      <!-- CARTELLE FOTO/VIDEO-->
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
            <div id="fotoDiv">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4 cardFotoVideo">
                  <a href="galleriaPhotography/product.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioPhoto/product.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Product</h2>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 cardFotoVideo">
                  <a href="galleriaPhotography/portraits.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioPhoto/portraits.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Portraits</h2>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 cardFotoVideo">
                  <a href="galleriaPhotography/automotive.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioPhoto/automotive.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Automotive</h2>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2"></div>
                <div
                  class="col-12 col-md-6 col-lg-4 cardFotoVideo marginTopImgCardFotoVideo"
                >
                  <a href="galleriaPhotography/events.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioPhoto/eventi.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Events</h2>
                  </a>
                </div>
                <div
                  class="col-12 col-md-6 col-lg-4 cardFotoVideo marginTopImgCardFotoVideo"
                >
                  <a href="galleriaPhotography/landscape.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioPhoto/landscape.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Landscape</h2>
                  </a>
                </div>
                <div class="col-lg-2"></div>
              </div>
            </div>
            <div id="videoDiv">
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-12 col-md-6 col-lg-4 cardFotoVideo">
                  <a href="galleriaFilmmaking/commercial.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioFilm/commercial.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Commercial</h2>
                  </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 cardFotoVideo">
                  <a href="galleriaFilmmaking/social.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioFilm/social.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Social</h2>
                  </a>
                </div>
                <div class="col-lg-2"></div>
              </div>
              <div class="row">
                <div class="col-lg-2"></div>
                <div
                  class="col-12 col-md-6 col-lg-4 cardFotoVideo marginTopImgCardFotoVideo"
                >
                  <a href="galleriaFilmmaking/videoclip.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioFilm/videoclip.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Videoclip</h2>
                  </a>
                </div>
                <div
                  class="col-12 col-md-6 col-lg-4 cardFotoVideo marginTopImgCardFotoVideo"
                >
                  <a href="galleriaFilmmaking/cinematic.php">
                    <img
                      class="imgCardFotoVideo"
                      src="../images/portfolioFilm/cinematic.jpg"
                    />
                    <h2 class="font-weight-bold writtenCenter">Cinematic</h2>
                  </a>
                </div>
                <div class="col-lg-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER -->
    <footer style="margin-top: 0">
      <div class="row mt-5">
        <div class="col-5 col-md-6 text-center mt-5">
          <div class="col-12 col-md-12" id="divImgLogoFooter">
            <img
              class="site-logo"
              id="imgLogoFooter"
              src="../images/loghi/logoAxland/logoGradiente.png"
            />
          </div>
          <div class="col-12 col-md-12">
            <a href="https://www.instagram.com/axland_/" target="_blank">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                style="width: 35px; height: 35px"
                fill="currentColor"
                class="bi bi-instagram mx-2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                />
              </svg>
            </a>
            <a href="https://www.linkedin.com/company/axland/">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                style="width: 35px; height: 35px"
                fill="currentColor"
                class="bi bi-linkedin mx-2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="col-7 col-md-6">
          <div class="col-12 col-md-12 mt-3">
            <h3 class="colorTitleFooter">#quicklinks</h3>
            <p><a href="../index.php">Home</a></p>
            <p><a href="#">Portfolio</a></p>
            <p><a href="servizi.php">Servizi</a></p>
            <!--<p><a href="caseStudies.php">Case studies</a></p>-->
            <p><a href="about.php">About us</a></p>
            <p><a href="#">Contattaci</a></p>
          </div>
          <div class="col-12 col-md-12 mt-5 mb-5">
            <h3 class="colorTitleFooter">#keepintouch</h3>
            <p>info@axland.it</p>
            <p>+39 3334408236</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-md-12 text-center border-top border-white pt-4 mb-2"
          >
            <p>
              Axland 2022 tutti i diritti riservati © P.iva 124331452 - Powered
              by Alberto Lorena
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Return to Top -->
    <a href="#" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <!-- Function -->
    <script src="../js/returnToTop.js"></script>
    <script src="../js/hamMenu.js"></script>
    <script src="../js/portfolio.js"></script>
    <script src="../js/bootstrap/jquery.js"></script>
    <script src="../js/bootstrap/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap/jquery.sticky.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/bootstrap/popper.min.js"></script>
  </body>
</html>
