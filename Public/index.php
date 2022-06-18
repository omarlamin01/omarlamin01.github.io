<?php
require "import_setting.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo $icon_path ?>">
    <link rel="stylesheet" href="styles/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <header id="home">
        <nav>
            <div id="logo">
                <a href="#home">
                    <img src="<?php echo $logo_path; ?>" alt="my logo" height="60px">
                    <span>Lamine Omar</span>
                </a>
            </div>    
            <div id="links">
                <ul>
                    <li><a href="#about">About me</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button>Resume</button>
                <i id="toggle"></i>
            </div>    
        </nav>
    </header>
    <div class="right">
        <a href="mailto: contactomarlamine1@gmail.com">contactomarlamine1@gmail.com</a>
    </div>
    <div class="left">
        <ul>
            <li>
                <a href="">
                    <i></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i></i>
                </a>
            </li>
        </ul>
    </div>
    <section id="about"></section>
    <section id="work"></section>
    <section id="contact"></section>
    <footer></footer>
</body>

</html>