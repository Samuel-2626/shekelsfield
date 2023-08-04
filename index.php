<?php require_once('templates/header.php') ?>

<?php

if(isset($_POST['submit'])) {
    $name = SanitizeString($_POST["name"]);
    $email = SanitizeString(($_POST["email"]));
    $message = SanitizeString(($_POST["message"]));

    $to = "efosonaname@gmail.com";
    $subject = "This is an email from Shekelsfield Nigeria Limited website";

    $headers = 'From: ' . $name . ' Email ' . $email . "\r\n" . 
    'Reply-To: ' . $email . "\r\n" . 
    'X-Mailer: ' . 'Shekelsfield Nigeria Limited website';

    $ml = mail($to, $subject, $message, $headers);
    if (!$ml){
        header('Location: ./contact-failure.php');
    }else {
        header('Location: ./contact-success.php');
    }
}


function SanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }

?>


<div>
    <video autoplay muted loop id="myVideo">
        <source src="videos/bg_2.mp4" type="video/mp4">
    </video>
    <div class="content">
        <h1>Welcome to Shekelsfield Nigeria Limited</h1>
        <q>...planted by the rivers</q>
    </div>
</div>

<!--  Second Section -->

<div class="SecondSection" data-target="#navbar-example2" data-spy="scroll" id="about-us">
    <div class="container">
        <h2>Who We Are</h2>
        <hr>
        <div class="row tex-center">
            <div class="col-lg-6">
                <p>
                    <b>Shekelsfield Nigeria Limited</b> was incorporated in Nigeria on the 22nd December 2017 with the main aim of exploring farming enterprises as a platform for generating funds towards servicing other areas of its interest.
                </p>
                <ul>
                    <strong>Our specific objectives are, to: </strong>
                    <li>use improved crop and livestock production technologies; and innovative marketing techniques for maximum enterprises profitability; </li>
                    <li>form mutually beneficial partnerships with individual farmers, local and foreign investors, farmer groups/associations, traders, whole sellers and enter strategic partnerships with serious investors in agri-business including crop, forage and livestock value chains; </li>
                    <li>process and market quality crop, livestock and forest resources at prices that are high enough to meet all production, marketing and management costs along the way making a profit;</li>
                    <li>strategically build young people entrepreneurial, educational, literary and sporting capacities through rural-based institutions.</li>
                </ul>
            </div>
            <div class="col-lg-6 text-center">
                <img src="img/about-us.jpg" alt="About Us Image" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</div>


<!-- Third Section  -->
<div class="ThirdSection text-center">
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Our Vision</h3>
                    <p>To be rated a topmost agribusiness investor with a passion for farm-youth capacity building in Nigeria.</p>
                </div>
                <div class="carousel-item">
                    <h3>Our Mission</h3>
                    <p>To create job and wealth through agri-preneural activities and build capacity of young men and women, and contribute to development of the rural sector of Nigeria.</p>
                </div>
                <div class="carousel-item">
                    <h3>Our Core Values</h3>
                    <ul class="no-li">
                        <li>Teamwork</li>
                        <li>Hard work</li>
                        <li>Integrity</li>
                        <li>Respect</li>
                        <li>System building</li>
                        <li>Dedication to excellence</li>
                        <li>Professionalism</li>
                        <li>Social responsibility</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Fourth Section -->
<div class="FourthSection" data-target="#navbar-example2" data-spy="scroll" id="services">
    <div class="container">
        <h2>What We Do</h2>
        <hr>
        <div class="row">
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box">
                    <i class="fa fa-fish fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Fishery</h4>


                <p class="text-center">
                    We are involved in catfish and tilapia production from fingerlings through juveniles to table size. We also kill, process and package for marketing.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box ">
                    <i class="fa fa-piggy-bank fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Piggery</h4>
                <p class="text-center">
                    We rare and sell live weaners, boars and sows. We also dress pigs into pork for sales in kilo.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box ">
                    <i class="fab fa-hive fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Apiary</h4>
                <p class="text-center">
                    We produce and sell pure honey and wax. We also assits in establishing apiary and construct bee hives.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box ">
                    <i class="fa fa-tractor fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Tractor Operations</h4>
                <p class="text-center">
                    We hire out tractor with different implements for field operations such as ploughing, harrowing and ridging.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box ">
                    <i class="fa fa-bacon fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Livestock</h4>
                <p class="text-center">
                    We rare and supply chicken, turkey, sheep, goat and cattle.
                </p>
            </div>
            <div class="col-md-4 col-sm-6 hover--effect">
                <p class="text-center no--box ">
                    <i class="fa fa-crop fa-5x" style="color: #7dce94;"></i>
                </p>
                <h4 class="text-center">Crop Production & Processing</h4>
                <p>
                    We produce and supply different crops such as cassava, maize (fresh and dried), plantain, cucumber, okro and different varieties of vegetables.
                </p>

            </div>
        </div>

    </div>
</div>

<!-- Activities -->
<div class="Activities">
    <div class="container activity__post">
        <h2>Our Farm Activities</h2>
        <hr>
        <br>

        <div class="row text-center text-lg-left">

            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-1.jpg" alt="Our Farm Activities 1">

            </div>
            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-2.jpg" alt="Our Farm Activities 2">

            </div>
            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-3.jpg" alt="Our Farm Activities 3">

            </div>
            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-4.jpg" alt="Our Farm Activities 4">

            </div>
            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-5.jpg" alt="Our Farm Activities 5">

            </div>
            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/about-us.jpg" alt="Our Farm Activities 6">

            </div>

            <div class="col-md-4 col-sm-6 mb-3">

                <img class="activity__showcase img-thumbnail" src="img/our-farm-activities-7.jpg" alt="Our Farm Activities 7">

            </div>



        </div>

    </div>

</div>

<!-- Fifth Section -->
<div class="FifthSection" data-target="#navbar-example2" data-spy="scroll" id="meet-the-team">
    <div class="container">
        <h2>Meet The Team</h2>
        <hr>
        <br>
        <div class="row text-center">
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/professor-dixon-torimiro.jpg" alt="Tade Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Prof. Dixon Olutade Torimiro <a href="https://www.linkedin.com/in/dixon-olutade-torimiro-8a3b1059/" target="blank"><i class="fab fa-linkedin fa-1x" style="color: #7dce94;"></i></a> </strong>
                <p>Executive Chairman </p>
                <a href="professor-dixon-torimiro.php"><button class="btn btn-outline-success" type="submit">View Full Profile</button></a>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/mojisola-helen-torimiro.jpg" alt="Helen Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Mojisola Helen Torimiro </strong>
                <p>Non-Executive Vice-Chairperson</p>
                <a href="mojisola-helen-torimiro.php"><button class="btn btn-outline-success" type="submit">View Full Profile</button></a>

            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/engineer-wunmi-oloyede.jpg" alt="Lawunmi Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Engr. Wunmi Oloyede</strong>
                <p>Chief Operation Officer</p>
                <a href="engineer-wunmi-oloyede.php"> <button class="btn btn-outline-success" type="submit">View Full Profile</button></a>

            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/samuel-adebayo-oloyede.jpg" alt="Bayo Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Samuel Adebayo Oloyede <a href="https://www.linkedin.com/in/adebayo-oloyede-m-sc-fca-14755a26/" target="blank"><i class="fab fa-linkedin fa-1x" style="color: #7dce94;"></i></a></strong>
                <p>Chief Executive Officer</p>
                <a href="samuel-adebayo-oloyede.php"><button class="btn btn-outline-success" type="submit">View Full Profile</button></a>

            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/hannah-ayoola-torimiro.jpg" alt="Ayoola Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Hannah Ayoola Torimiro <a href="https://www.linkedin.com/in/hannah-ayoola-torimiro-94816878/" target="blank"><i class="fab fa-linkedin fa-1x" style="color: #7dce94;"></i></a></strong>
                <p>Director of farm Operations</p>
                <a href="hannah-ayoola-torimiro.php"><button class="btn btn-outline-success" type="submit">View Full Profile</button></a>

            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <img src="img/samuel-torimiro.jpg" alt="Timilehin Profile Picture" class="img__profiles img-thumbnail">
                <br><br>
                <strong>Samuel Torimiro <a href="https://www.linkedin.com/in/samuel-torimiro" target="blankfa"><i class="fab fa-linkedin fa-1x" style="color: #7dce94;"></i></a></strong>
                <p>Software Engineer</p>
                <a href="samuel-torimiro.php"><button class="btn btn-outline-success" type="submit">View Full Profile</button></a>

            </div>
        </div>

    </div>

</div>


<!-- Sixth Section -->
<div class="SixthSection" data-target="#navbar-example2" data-spy="scroll" id="blog">
    <div class="container SixthSection__content">
        <h2>Our Blog Posts</h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-4">
                <h2><a href="blog/a-guide-to-etablishment-of-an-integrated-farming-system-in-nigeria.php">A Guide to Establishment of an Integrated Farming System in Nigeria</a></h2>
  
                <span class="tag">Farming</span>

                <p>Integrated farming system (IFS) is a cross-linked farming system 
                    involving high-quality production of organic crops, fish, livestock, 
                    apiary, and renewable energy with environmental, economic, social and 
                    intergenerational sustainability.</p>
                <div class="date"><i class="fa fa-calendar fa-1x" style="color: #7dce94;"></i>&nbsp;&nbsp; Aug 9, 2021</div>

            </div>
        </div>

        <br>


        <a href="blog"><button class="btn btn-outline-success blog-button" type="submit">View All Posts</button></a>
    </div>

</div>





<!-- Seventh Section -->
<div class="SeventhSection" data-target="#navbar-example2" data-spy="scroll" id="contact-us">
    <div class="container">
        <h2>Contact Us</h2>
        <hr>
        <br>
        <form action="" method="post">

            <div class="mb-3">
                <label class="form-label">Email address:</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Full Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <label class="form-label">Message:</label>
            <div class="form-floating">
                <textarea class="form-control" name="message" required></textarea>

            </div>
            <br>

            <input type="submit" class="btn btn-outline-success message--button" name="submit" value="Send Message">
        </form>

    </div>
</div>





<?php require_once 'templates/footer.php' ?>