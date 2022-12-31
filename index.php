<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/Style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>日本語 with Jappi</title>
</head>

<body>

    <?php @include './Components/Navbar.php'; ?>

    <Header id="banner">
        <img src="./imgs/img4.jpg" alt="">
        <div class="content">
            <hgroup>
                <h1><b>日本語 with Jappi</b></h1>
                <i>slogan</i>
            </hgroup>
        </div>
    </Header>

    <br><br><br><br>

    <div class="container-cn" id="contact">
        <div class="content-contact">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Surkhet, NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">codinglab@gmail.com</div>
                    <div class="text-two">info.codinglab@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text"><b>Contact Me</b></div>
                <p>If you have any work from me or any types of quries related to my classes, you can send me message from here. It's my pleasure to help you.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="input-box message-box">
                        <input type="text" placeholder="Enter your message">
                    </div>
                    <div class="button">
                        <input type="button" value="Send Now">
                    </div>
                    <div class="social">
                        <a href="#">
                            <i class="icon ion-social-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="icon ion-social-snapchat"></i>
                        </a>
                        <a href="#">
                            <i class="icon ion-social-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="icon ion-social-facebook"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </html>

    <br><br><br><br>

    <div class="container text-center" id="about">
        <!-- <div class="shadow p-3 mb-5 bg-body rounded"> -->
        <div class="row">
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./imgs/img1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./imgs/img2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./imgs/img3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./imgs/background.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./imgs/background1.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 style="color: #F3836C;"><b>About Me</b></h3>
                <br>
                <p>Gem Market is an online marketplace for buying loose gemstones from the Sri Lankan Gem Market. We strive to provide a unique platform that will enable gem traders, collectors & end users across the world to gain direct access to the finest Ceylon gemstones as per their specific requirements thereby connecting the demand with the right supply at the right time!</p>
                <img class="shadow p-3 mb-5 bg-body rounded" src="./imgs/logo.png" alt="">
            </div>
        </div>
        <!-- </div> -->
    </div>

    <?php @include './Components/Footer.php'; ?>

</body>

</html>