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
                <button>
                    <title>CV</title>
                    <a href="res/lamine-omar-cv.pdf">Resume</a>
                </button>
            </div>
        </nav>
        <div class="hello">
            <div style="transition-delay: 100ms;">
                <h3 class="intro">Hello world! my name is</h3>
            </div>
            <div style="transition-delay: 200ms;">
                <h2 class="my-name">Lamine Omar</h2>
            </div>
            <div style="transition-delay: 300ms;">
                <h1 class="job">I'm a Full Stack Developper.</h1>
            </div>
            <div style="transition-delay: 400ms;">
                <p>
                    currently I study computer science in Ibn Zohr University, I'm looking forward to start a career in web developpement.
                </p>
            </div>
        </div>
    </header>
    <div orientation="right" class="right">
        <div class="email">
            <a href="mailto: <?php echo $proemail; ?>"><?php echo $proemail; ?></a>
        </div>
    </div>
    <div orientation="left" class="left">
        <ul class="socials">
            <li>
                <a href="<?php echo $github; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                        <title>GitHub</title>
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?php echo $instagram; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                        <title>Instagram</title>
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?php echo $linkedin; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                        <title>LinkedIn</title>
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?php echo $stackoverflow; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack-overflow" viewBox="0 0 16 16">
                        <title>StackOverFlow</title>
                        <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z" />
                        <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?php echo $codepen; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen">
                        <title>CodePen</title>
                        <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon>
                        <line x1="12" y1="22" x2="12" y2="15.5"></line>
                        <polyline points="22 8.5 12 15.5 2 8.5"></polyline>
                        <polyline points="2 15.5 12 8.5 22 15.5"></polyline>
                        <line x1="12" y1="2" x2="12" y2="8.5"></line>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <section id="about">
        <div class="container">
            <h2 class="numbered-heading">About Me</h2>
            <div class="inner">
                <div>
                    <div>
                        <p>Hello! My name is <a href="http://www.thinkbabynames.com/meaning/1/Omar" target="_blank">Omar</a> and I enjoy creating things that live on the internet. My interest in web development started back in 2012 when I decided to try editing custom Tumblr themes — turns out hacking together a custom reblog button taught me a lot about HTML &amp; CSS!</p>
                        <p>Fast-forward to today, and I’ve had the privilege of working at <a href="https://us.mullenlowe.com/" rel="noopener noreferrer" target="_blank">an advertising agency</a>, <a href="https://starry.com/" rel="noopener noreferrer" target="_blank">a start-up</a>, <a href="https://www.apple.com/" rel="noopener noreferrer" target="_blank">a huge corporation</a>, and <a href="https://scout.camd.northeastern.edu/" rel="noopener noreferrer" target="_blank">a student-led design studio</a>. My main focus these days is building accessible, inclusive products and digital experiences at <a href="https://upstatement.com/" rel="noopener noreferrer" target="_blank">Upstatement</a> for a variety of clients.</p>
                        <p>I also recently <a href="https://www.newline.co/courses/build-a-spotify-connected-app" rel="noopener noreferrer" target="_blank">launched a course</a> that covers everything you need to build a web app with the Spotify API using Node &amp; React.</p>
                        <p>Here are a few technologies I’ve been working with recently:</p>
                    </div>
                    <ul class="skills-list">
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Java</li>
                        <li>MySQL</li>
                        <li>Node.js</li>
                        <li>WordPress</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="work"></section>
    <section id="contact">
        <div class="container">
            <h2 class="numbered-heading overline">What’s Next?</h2>
            <h2 class="title">Get In Touch</h2>
            <p>Although I’m not currently looking for any new opportunities, my inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!</p>
            <button class="email-link">
                <a href="mailto:<?php echo $proemail; ?>" rel="noopener noreferrer" target="_blank">Say Hello</a>
            </button>
        </div>
    </section>
    <footer></footer>
</body>

</html>