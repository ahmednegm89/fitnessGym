<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $useremail =  $_POST['useremail'];
  $userpass =  $_POST['userpass'];
  $username =  $_POST['username'];
  $userphone =  $_POST['userphone'];
  $user_id = random_num(11);
  $query = "insert into users (user_id,username,useremail,userpass,userphone) values ('$user_id','$username','$useremail','$userpass','$userphone') ";
  mysqli_query($conn, $query);
  header("Location: login.php");
  die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Gym</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- style sheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="https://i.pinimg.com/originals/f6/21/81/f62181c448fb37f2f57da69efac19d5d.png">
</head>

<body>
  <header class="header-section">
    <div class="container-me">
      <div class="logo">
        <i class="fa-solid fa-dumbbell"></i>
        <h1>Fitness Gym</h1>
      </div>
      <div class="menu-icon">
        <i class="fa fas fa-bars"></i>
      </div>
      <nav class="nav-bar">
        <ul>
          <li><a class="link" href="#">Home</a></li>
          <li><a class="link" href="#gallery">Gallery</a></li>
          <li><a class="link" href="#plans">Plans</a></li>
          <li><a class="link" href="#health">Health</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="landing">
    <div class="container-me">
      <div class="content">
        <h1>It's time to train!</h1>
        <div class="landing-btn">
          <a class="one" href="#gallery">Read More</a>
          <a class="two" href="#footer-form">Join Us</a>
        </div>
        <p>WELCOME TO THE Fitness Gym. IT'S WHERE CONFIDENCE GROWS. IT'S WHERE GREATNESS LIVES. IT'S WHERE LEGACIES ARE BUILT. AND THEY aRE BUILT EVERY SINGLE DAY.</p>
      </div>
      <div class="landing-img">
        <img class="landing-img" src="images/50d2ad92284b705b57165f77affa7cc4.png" alt="Sport">
      </div>
    </div>
  </section>
  <!-- GALLERY -->
  <section id="gallery" class="gallery">
    <h2 class="gallery-title">Gallery</h2>
    <div class="container-me">
      <div class="mySlider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/jsbjssds.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/s-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/jsbjs.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/jsbjssds11d212.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/s-04.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <div class="sdasd">

  </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <!-- Start Plans -->
  <section class="plans" id="plans">
    <h2 class="plans-title">Our pircing plan</h2>
    <div class="container-me">
      <div class="plan plan-one">
        <h2>Basic Plan</h2>
        <h1>$90</h1>
        <ul>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>5 days in week</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 sweatshirt</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 bootle of protein</p>
          </li>
          <li class="cancel">
            <i class="fa far fa-xmark-circle"></i>
            <p>Access to videos</p>
          </li>
          <li class="cancel">
            <i class="fa far fa-xmark-circle"></i>
            <p>Muscle stretching</p>
          </li>
        </ul>
        <a href="#footer-form">Join Us</a>
      </div>
      <div class="plan plan-two">
        <h2>Weekly Plan</h2>
        <h1>$110</h1>
        <ul>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>5 days in week</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 sweatshirt</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 bootle of protein</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>Access to videos</p>
          </li>
          <li class="cancel">
            <i class="fa far fa-xmark-circle"></i>
            <p>Muscle stretching</p>
          </li>
        </ul>
        <a href="#footer-form">Join Us</a>
      </div>
      <div class="plan plan-3">
        <h2>Monthly Plan</h2>
        <h1>$380</h1>
        <ul>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>5 days in week</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 sweatshirt</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>01 bootle of protein</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>Access to videos</p>
          </li>
          <li>
            <i class="fa far fa-check-circle"></i>
            <p>Muscle stretching</p>
          </li>
        </ul>
        <a href="#footer-form">Join Us</a>
      </div>
    </div>
  </section>
  <!-- End Plans -->

  <section class="calculator" id="health">
    <div class="img">
      <img src="images/svg.png" alt="svg">
    </div>
    <h2 class="title">Calories Calculator</h2>
    <div class="container-me">
      <form method="post" action="" class="cal-form">
        <div class="cal-inputs age">
          <label for="age">Age : </label>
          <input type="range" name="ageInput" id="ageInput" min="1" max="100" />
        </div>
        <div class="cal-result age">
          <input type="text" name="ageResult" id="ageResult" value="30" />
          <label for="ageResult">Years</label>
        </div>

        <div class="cal-inputs high">
          <label for="high">High : </label>
          <input type="range" name="highInput" id="highInput" min="100" max="250" />
        </div>
        <div class="cal-result high">
          <input type="text" name="highResult" id="highResult" value="170" />
          <label for="highResult">Cm</label>
        </div>

        <div class="cal-inputs weight">
          <label for="high">weight : </label>
          <input type="range" name="weightInput" id="weightInput" min="1" max="250" />
        </div>
        <div class="cal-result weight">
          <input type="text" name="weightResult" id="weightResult" value="70" />
          <label for="weightResult">Kg</label>
        </div>
        <select name="gender" id="gender-selection" required>
          <option value="">Gender :</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
        <select name="activity" id="activity-selection" required>
          <option value="" id="low-active">Select your activity level</option>
          <option value="1" id="low-active">Low Active</option>
          <option value="2" id="mid-active">Mid Active</option>
          <option value="3" id="active">Active</option>
          <option value="4" id="high-active">High Active</option>
        </select>
        <input type="submit" value="Calculate" class="cal-btn" />
      </form>
      <!-- result -->
      <div class="cal-show">
        <div class="main-cal">
          <h2 class="main-h2">
            Your calories is : <span class="main-span"></span>
          </h2>
        </div>
        <div class="loss">
          <div class="maintain">
            <div class="maintain-text">
              <h5>Maintain Weight</h5>
            </div>
            <div class="maintain-num">
              <h5 class="maintainNum"></h5>
            </div>
          </div>
          <div class="mild">
            <div class="mild-text">
              <h5>Mild weight loss</h5>
            </div>
            <div class="mild-num">
              <h5 class="mildNum"></h5>
            </div>
          </div>
          <div class="weight-loss">
            <div class="weight-text">
              <h5>Weight loss</h5>
            </div>
            <div class="weight-num">
              <h5 class="weightNum"></h5>
            </div>
          </div>
          <div class="extreme">
            <div class="extreme-text">
              <h5>Extreme weight loss</h5>
            </div>
            <div class="extreme-num">
              <h5 class="extremeNum"></h5>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End Result -->
  <section class="tools-section">
    <h2 class="tools-title">Top and low 5 foods in calories</h2>
    <div class="container-me">
      <!-- table -->
      <table class="top5 table">
        <tr>
          <th>Top 5 foods high in calories</th>
        </tr>

        <tr>
          <td class="spcial">Name</td>
          <td class="spcial">Quantity</td>
          <td class="spcial">Calories</td>
        </tr>

        <tr>
          <td>
            <img src="images/oat.png" alt="oats">
            Oats
          </td>
          <td>100g</td>
          <td>389cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/meat.png" alt="meat">
            Meats
          </td>
          <td>100g</td>
          <td>288cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/bread.png" alt="bread">
            Bread
          </td>
          <td>100g</td>
          <td>265cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/eggs.png" alt="eggs">
            Eggs
          </td>
          <td>100g</td>
          <td>155cal</td>
        </tr>


        <tr>
          <td>
            <img src="images/rice-bowl.png" alt="rice">
            Rice
          </td>
          <td>100g</td>
          <td>130cal</td>
        </tr>
      </table>

      <table class="low5 table">
        <tr>
          <th>low 5 foods in calories</th>
        </tr>

        <tr>
          <td class="spcial">Name</td>
          <td class="spcial">Quantity</td>
          <td class="spcial">Calories</td>
        </tr>

        <tr>
          <td>
            <img src="images/potato.png" alt="potato">
            Potatoes
          </td>
          <td>100g</td>
          <td>77cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/greek-yogurt.png" alt="greek">
            Yogurt
          </td>
          <td>100g</td>
          <td>59cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/berries.png" alt="berries">
            Berries
          </td>
          <td>100g</td>
          <td>57cal</td>
        </tr>

        <tr>
          <td>
            <img src="images/apple.png" alt="apples">
            Apples
          </td>
          <td>100g</td>
          <td>52cal</td>
        </tr>


        <tr>
          <td>
            <img src="images/milk-bottle.png" alt="milk">
            Milk
          </td>
          <td>100g</td>
          <td>42cal</td>
        </tr>

      </table>
    </div>
  </section>

  <section class="exercises">
    <h2 class="exercises-tilte">Exercises</h2>
    <p style="text-align: center;">They all consist of four sets (each set 12-15 reps)</p>
    <div class="container-me">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Feet up crunch</h5>
              <p>They target the rectus abdominis</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/2.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Jump lunges</h5>
              <p>Jumping lunges are an effective leg exercise for strengthening the primary muscle groups in your lower body, including your hip flexors, glutes, calves, hamstrings, and quads.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/3.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Hollow body hold rock</h5>
              <p>The hollow body hold is an excellent move for targeting the transverse abdominis, rectus abdominis, obliques, quads, hip flexors, inner thighs, and erector spinae muscles.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/4.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Goblet Squat</h5>
              <p>Similar to other squatting movements, goblet squats mainly work the quads and glutes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/5.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Squat</h5>
              <p>The Squat exercise mainly targets the thighs (quadriceps & hamstrings) and the glutes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/6.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mountain climbers</h5>
              <p>Mountain climbers target many major muscle groups, including the abs, lower back, hamstrings and glutes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/7.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bicycle Crunch</h5>
              <p>The bicycle crunch primarily targets your rectus abdominis muscle, the upper abs known as the six-pack muscle.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/8.gif" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Jump Squat</h5>
              <p>The jump squat targets the glutes, quads, hips, and hamstrings</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Start Footer -->
  <footer>
    <div class="container-me">
      <div class="top">
        <div class="quick-links">
          <h2>Quick Links</h2>
          <a href="#plans">All Plans</a>
          <a href="#gallery">Our Gallery</a>
        </div>
        <div class="about">
          <h2>About</h2>
          <a href="">Company</a>
          <a href="coach_login.php">Carrers</a>
          <a href="">Contact</a>
          <a href="">Help center</a>
        </div>
        <div class="legal">
          <h2>Legal</h2>
          <a href="">Imprint</a>
          <a href="">Privacy Policy</a>
          <a href="">Terms and Conditions</a>
          <a href="">Licenses</a>
          <a href="">Privacy Settings</a>
        </div>
        <form action="" method="post" id="footer-form">
          <input type="text" name="username" placeholder="Name" required />
          <input type="email" name="useremail" placeholder="Email" required />
          <input type="password" name="userpass" placeholder="Password" required />
          <input type="text" name="userphone" placeholder="phone" maxlength="11" required />
          <input type="submit" name="submit" value="Signup" />
          <a href="login.php">log in</a>
        </form>
      </div>
      <div class="follow-us">
        <h5>Follow Us</h5>
        <i class="fa fab fa-facebook"></i>
        <i class="fa fab fa-instagram"></i>
        <i class="fa fab fa-twitter"></i>
        <i class="fa fab fa-youtube"></i>
        <p>
          &copy; Copyright 2022
          <span style="color: #faba22">Fitness Gym</span>
        </p>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <script src="js/main.js"></script>
</body>

</html>