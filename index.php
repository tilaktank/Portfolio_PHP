<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top toggle-button">
        <div class="container-fluid">
          <button class="navbar-toggler light-grey-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon light-grey-color"></span>
          </button>
          <div class="collapse navbar-collapse me-5" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item p-3">
                <a class="nav-link text-white active" aria-current="page" href="#experience">Experience</a>
              </li>
              <li class="nav-item p-3">
                <a class="nav-link text-white" href="#work">Work</a>
              </li>
              <li class="nav-item p-3">
                <a class="nav-link text-white" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        
      <section>
        <!-- main section -->
        <div id="main">
            <div class="d-flex flex-wrap bg-transparent">
                <div class="col-4"></div>
                <div class="col-8"></div>
            </div>
            <div class="main">
                <div class="d-flex flex-wrap">
                    <div class="col-md-6 col-12">
                        <img src="hero-image.jpg" style="max-width: 100%;">
                    </div>
                    <div class="col-md-6 col-12 my-auto head-text-left">
                        <h1 class="text-white"><strong>I'm Tilak Tank. A UI Developer <span>based in India.</span></strong></h1>
                        <p class="text-white pt-4">
                            I’m probably the most passionate designer you will ever get to work with. If you have a great project that needs some amazing skills, I’m your guy.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- work section -->
        <div class="section-padding-top px-5" id="experience">
            <div class="work">
                <div class="inner">
                    <p class="mb-0 light-grey-color"><strong><small>WORK EXPERIENCE</small></strong></p>
                    <h2 class="text-white col-md-8 col-12 pt-2"><strong>Companies I have worked for in the past.</strong></h2>
                    <div class="d-flex flex-wrap pt-4">
                        <div class="col-md-4 col-12">
                            <p class="pt-2 light-grey-color work-numbers">01</p>
                            <p class="text-white work-title col-md-8 col-12"><span style="color: #3cc74e;">Google</span>, Interaction Designer</p>
                            <p class="text-white col-md-8 col-12">I currently am the lead designer on the interaction design team for Google Play.</p>
                        </div>
                        <div class="col-md-4 col-12">
                            <p class="pt-2 light-grey-color work-numbers">02</p>
                            <p class="text-white work-title col-md-8 col-12"><span style="color: #609bff;">Facebook</span>, Product Designer</p>
                            <p class="text-white col-md-8 col-12">I’ve worked on a wide variety of internal tools for facebook over the past 6 years.</p>
                        </div>
                        <div class="col-md-4 col-12">
                            <p class="pt-2 light-grey-color work-numbers">03</p>
                            <p class="text-white work-title col-md-8 col-12"><span style="color: #e95d90;">Dribbble</span>, Graphic Designer</p>
                            <p class="text-white col-md-8 col-12">I started my design career with Dribbble. I was incharge of creating illustrations for the platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- article 1 section -->
        <div class="article pt-5" id="blog">
            <div class="d-flex flex-wrap">
                <div class="col-md-6 col-12 text-content py-5 px-5 d-flex align-items-center">
                    <div class="col-12">
                        <h2 class="col-8"><strong>Philosophy & values</strong></h2>
                        <p class="col-8">I think everyone wants the same thing - relationship with humanity, peace with the metaphysical, and experience with the universe. I try to grasp these things with my values: authenticity, creativity, & hospitality.</p>
                        <a href="">More about me</a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img src="article-banner.png" style="max-width: 100%;">
                </div>
            </div>
        </div>

        <!-- skills -->
        <div class="skills px-5" id="skills" style="padding-top: 8%;">
            <div class="d-flex flex-wrap inner">
                <div class="col-md-4 col-12">
                    <h2 class="text-white"><strong>Skillset</strong></h2>
                    <p class="light-grey-color col-6">With skills in over 4 different fields of design, I am the perfect person to hire when it comes to a full fledged project. Whatever your needs are, I can pretty much take on any challenge.</p>
                </div>
                <div class="col-md-8 col-12 d-flex flex-wrap">
                    <div class="col-6">
                        <img src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322f21d1916567_Product%20Design.svg" alt="">
                        <h3 class="text-white pt-4 pb-1 sub-title">Product Design</h3>
                        <p class="light-grey-color pb-4 col-8">Working at Facebook has taught me a lot about how to understand users, solve problems and build great products.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322f4aae916566_Visual%20Design.svg" alt="">
                        <h3 class="text-white pt-4 pb-1 sub-title">Visual Design</h3>
                        <p class="light-grey-color pb-4 col-8">My experience at dribbble has helped me learn to develop the eye for design. Colors, typography, layout and the whole package.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322f0935916564_Motion%20Design.svg" alt="">
                        <h3 class="text-white pt-4 pb-1 sub-title">Motion Design</h3>
                        <p class="light-grey-color pb-4 col-8">I started my design journey with motion design in my college days. Motion is something that really fascinates me because of the flexibility of story telling.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322f5230916565_Photography.svg" alt="">
                        <h3 class="text-white pt-4 pb-1 sub-title">Photography</h3>
                        <p class="light-grey-color pb-4 col-8">Clicking pictures really brings out the creative in me. Phtography really makes you look and percieve things in a different way.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- project section -->
        <div class="projects px-5" style="padding-top: 10%;padding-bottom: 6%;" id="work">
            <div class="d-flex">
                <div class="col-6">
                    <h2 class="text-white"><strong>Work that I’ve done for the past 8 years</strong></h2>
                    <p class="light-grey-color"><strong>MY PROJECTS</strong></p>
                    <div class="px-3 py-5">
                    <img src="card2.jpg" style="max-width: 100%;">
                        <div class="card-body px-4 py-5">
                            <h3 class="text-white card-title"><strong>Restaurant Website Design</strong></h3>
                            <p class="card-text light-grey-color pt-2">I worked with the guys at CBRE to redesign their entire website and mobile app fro both Android and iOS. This project lasted for 4 months and was a very challenging one.</p>
                        </div>
                    </div>
                    <div class="px-3">
                        <img src="card4.jpg" style="max-width: 100%;">
                        <div class="card-body px-4 py-5">
                            <h3 class="text-white card-title"><strong>Mobile Dashboard</strong></h3>
                            <p class="card-text light-grey-color pt-2">I worked with the guys at CBRE to redesign their entire website and mobile app fro both Android and iOS. This project lasted for 4 months and was a very challenging one.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="px-3">
                        <img src="card1.jpg" style="max-width: 100%;">
                        <div class="card-body px-4 py-5">
                            <h3 class="text-white card-title"><strong>CoinView Mobile App Design</strong></h3>
                            <p class="card-text light-grey-color pt-2">I was commissioned by Coinview to revamp their mobile app. I was asked to come up with a brand new design system and rethink the entire user expereince from the ground up.</p>
                        </div>
                    </div>
                    <div class="px-3 py-5">
                        <img src="card3.jpg" style="max-width: 100%;">
                        <div class="card-body px-4 py-5">
                            <h3 class="text-white card-title"><strong>T-Box Mobile Design</strong></h3>
                            <p class="card-text light-grey-color pt-2">I worked with the guys at CBRE to redesign their entire website and mobile app fro both Android and iOS. This project lasted for 4 months and was a very challenging one.</p>
                        </div>
                    </div>
                    <div class="px-3 py-5 d-flex align-items-center justify-content-center">
                        <a href="">VIEW ALL PROJECTS</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- article 2 section -->
        <div class="article pt-5" id="reading">
            <div class="d-flex">
                <div class="col-6 text-content py-5 px-5 d-flex align-items-center">
                    <div class="col-12">
                        <h2 class="col-8"><strong>Instagram</strong></h2>
                        <p class="col-8">If you area a person who enjoys photography, then I highly recommend that you check out my Instagram. I’m an avid traveller and I capture the best moments that I would love to cherish with the world</p>
                        <a href="">More about me</a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="Instagram.jpg" style="max-width: 100%;">
                </div>
            </div>
        </div>

        <!-- contact section -->
        <div class="contact" style="padding-top: 8%; padding-bottom: 8%;" id="contact">
            <div class="container">
                <div class="d-flex flex-wrap">
                    <div class="col-md-6 col-12">
                        <h2 class="text-white"><strong>Let’s talk business</strong></h2>
                        <p class="light-grey-color col-12 pt-2" style="font-size: 18px;">Now that you know a lot about me, let me know if you are interested to work with me.</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <form action="./index.php"  method="GET">
                            <div class="mb-4">
                                <label for="exampleInputName" class="form-label text-white"><strong>Name</strong></label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="name">
                                <span id="name-error" class="text-danger"></span>
                              </div>
                            <div class="mb-4">
                              <label for="exampleInputEmail1" class="form-label text-white"><strong>Email address</strong></label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <span id="email-error" class="text-danger"></span>
                            </div>
                            <div class="mb-4">
                              <label for="exampleInputMessage" class="form-label text-white"><strong>Message</strong></label>
                              <textarea name="message" id="exampleInputMessage" rows="4" class="col-12"></textarea>
                              <span id="message-error" class="text-danger"></span>
                            </div>
                            <button type="submit" class="btn custom-btn col-12 py-4" id="form-submit"><strong>LET'S GET STARTED</strong></button>
                          </form>
                          <?php 
                            if(isset($_GET['form-submit'])){
                                $name = $_GET['exampleInputName'];
                                $email = $_GET['exampleInputEmail1'];
                                $message = $_GET['exampleInputMessage'];
                                if($message == NULL)
                                    $message = "N/A";
                                $conn = new mysqli("localhost","info_db_user1", "I/nY&}-_RE5hjR]g", "id17304222_info_db");
                                if ($conn->connect_error){
                                    die("Connection failed: ".$conn->connect_error);
                                }
                                $sql = "INSERT INTO info_table values(,'$name', '$email', '$message')";
                                if($conn->query($sql) === TRUE){
                                    echo "<script>alert('Inserted');</script>";
                                }
                                else{
                                    echo "<script>alert('NOt inserted')></script>";
                                }
                            }
                          ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section -->
        <div>
            <footer class="py-5 px-5">
                <div class="d-flex flex-wrap pt-md-5">
                    <div class="col-md-6 col-12 mb-md-0 mb-4">
                        <div class="icons">
                            <a href="https://twitter.com/" target="_blank"><img class="px-2" src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322f9d3e916552_Twitter.svg" alt=""></a>
                            <a href="https://dribbble.com/" target="_blank"><img class="px-2" src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322fab05916551_Dribbble.svg" alt=""></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img class="px-2" src="https://uploads-ssl.webflow.com/60670664a9322f4664916537/60670665a9322fa1cb916550_LinkedIn.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <ul class="d-flex flex-wrap">
                            <li class="col-6 pt-4"><a href="#main">Home</a></li>
                            <li class="col-6 pt-4"><a href="#store">Store</a></li>
                            <li class="col-6 pt-4"><a href="#skills">Skills</a></li>
                            <li class="col-6 pt-4"><a href="#blog">Blog</a></li>
                            <li class="col-6 pt-4"><a href="#work">Work</a></li>
                            <li class="col-6 pt-4"><a href="#reading">Reading List</a></li>
                            <li class="col-6 pt-4"><a href="#process">Process</a></li>
                        </ul>
                    </div>
                    <div class="col-12 pt-4">
                        <p class="light-grey-color">Copyright 2021 • Tilak Tank</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>