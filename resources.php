<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JM's Resources Profile</title>
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
        <a href="http://apcwebprog.csf.ph/~jdgonzales2/week5/" target="_self"><i class="message fas fa-backspace"></i></a>
        <i class="notif fas fa-bell"></i>
        <div id="notification-id">This is my resources page!</div>
        <div class="pic">
          <img src="resources.jpg" alt="Your handsome boy">
        </div>
        <div class="name">My Resources</div>
        <div class="tag">The Journey</div>
      </div>

      <div class="bottom-section">
        <div class="social-media">
          <a href="https://www.w3schools.com/css/default.asp"><i class="fab fa-css3"></i></a>
          <a href="https://www.w3schools.com/html/default.asp"><i class="fab fa-html5"></i></a>
          <a href="https://github.com/jmazingw"><i class="fab fa-github-square"></i></a>
        </div>

        <div class=""> W3<span>Schools</span></div>
        <div class="border"></div>
        <div class="">CSS and HTML<span> Lessons</span></div>
        <div class="border"></div>
        <div class="">100%<span>VS Code</span></div>
      </div>
    </div>
  </body>
</html>