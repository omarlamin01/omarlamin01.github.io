<?php
    include "private/bookmark.php";

    //get visitors data
    $vis_ip = getVisIpAddr();

    $api_key = "f538e982897e48af8238f0afc7ca2b80";

    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocation.io/ipgeo?apiKey=".$api_key."&ip=102.78.233.144");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);
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
                    <li class="nav-link"><a href="#about">About me</a></li>
                    <li class="nav-link"><a href="#work">Work</a></li>
                    <li class="nav-link"><a href="#contact">Contact</a></li>
                </ul>
                <button>
                    <title>CV</title>
                    <a href="res/lamine-omar-cv.pdf">Resume</a>
                </button>
            </div>
            <div class="toggle">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
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

    <section id="work">
        <div class="container">
            <h2 class="numbered-heading" data-sr-id="3" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s, transform 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s;">Some Things I’ve Built</h2>
            <div class="cards-wrapper">
                <div class="card-grid-space">
                    <div class="num">01</div>
                    <a class="card" href="<?php echo $prj1_link; ?>" style="--bg-img: url(https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)">
                        <div>
                            <h1><?php echo $prj1_title; ?></h1>
                            <p><?php echo $prj1_description; ?></p>
                            <div class="date"><?php echo $prj1_date; ?></div>
                            <div class="tags">
                                <div class="tag">PHP</div>
                                <div class="tag">CSS</div>
                                <div class="tag">JS</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-grid-space">
                    <div class="num">02</div>
                    <a class="card" href="<?php echo $prj2_link; ?>" style="--bg-img: url('https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/basic-types-of-html-tags/cover.jpg')">
                        <div>
                            <h1><?php echo $prj2_title; ?></h1>
                            <p><?php echo $prj2_description; ?></p>
                            <div class="date"><?php echo $prj2_date; ?></div>
                            <div class="tags">
                                <div class="tag">HTML</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-grid-space">
                    <div class="num">03</div>
                    <a class="card" href="<?php echo $prj3_link; ?>" style="--bg-img: url('https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/links-images-about-file-paths/cover.jpg')">
                        <div>
                            <h1><?php echo $prj3_title; ?></h1>
                            <p><?php echo $prj3_description; ?></p>
                            <div class="date"><?php echo $prj3_date; ?></div>
                            <div class="tags">
                                <div class="tag">HTML</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="show-link">
            <a href="all-projects.php" aria-label="Course Link" rel="noopener noreferrer" target="_blank">Show More</a>
            </div>
        </div>
    </section>

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

    <section>
        <?php
            echo "your ip: " . UserInfo::get_ip() . "<br>";
            echo "your os: " . UserInfo::get_os() . "<br>";
            echo "your browser: " . UserInfo::get_browser() . "<br>";
            echo "your device type: " . UserInfo::get_device() . "<br>";
        
            echo "<br>";
            echo "Country name: " . ip_info("Visitor", "Country") . "<br>"; // India
            echo "Country code: " . ip_info("Visitor", "Country Code") . "<br>"; // IN
            echo "State name: " . ip_info("Visitor", "State") . "<br>"; // Andhra Pradesh
            echo "City name: " . ip_info("Visitor", "City") . "<br>"; // Proddatur
            echo "Visitor address" . ip_info("Visitor", "Address") . "<br>"; // Proddatur, Andhra Pradesh, India
            print_r(ip_info("Visitor", "Location")) . "<br>"; // Array ( [city] => Proddatur [state] => Andhra Pradesh [country] => India [country_code] => IN [continent] => Asia [continent_code] => AS )
    
            $user_data = @json_decode($output);
            echo "<br>";
            echo "Country name: " . $user_data->country_name . "<br>";
            echo "Region name: " . $user_data->state_prov . "<br>";
            echo "City name: " . $user_data->city . "<br>";
            echo "Service provider: " . $user_data->isp . "<br>";
        ?>
    </section>

    <footer>
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
                    <a href="<?php echo $behance; ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                            <title>Behance</title>
                            <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
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
    </footer>

    <script>

        var toggle_button = document.getElementsByClassName('toggle')[0];
        var links = document.getElementById('links');
        var body = document.body;
        var nav_links = document.getElementsByClassName("nav-link");

        toggle_button.addEventListener("click" , function(evt) {
            toggle_button.classList.toggle('open');
            links.classList.toggle('show');
            body.classList.toggle('no-scroll')
        })

        for(var i = 0; i < nav_links.length; i++) {
            nav_links[i].addEventListener("click" , function(evt) {
            toggle_button.classList.toggle('open');
            links.classList.toggle('show');
            body.classList.toggle('no-scroll')
        })
        }

    </script>
</body>

</html>