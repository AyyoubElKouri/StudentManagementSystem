<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
        crossorigin="anonymous"
    >
</head>
<body>
    <!-- Start Navbar -->
    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <!-- End Navbar -->

    <!-- Start section 1 -->
    <div class="section1">
        <label class="img-text">We Teach Students With Car</label>
        <img class="main-img" src="assets/school.png" alt="Error">
    </div>
    <!-- End section 1 -->

    <!-- Start container section -->
    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="welcome-img" src="assets/playground.jpg" alt="Error">

            </div>

            <div class="col-md-8">

                <h1>Welcome to W-School</h1>
                <p>
                    School is a place where learning begins and dreams take shape. It is a second home where students grow not only in knowledge but also in character. Every hallway, classroom, and playground is filled with opportunities to explore, create, and connect with others.

                    At our school, we believe in kindness, respect, and the power of education. Teachers guide, friends support, and each day brings something new to discover. Whether it's reading a new book, solving a tough math problem, or playing a team sport, every experience helps build a brighter future.

                    Welcome to a place where everyone belongs, and every student has the chance to shine.
                </p>
            </div>

        </div>

    </div>
    <!-- End container section -->

    <!-- Start Teacher section -->
    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="teacher" src="assets/teacher1.png" alt="Error">
                <p class="teacher-infos">
                    Welcome to a new school year in Ms. Johnson’s class! Get ready for exciting lessons, creative projects, and a lot of fun learning. Ms. Johnson believes that every student can succeed and that learning should be both challenging and enjoyable. In this classroom, you are encouraged to ask questions, think deeply, and always do your best. Let’s make this year amazing together!
                </p>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="assets/teacher2.png" alt="Error">
                <p class="teacher-infos">
                    Step into the world of science with Mr. Smith! This year, you’ll explore the wonders of nature, conduct experiments, and discover how the world around you works. Mr. Smith loves curiosity and teamwork, and he’s here to guide you through every step of your learning journey. Get ready to observe, experiment, and have fun with science!
                </p>
            </div>

            <div class="col-md-4">

                <img class="teacher" src="assets/teacher3.png" alt="Error">
                <p class="teacher-infos">
                    Mrs. Davis is excited to welcome you to her English class! This is the place where stories come alive, words matter, and your voice is important. Whether you’re writing essays, reading novels, or performing plays, Mrs. Davis will help you build strong language skills and confidence. Let’s read, write, and grow together this year!
                </p>

            </div>

        </div>

    </div>
    <!-- End Teacher section -->

    <!-- Start Courses section -->
    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="teacher" src="assets/graphic_design.png" alt="Error">

                <h3 class="course-title">Graphic Design</h3>

                <p class="teacher-infos">
                    Graphic design communicates ideas through visuals, colors, and typography.
                    It blends creativity and function to make messages stand out.
                </p>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="assets/digital_marketing.png" alt="Error">

                <h3 class="course-title">Digital Marketing</h3>

                <p class="teacher-infos">
                    Digital marketing connects brands with people through social media, email, and online ads.
                    It’s all about strategy, creativity, and understanding your audience.
                </p>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="assets/web_development.png" alt="Error">
                <h3 class="course-title">Web Development</h3>
                <p class="teacher-infos">
                    Web development is the art of building websites and web apps that power the internet.
                    From code to design, it brings ideas to life online.
                </p>

            </div>

        </div>

    </div>
    <!-- End Courses section -->


    <!-- Start form section -->
    <center>
        <h1>Admission Form</h1>
    </center>

    <div align="center" class="admission-form">

        <form>

            <div class="input-groupe">
                <label class="label-text">Name</label>
                <input class="input-text" type="text" placeholder="Enter your name">
            </div>

            <div class="input-groupe">
                <label class="label-text">Email</label>
                <input class="input-text" type="text">
            </div>

            <div class="input-groupe">
                <label class="label-text">Phone</label>
                <input class="input-text" type="text">
            </div>

            <div class="input-groupe">
                <label class="label-text">Message</label>
                <textarea class="input-message"></textarea>
            </div>

            <div>
                <input class="btn btn-primary submit" value="Apply" type="submit">
            </div>
        </form>

    </div>
    <!-- End form section -->

    <!-- Start footer section -->
    <footer>
        <h4>All @copyright reserved by Ayyoub EL KOURI</h4>
    </footer>
    <!-- End footer section -->

</body>
</html>