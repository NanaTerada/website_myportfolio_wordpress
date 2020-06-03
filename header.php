<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
        <title>タイトル</title>
        
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <?php
		wp_head(); // ※</head>直前にwp_head();を記述する
	?>
    </head>
    <body>
        
        <header>
            <nav>
                <ul>
                    <li><a href="#top">top</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#work">work</a></li>
                    <li><a href="#blog">blog</a></li>
                    
                    <!-- <i class="fab fa-twitter"></i> -->
                </ul>
                <span class="hamburger"><i class="fas fa-bars"></i></span>
                <span class="close"><i class="fas fa-times"></i></span>
            </nav>

            <!-- nav 最初　非表示でスクロールしたら表示 -->


            

        </header>