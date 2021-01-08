
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--  For Html5 elements to work on IE8 and lower  -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    
    <!--  Style sheets  -->
    <link rel="stylesheet" type="text/css" href="header.css"> 
    <link rel="stylesheet" type="text/css" href="
    <?php 
        switch($_SERVER['PHP_SELF'])
        {
            case "/99/index.php":
            echo "index.css";
            break;
            
            case "/99/services.php":
            echo "services.css";
            break;
            
            case "/99/gallery.php":
            echo "gallery.css";
            break;
            
            case "/99/about.php":
            echo "about.css";
            break;
            
            case "/99/contact.php":
            echo "contact.css";
            break;
        }
    ?>">
    
    <!--  jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--  javascript  -->
    <script src="index.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--Loads Map-->
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    
    <!--Font Awsome Icons-->
    <script src="https://kit.fontawesome.com/29046a7d3c.js"></script>
    
    
</head>
<body>

<!-- header -->
<header>
    <!-- Top Manue Bar -->
    <div id="topbar" class="clearfix" style="z-index: 1;">
    <!-- Top Manue cross icon -->
    <div id="cross-icon"><i class="fas fa-times fa-2x"></i></div>

    <ul id="nav">
    <li><a class="nav-link" href="index.php">Home</a></li>
    <li><a class="nav-link" href="services.php">Services</a></li>
    <li><a class="nav-link" href="gallery.php">Gallery</a></li>
    <li><a class="nav-link" href="about.php">About</a></li>
    <li><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>
    </div>
    <!-- Manue Bar icon -->
    <div id="manue-bar"><i class="fas fa-bars fa-2x"></i></div>
    <!-- Second top Manue Bar -->
    <div id="topbar2" class="clearfix">
    <!-- Short logo -->
    <div id="logo2"><a href="index.php" >99</a></div>    
    <ul id="nav">
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="services.php">Services</a></li>
            <li><a class="nav-link" href="gallery.php">Gallery</a></li>
            <li><a class="nav-link" href="about.php">About</a></li>
            <li><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
    </div>
    <!-- Main Logo -->
    <div id="logo"> 
        <a href="index.php">
            <span id="first-l" >99</span> 
            <span style="vertical-align: text-bottom;">
                Martial Arts & Fitness Academy
            </span>  
        </a>
    </div>

    <!-- Main Page text on header-->
    <?php
    if($_SERVER['PHP_SELF'] == "/99/index.php")
    {
        echo '<div id="header-text2">Big Ideas Great Results</div>';
        echo '<div id="timing">
                <h1>Open <i class="fa fa-calendar" aria-hidden="true"></i></h1>
                MON &nbsp;&nbsp; - &nbsp;&nbsp; SAT <br/><br/>
                9am &nbsp;&nbsp; - &nbsp;&nbsp; 9pm
              </div>';
    }
    elseif($_SERVER['PHP_SELF'] == "/99/services.php")
    {
        echo '<div id="header-text">SERVICES</div>';
    }
    elseif($_SERVER['PHP_SELF'] == "/99/gallery.php")
    {
        echo '<div id="header-text">GALLERY</div>';
    }
    elseif($_SERVER['PHP_SELF'] == "/99/about.php")
    {
        echo '<div id="header-text">ABOUT</div>';
    }
    elseif($_SERVER['PHP_SELF'] == "/99/contact.php")
    {
        echo '<div id="header-text">CONTACT</div>';
    }

    ?>
    
</header>