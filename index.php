<!DOCTYPE html>
<html>
<title>Portifólio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Scripts BS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Links W3 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <img src="img/retrato_rafael.png" style="width:45%;" class="w3-round">
            <h4><b>PORTIFÓLIO</b></h4>
        </div>
        <div class="w3-bar-block">
            <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTIFÓLIO</a>
            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE</a>
            <a href="#contato" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTATO</a>
        </div>
        <div class="w3-panel w3-large">

            <a href="https://www.instagram.com/faelzao_62/" target=_”blank”><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://twitter.com/RafaelF41770490" target=_”blank”><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/rafael-felipe-da-silva-37a782186/" target=_”blank”><i class="fa fa-linkedin w3-hover-opacity"></i></a>
            <a href="https://github.com/ma1cao" target=_”blank”><i class="fa fa-github-square w3-hover-opacity"></i></a>
            <a data-toggle="tooltip" title="Não utilizo" data-placement="bottom"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a data-toggle="tooltip" title="Não utilizo" data-placement="bottom"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="portfolio">
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1><b>Meu Portifólio</b></h1>
                <div class="w3-section w3-bottombar w3-padding-16">
                    <span class="w3-margin-right">Filter:</span>
                    <button class="w3-button w3-black">ALL</button>
                    <button class="w3-button w3-white"><i class="fa fa-code w3-margin-right"></i>Web</button>
                    <button class="w3-button w3-white w3-hide-small"><i class="fa fa-television w3-margin-right"></i>Desktop</button>

                </div>
            </div>
        </header>

        <!-- First Project Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
        </div>

        <!-- Second Project Grid-->
        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
            <div class="w3-third w3-container">
                <img src="img/error_404.png" alt="img-projeto" style="width:100%" height="250px" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Lorem Ipsum</b></p>
                    <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>

        <!-- Images of Me -->
        <div class="w3-row-padding w3-padding-16" id="about">
            <div class="w3-col m11">
                <!-- <img src="img/eu.jpg" alt="Me" style="width:100%" height="400px"> -->
            </div>

        </div>

        <div class="w3-container w3-padding-large" style="margin-bottom:32px">
            <h4><b>Sobre mim</b></h4>
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <hr>

            <h4>Technical Skills</h4>
            <!-- Progress bars / Skills -->
            <p>C#</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">Intermediário</div>
            </div><br>
            <p>Web Design</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">Intermediário</div>
            </div><br>
            <p>Banco de Dados</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:100%">Intermediário</div>
            </div>
            <p>
                <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom">
                    <a href="https://drive.google.com/open?id=1ElV5LkaTKhLN3U4WlkV5L6Hwx18QdIyZ" target=_”blank”><i class="fa fa-download w3-margin-right"></i>Download do currículo</a>
                </button>
            </p>
            <hr>



            <!-- Contato Section -->
            <div class="w3-container w3-padding-large w3-white w3-border" id="contato"> 
                <h4 ><b>Contato</b></h4>
                <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                    <div class="w3-third w3-black">
                        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                        <p>rafaelfelps62@gmail.com</p>
                    </div>
                    <div class="w3-third w3-black">
                        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
                        <p>Belo Horizonte, MG</p>
                    </div>
                    <div class="w3-third w3-black">
                        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                        <p>(31) 9 8681-4042</p>
                    </div>
                </div>
                <hr class="w3-opacity">
                <form action="class/enviaEmail.php" target="">
                <div class="row">
                    <div class="w3-section col-6">
                        <label>Nome</label>
                        <input class="w3-input w3-border" type="text" name="nome" id="nome" required>
                    </div>

                    <div class="w3-section col-6">
                        <label>Sobrenome</label>
                        <input class="w3-input w3-border" type="text" name="sobre_nome" id="sobre_nome" required>
                    </div>
                </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border" type="text" name="email" id="email" required>
                    </div>
                    <div class="w3-section">
                        <label>Mensagem</label>
                        <input class="w3-input w3-border" type="text" name="mensagem" id="mensagem" required>
                    </div>
                    <button type="submit" class="w3-button w3-black w3-margin-bottom" id="submit" name="submit"><i class="fa fa-paper-plane w3-margin-right"></i>Enviar Menssagem</button>
                </form>
            </div>

            <!-- Footer -->


            <div class="w3-black w3-center w3-padding-24">Created by Rafael Felipe da Silva</div>

            <!-- End page content -->
        </div>

        <script>
            // Tooltips
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });



            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>

</body>

</html>