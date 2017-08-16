<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/8ee79878e7.js"></script>
    </head>
    <body>
        <?php
        if(isset($_POST)){
            $var_email = $_GET['email'];
        $dbParams = array (
		  'hostname' => 'localhost',
		  'username' => 'root',
		  'password' => '',
		  'database' => 'cvdatabase'
		);
		$mysqli = new mysqli($dbParams['hostname'], $dbParams['username'], $dbParams['password'], $dbParams['database']);
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		}	
        $query = "SELECT * FROM toplayer where email ='$var_email'"; 
        $result = $mysqli->query($query);  
        $row = mysqli_fetch_array($result);
        
        }
        else
            echo "no user found";
       
?>
        
        
        
        <section id="cv">
            <section id="profile">
                <section id="intro">
                    <img src="sponge.jpg" width="100" length="100"/>
                    <header>
                        <h1><?php echo $row['firstname']; ?></h1>
                        <h2><?php echo $row['lastname']; ?></h2>
                        <h3><?php echo $row['title']; ?></h3>
                    </header>
                    
                    <section id="about">
                        <section id="contact-info">
                            <ul>
                                <Li>Phone:</Li>
                                <Li>Area:</Li>
                                <Li>Email:</Li>
                            </ul>
                            <ul>
                                <Li><?php echo $row['phone']; ?></Li>
                                <Li><?php echo $row['address']; ?></Li>
                                <Li><?php echo $row['email']; ?></Li>
                            </ul>
                        
                        </section>
                        <article>
                            <h1>About Me</h1>
                            <p>
                                I live in Bikini Bottom. 
                                <br>
                                I work at the Krusty Crab as a shef. 
                            </p>
                        </article>
                    </section>
                </section>
                <ul id="social-networks">
                    <li>
                        <i class="fa fa-facebook"></i>
                        <a href="#">Facebook</a>
                    </li>
                    <li>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <i class="fa fa-skype" aria-hidden="true"></i>
                        <a href="#">Skype</a>
                    </li>
                    <li>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <a href="#">Instagram</a>
                    </li>
                    <li>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        <a href="#">YouTube</a>
                    </li>
                
                </ul>
            </section>
        </section>
        
        <section id="cv2">  
            <section id="white"> 
                <section id="experience">
                    <h1> experience</h1>
                
                
                </section>
                
                <section id="extension">
                    <h1> hello</h1>
                
                </section>
            
            
            </section>
            <section id="skills">
            
                <section id="pro">
                    <h1> PRO SKILLS</h1>
                    <section id="line">
                        <h4>Photoshop</h4>
                        <h4>Photoshop</h4>
                        <h4>Photoshop</h4>
                        <h4>Photoshop</h4>
                    </section>
                    <section id="bar">
                        <div class="progress-container round-xlarge">
                        <div class="progressbar round-xlarge" style="width:80%"></div>
                        </div>

                        <div class="progress-container round-xlarge">
                        <div class="progressbar round-xlarge" style="width:80%"></div>
                        </div>

                        <div class="progress-container round-xlarge">
                        <div class="progressbar round-xlarge" style="width:80%"></div>
                        </div>

                        <div class="progress-container round-xlarge">
                        <div class="progressbar round-xlarge" style="width:80%"></div>
                        </div>
                    </section>
                </section>
                
                <section id="per">
                    <h1> hello</h1>
                    <div class="progress-container round-xlarge">
                    <div class="progressbar round-xlarge" style="width:80%"></div>
                    </div>
                    
                    <div class="progress-container round-xlarge">
                    <div class="progressbar round-xlarge" style="width:80%"></div>
                    </div>
                    
                    <div class="progress-container round-xlarge">
                    <div class="progressbar round-xlarge" style="width:80%"></div>
                    </div>
                    
                    <div class="progress-container round-xlarge">
                    <div class="progressbar round-xlarge" style="width:80%"></div>
                    </div>
                
                </section>
            </section>
        </section>
        
        
        
         <section id="cv3"> 
            <section id="edhead"> 
                <h1> hello</h1>
                <h1> hello</h1> 
            </section>
            <section id="edextention">
                <h2> hello</h2>
                <h2> hello</h2> 
             </section> 
         </section>
        
        
        
        
        <section id="cv4">
            <section id="hobbies">
                <h1>Hobbies</h1>
            </section>
            <section id="language">
                <h1>Language</h1>
            
            </section>
        
        
        </section>        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
