<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Contact Us</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Artifika" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header_state.js" defer></script>
    <script src="../assets/js/page_config.js" defer></script>
    <script src="../assets/js/contact_form.js" defer></script>
  </head>

  <body>

    <!-- div to display a fixed backgound behind content -->
    <div id="fixed-background"></div>

    <!-- div to display the banner at the top of the page -->
    <div id="banner"></div>

    <header id="head">
      <div class="wrapper">
        <a id="home-link" href="../">
          <img src="../assets/img/logo.png" alt="logo image" />
          <h1>IndieQuest</h1>
        </a>
        <ul id="top-nav">
          <?php include ('../assets/php/header_journey_link.php'); ?>
          <li><a id="contact-link" href="../contact/">Contact</a></li>
          <li id="profile-icon"><img id="profile-link" src="../assets/img/profile.svg" onclick="toggleForm()" alt="profile" /></li>
        </ul>
      </div>
    </header>

    <div id="page-wrapper" class="contact">

      <!-- Profile Popup -->
      <?php include ('../assets/php/profile_popup.php'); ?>

      <div id="left">
        <article>
          <h1>Contact Us</h1>
          <p id="ajax_container">
            If you have feedback or questions about the dungeon, send us a
            direct message here!
          </p>
          <form id="contact-form" method="POST">
            <section>
              <label>Username: <input type="text" id="user" name="c_username" placeholder="Enter Username Here" required /></label>
              <label>Email: <input type="text" id="email" name="c_email" placeholder="example@email.com" required /></label>
              <label>Title: <input type="text" id="title" name="c_subject" placeholder="Title of Your Feedback" required /></label>
              <label>Feedback: <textarea id="feedback" name="c_feedback" placeholder="Enter Feedback Here" required></textarea></label>
              <div class="buttons">
                <input class="btn" type="button" onclick="ajaxFunction()" value="Submit"/>
                <button class="btn" type="reset" onclick="resetForm()">Clear</button>
              </div>
            </section>
          </form>
        </article>
      </div>

      <div id="center">
        <article>
          <h1>Who We Are</h1>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-alexia.jpg" alt="Alexia Avatar" />
            <h2>Alexia Carmona</h2>
            <p>
              Alexia is a senior Arts and Entertainment technologies student
              who studies at the University of Texas at Austin.
            </p>
            <p>
              Her main focus is becoming a video game artist as well as having
              a background in computer science languages, such as Python, HTML, and Javascript.
              She has experience in developing games by creating character art, UI art, and environment art for multiple games.
            </p>
            <nav>
              <a class="btn" href="https://www.linkedin.com/in/alexia-carmona-bb1240181/">LinkedIn</a>
              <a class="btn" href="https://www.lexc-draws.com/">Portfolio</a>
              <a class="btn" href="mailto:carmona.m.alexia@gmail.com">Email</a>
            </nav>
          </section>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-cooper.jpg" alt="Cooper Avatar" />
            <h2>Cooper Fryar</h2>
            <p>
              Majoring in Arts and Entertainment Technologies at The University
              of Texas at Austin for the purpose of Game Development. This
              Major allows the student to explore all aspects of game
              development from coding to business to art and audio.
              Has experience teaching Data Analytics including Excel, Python,
              Tableau, and PostgreSQL.
            </p>
            <nav>
              <a class="btn" href="https://github.com/CooperFryar">GitHub</a>
              <a class="btn" href="mailto:cooperfryar@gmail.com">Email</a>
              <!-- <a href="">LinkedIn</a> -->
            </nav>
          </section>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-tyler.jpg" alt="Tyler Avatar" />
            <h2>Tyler Wittig</h2>
            <p>
              Software Developer and student at The University of Texas at
              Austin, with experience in Web Programming, Game Development,
              Data Analytics, Audio and Image Design, and an extensive
              background in Mathematics.
            </p>
            <nav>
              <a class="btn" href="https://twit96.github.io/">Portfolio</a>
              <a class="btn" href="https://github.com/twit96">GitHub</a>
              <a class="btn" href="mailto:tylerwittig@utexas.edu">Email</a>
            </nav>
          </section>

        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>
