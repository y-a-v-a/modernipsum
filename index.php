<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_GET['page']) && $_GET['page'] == 'about' ? 'About - ' : ''; ?>Modernipsum</title>
    <style>
        /* Base Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        /* Layout */
        .wrapper {
            max-width: 940px;
            margin: 0 auto;
        }
        
        .container {
            margin: 40px 0;
            padding: 0;
        }

        .container a,.container a:visited, .container a:active {
          color:black;
        }
        
        /* Header */
        .header {
            width: 100%;
            height: 237px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .header-bg {
            width: 100%;
            height: 100%;
            background-image: url('background_modernipsum.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .header h1 {
            display: none;
        }
        
        .header .subtitle {
            display: none;
        }
        
        /* Navigation */
        .nav {
            background-color: #ff9000;
            border-top: 1px solid #000;
            height: 38px;
            line-height: 38px;
            width: 100%;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        
        .nav a:hover {
            text-decoration: underline;
        }
        
        .main-nav {
            text-align: center;
            margin: 20px 0;
        }
        
        .main-nav a {
            color: #ff6600;
            text-decoration: none;
            margin: 0 10px;
        }
        
        .main-nav a:hover {
            text-decoration: underline;
        }
        
        /* Content */
        .content {
            background-color: white;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            line-height: 1.6;
            color: #333;
        }
        
        .question {
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 16px;
        }
        
        .question:first-child {
            margin-top: 0;
        }
        
        .answer {
            margin-bottom: 20px;
        }
        
        /* Generator */
        .generate-btn {
            background-color: #ff6600;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .generate-btn:hover {
            background-color: #e55a00;
        }
        
        .lorem-text {
            text-align: left;
            line-height: 1.6;
            font-size: 14px;
            color: #333;
            margin-bottom: 40px;
        }
        
        .lorem-text p {
            margin-bottom: 15px;
        }
        
        /* Footer */
        .footer {
            padding: 20px;
            background-color: #333;
            color: white;
            font-size: 12px;
            border-top: 3px solid #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .footer .footer-left {
            font-weight: bold;
        }
        
        .footer .footer-right {
            color: #ccc;
            font-style: italic;
        }
        .footer a {
          color: #fff;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
          <div class="header-bg">
              <h1>Modernipsum</h1>
              <div class="subtitle">An Artier Lorem Ipsum Generator</div>
          </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="index.php?page=about">About</a>
            </div>
        </div>
        
        <div class="container">
          <div class="content">
            
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            
            switch($page) {
                case 'about':
                    echo '<div class="question">What is Modernipsum?</div>';
                    echo '<div class="answer">Even more simple put as Tuna Ipsum, it\'s a blatant rip of a rip of Bacon Ipsum. I received the link from a colleague pointing me to the Tuna Ipsum site. Y-a-v-a and ax710 are artists. We like the meat and fish and veggie versions but we wanted an artistic version.</div>';
                    echo '<div class="question">You\'re missing an -ism!</div>';
                    echo '<div class="answer">Well, send it over to us and we will add it if it\'s art related!</div>';
                    echo '<div class="question">How did you make this site?</div>';
                    echo '<div class="answer">The guy from Bacon Ipsum, the guy from Tuna Ipsum, WordPress, Mathew Tinsley for the PHP class, Kazimir Malevich and Marcel Duchamp made this all happen. Y-a-v-a and ax710 did some coding and the graphics, except for the theme which loosely inspired by the Twenty-Ten from WordPress.</div>';
                    echo '<div class="question">Who are you?</div>';
                    echo '<div class="answer">See <a href="https://www.infrath.in" target="_blank">y-a-v-a.org and ax710.org</a>\'s website. We\'re artists, we mix stuff into something.</div>';
                    echo '<div class="question">Do you have a picture of a man with an artwork?</div>';
                    echo '<div class="answer">Indeed I do.</div>';
                    break;
                    default:
                    include 'home.php';
                    break;
                  }
                  ?>
                  </div>
        </div>
        
        <div class="footer">
            <div class="footer-left">Modernipsum</div>
            <div class="footer-right">&copy; 2011-<?=date('Y')?> <a target="_blank" href="https://www.ax710.org">ax710</a> and <a target="_blank" href="https://www.y-a-v-a.org">y-a-v-a.org</a></div>
        </div>
    </div>
</body>
</html>