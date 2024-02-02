<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ruben Rosalia">
    <title>Ruben Rosalia</title>
    <script type="module" src="dist/js/main.min.js"></script>
    <link rel="stylesheet" href="dist/css/main.min.css">
</head>
<body>

    <div class="#">
        <!-- Navbar -->
    <ul class="navbar padding-horizontal-24">
        <ul class="navbar-logo"><li class="navbar-item"><a href="#" class="navbar-link">Ruben Rosalia</a></li></ul>
            <ul class="navbar-list">
            <li class="navbar-item-hidden"><a href="#about" class="navbar-link-hidden">Project management</a></li>
            <li class="navbar-item-hidden"><a href="#about" class="navbar-link-hidden">Skill management</a></li>
            </ul>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
    </ul>

        <!-- Hidden Menu Content -->
        <div id="menu-content">
        <li class="navbar-item-hidden"><a href="#about" class="navbar-link-hidden">Project-management
        </a></li>
        <li class="navbar-item-hidden"><a href="#about" class="navbar-link-hidden"> Skill-management</a></li>
        </div>

        <!-- About me -->
        <div class="about-me" id="about">
        </div>
    </div>
</body>
</html>
