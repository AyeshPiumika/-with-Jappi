<style>
    /* Nav bar */

    :root {
        --main-color: #F3836C;
        --text-color: #9e9c9c;
    }

    .nav-logo img {
        height: 90px;
        margin-top: -10px;
        float: left;
    }

    .nav-content {
        align-items: center;
        padding-left: 150px;
        padding-top: 25px;
    }

    .nav-content ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .nav-content li a {
        float: left;
        text-align: center;
        margin-right: 15px;
        font-weight: 700;
        color: #b3b0b0;
        text-decoration: none;
    }

    .nav-content li a:hover {
        color: var(--main-color);
    }

    .nav-icons {
        text-align: right;
        padding-top: 25px;
    }

    nav {
        background-color: none;
        align-items: center;
        text-align: center;
    }
</style>
<header>
    <nav>
        <div class="container text-center">
            <div class="row">
                <div class="col nav-logo">
                    <img src="./imgs/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-7 nav-content ">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Contact Me</a></li>
                        <li><a href="index.php#about">About Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>