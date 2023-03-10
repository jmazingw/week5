<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
    <title>JM's Personal Profile</title>
    <link rel = "icon" href = "my logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  </head>
  <body>

    <script>
  setTimeout(function() {
    var icon = document.querySelector(".notif");
    var notification = document.querySelector("#notification-id");
    icon.classList.add("notification-dot");
    icon.addEventListener("click", function() {
      if(notification.style.display === "block"){
      notification.style.display = "none";
      icon.classList.remove("notification-dot");
      } else{
      notification.style.display = "block";
      }
    });
  }, 600);
   </script>

    <div class="profile-card">
      <div class="top-section">
        <a href="http://apcwebprog.csf.ph/~jdgonzales2/week5/resources.html" target="_self"><i class="message fas fa-bookmark"></i></a>
        <i class="notif fas fa-bell"></i>
        <div id="notification-id">Welcome to my profile, nice to meet you!</div>
        <div class="pic">
          <img src="ako.png" alt="Your handsome boy">
        </div>
        <div class="name">John Michael Gonzales</div>
        <div class="tag">@jmazingw</div>
      </div>

      <div class="bottom-section">
        <div class="social-media">
          <a href="https://www.linkedin.com/in/jmazingonzales"><i class="fab fa-linkedin"></i></a>
          <a href="https://twitter.com/esoteric_jm"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/esoteric_jejune"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com/jmazingw"><i class="fab fa-github-square"></i></a>
        </div>

        <div class=""> 20<span>years old</span></div>
        <div class="border"></div>
        <div class="">BSCS SF211<span> Cybersecurity Forensics</span></div>
        <div class="border"></div>
        <div class="">2nd Year<span>Asia Pacific College</span></div>
      </div>
      <button id="reveal-button">Reveal Video</button>
        <div id="video-container" style="display:none">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/videoseries?list=PLkrzfEDjeYJl6PPdoA-7_SNea5ORS9hPh" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <form action="submit.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea><br><br>
          <label for="class_section">Class Section:</label>
          <input type="text" id="class_section" name="class_section" required><br><br>
          <input type="submit" value="Submit">
        </form>
        <script>
          var revealButton = document.getElementById('reveal-button');
          var videoContainer = document.getElementById('video-container');

          revealButton.addEventListener('click', function() {
            videoContainer.style.display = 'block';
            revealButton.style.display = 'none';
            });
        </script>
    </div>
  </body>
</html>