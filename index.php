<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ruben Rosalia">
    <title>Ruben Rosalia</title>
    <script type="module" src="dist/js/main.min.js"></script>
    <link rel="stylesheet" href="dist/css/main.min.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFQPPCM2HR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZFQPPCM2HR');
</script>
</head>
<body>

    <div class="main-container">
        <!-- Navbar -->
    <ul class="navbar padding-horizontal-24">
        <ul class="navbar-logo"><li class="navbar-item"><a href="#" class="navbar-link">Ruben Rosalia</a></li></ul>
            <ul class="navbar-list">
                <li class="navbar-item"><a href="#about" class="navbar-link">About</a></li>
                <li class="navbar-item"><a href="#skills" class="navbar-link">Skills</a></li>
                <li class="navbar-item"><a href="#projects" class="navbar-link">Projects</a></li>
                <li class="navbar-item"><a href="#contact" class="navbar-link">Contact</a></li>
            </ul>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
    </ul>

        <!-- Hidden Menu Content -->
        <div id="menu-content">
        <li class="navbar-item-hidden"><a href="#about" class="navbar-link-hidden">About</a></li>
        <li class="navbar-item-hidden"><a href="#skills" class="navbar-link-hidden">Skills</a></li>
        <li class="navbar-item-hidden"><a href="#projects" class="navbar-link-hidden">Projects</a></li>
        <li class="navbar-item-hidden"><a href="#contact" class="navbar-link-hidden">Contact</a></li>
        </div>

        <!-- About me -->
        <div class="about-me" id="about">
                <h1 class="about-me__name">Ruben Rosalia</h1>
                <p class="about-me__description">Web developer.</p>    
        </div>
        <!-- Skills -->
        <div class="skills padding-horizontal-24 padding-top-50" id="skills">

            <?php
            // DB Connection
            require "auth/config.php";

            // Skills Query
            $skillsQuery = "SELECT * FROM `skills`";

            // Establish Connection
            $resultSkills = mysqli_query($conn, $skillsQuery);

            // loop through results
            while ($row = mysqli_fetch_array($resultSkills)) {
                // get skill name and image
                $skillName = $row["skill"];
                $skillImage = $row["image"];
                $styleID = $row["style_id"];

                // echo skill box
                echo '<div class="skill-box" id="' . $styleID . '">';
                echo '<img src="' .
                    $skillImage .
                    '" class="svg-icon" loading="lazy" alt="skills">';
                echo "<h2>" . $skillName . "</h2>";
                echo "</div>";
            }
            ?>
        </div>
        

         <!-- Projects -->
        <div class="projects padding-horizontal-24 padding-top-50" id="projects">
            <?php
            // Project Query
            $projectQuery = "SELECT * FROM `projects`";

            // Establish Connection
            $resultProject = mysqli_query($conn, $projectQuery);

            // loop through results
            while ($row = mysqli_fetch_array($resultProject)) {
                // fetch project
                $project_image = $row["image"];
                $project_title = $row["title"];
                $project_description = $row["description"];
                $project_source = $row["source_code"];
                $project_url = $row["url"];

                // echo project box
                echo '<div class="project-box">';

                // Thumbnail + Title.
                echo '<img src="' .
                    $project_image .
                    '" class="project-box__thumbnail" loading="lazy" alt="projects">';
                echo '<h2 class="project-box__title">' .
                    $project_title .
                    "</h2>";
                echo '<p class="project-box__description">' .
                    $project_description .
                    "</p>";
                echo '<div class="project-box-buttons__wrapper">';

                // Link.
                echo '<a href="' .
                    $project_url .
                    '" class="project-box__button">';
                echo "<p>Live Site</p>";
                echo '<img src="resources/svg/link.svg" class="project-box__button-svg" loading="lazy" alt="link icon">';
                echo "</a>";

                // Source.
                echo '<a href="' .
                    $project_source .
                    '" class="project-box__button">';
                echo "<p>Code</p>";
                echo '<img src="resources/svg/code.svg" class="project-box__button-svg" loading="lazy" alt="code icon">';
                echo "</a>";

                echo "</div>";

                echo "</div>";
            }
            ?>
        </div>

        <!-- footer -->
        <div class="footer padding-horizontal-24" id="contact">
            <div class="footer-copyright"><p>Ruben Rosalia &copy; <?php echo date(
                "Y"
            ); ?></p></div>
                <div class="footer-socials">
                    <div class="footer-socials__item">
                        <a href="https://www.linkedin.com/in/rubenrosalia/">
                        <img src="resources/svg/linkedin.svg" loading="lazy" alt="LinkedIn">
                        <p>LinkedIn</p>
                        </a>
                    </div>
                    <div class="footer-socials__item">
                        <a href="https://github.com/RubenRosalia">
                        <img  src="resources/svg/github.svg" loading="lazy" alt="Github">
                        <p>Github</p>
                        </a>
                    </div>
                    <div class="footer-socials__item">
                        <a href="mailto:Ruben.Rosalia2002@gmail.com">
                        <img src="resources/svg/mail.svg" loading="lazy" alt="Email">
                        <p>Email</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
