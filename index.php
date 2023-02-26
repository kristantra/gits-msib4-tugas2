<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CV Dwi Krisna Tantra</title>
</head>

<style>
    .nav-link.active {
        color: #ffc107 !important;
    }
</style>

<body data-bs-spy="scroll" data-bs-target="#nav-scroll">
    <!-- Navbar -->
    <!-- navbar-expand-md itu ketika breakpoint md, bakal expand -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="nav-scroll">
        <div class="container">
            <a href="#" class="navbar-brand">Portfolio</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav  ms-auto fw-bold">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Conctact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <section id="home">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-6 my-5">
                    <img class="img-fluid" src="images/gambar1.svg" alt="hello">
                </div>
                <div class="col-lg-6 my-5">
                    <div class="mt-5">
                        <p class="lead text-uppercase mb-1">Hello!</p>
                        <h1 class="intro-title marker">I’m Dwi Krisna Tantra</h1>
                        <p class="lead fw-normal mt-3">Full Stack Web Developer</p>
                    </div>
                    <div class="social-nav">
                        <nav role="navigation">
                            <ul class="nav justify-content-left">
                                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/krisnatantra3" title="Instagram"><i class="icon-instagram"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/krisnatantra" title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://www.github.com/kristantra" title="GitHub"><i class="icon-github"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <a href="#contact" class="my-3 btn btn-warning rounded-pill">Contact Me</a>
                </div>
            </div>
        </div>
    </section>



    <section id="about" class="container py-5">
        <div class="text-center py-5">
            <h2 class="fw-bolder">
                ABOUT
            </h2>
            <p>The right guy you can talk to that can help solve your problems!</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="images/krisna3.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 offset-lg-1">
                <p class="lh-lg">As a Full Stack Web Developer with expertise in Laravel,
                    have a strong understanding of PHP-based web development and the Laravel framework.
                    I have extensive experience building web applications and RESTful APIs using Laravel,
                    along with front-end technologies such as HTML, CSS, and JavaScript.
                    I am proficient in database design and management, like MySQL, and have experience integrating
                    third-party APIs into web applications.
                    I'm passionate about Full Stack Web Developer. I am a quick learner and a team worker that gets the job done.
                </p>
                <p class="fw-bold fs-4">My Skills:</p>
                <p>HTML, CSS, JS:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 70%">70%</div>
                </div>
                <p>PHP:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" style="width: 65%">65%</div>
                </div>
                <p>MYSQL:</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-striped" style="width: 90%">90%</div>
                </div>


            </div>
        </div>
    </section>

    <section id="portfolio" class="py-5">
        <div class="container">
            <div class="text-center py-5">
                <h2 class="fw-bolder">My Portfolio</h2>
                <p>These are some of my best works</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img1.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img2.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img3.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img4.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img5.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 col-lg-4 mb-4      ">
                    <img src="images/img6.jpg" alt="" class="img-fluid img-thumbnail">
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-dark py-5">
        <div class="container">
            <div class="text-center py-5 text-white">
                <h2 class="fw-bolder">
                    CONTACT ME
                </h2>
                <p>I can help you create a cool looking website!</p>
            </div>
            <div class="">
                <form action="" class="text-white">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Your Subject</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control">
                        </textarea>
                        <button type="submit" class="btn btn-warning mt-4 rounded-pill">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>