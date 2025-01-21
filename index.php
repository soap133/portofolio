<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <style>
    /* Basic CSS for styling */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }
    header {
      background: #333;
      color: #fff;
      padding-top: 30px;
      min-height: 70px;
      border-bottom: #77aaff 3px solid;
    }
    header h1 {
      text-align: center;
      margin: 0;
      font-size: 36px;
    }
    header p {
      text-align: center;
      font-size: 18px;
    }
    section {
      padding: 20px 0;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .project {
      background: #fff;
      padding: 20px;
      margin: 10px 0;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .btn {
      display: inline-block;
      background: #77aaff;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
    }
    .btn:hover {
      background: #5599ff;
    }
    footer {
      background: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1><?php echo "John Doe"; ?></h1>
      <p><?php echo "Web Developer & Designer"; ?></p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <h2>About Me</h2>
      <p><?php echo "Hi, I'm John Doe, a passionate web developer with experience in HTML, CSS, JavaScript, and PHP. I love creating beautiful and functional websites."; ?></p>
    </div>
  </section>

  <section id="projects">
    <div class="container">
      <h2>Projects</h2>
      <?php
      // Example project data
      $projects = [
        [
          "title" => "Project 1: Personal Blog",
          "description" => "A responsive blog built with HTML, CSS, and PHP.",
          "link" => "#"
        ],
        [
          "title" => "Project 2: E-commerce Website",
          "description" => "An online store built with PHP and MySQL.",
          "link" => "#"
        ]
      ];

      // Loop through projects and display them
      foreach ($projects as $project) {
        echo '<div class="project">';
        echo '<h3>' . $project['title'] . '</h3>';
        echo '<p>' . $project['description'] . '</p>';
        echo '<a href="' . $project['link'] . '" class="btn">View Project</a>';
        echo '</div>';
      }
      ?>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <form action="submit.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> John Doe. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
