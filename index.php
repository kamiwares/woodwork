<!DOCTYPE html>
<html lang="en-us">

<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Drewniane nogi toczone</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>

<body>
    <div id="content">
        <div id="find-more">Zobacz więcej!<img src="carving.png"></div>
        <div id="nav">
            <div id="nav-logo"><img src="saw-blade.png"></div>
            <div class="nav-option"><a href="#">Home</a></div>
            <div class="nav-option"><a href="#second-section">Wyroby</a></div>
            <div class="nav-option"><a href="#third-section">O nas</a></div>
            <div class="nav-option"><a href="#fourth-section">Zamów</a></div>
            <div class="icon-menu" onclick="menu()"><img src="more.png"></div>
            </div>

        </div>
        <div id="first-section">
            <a href="#second-section" style="color: white"><div id="order-now">Sprawdź oferte</div></a>
            <h1>Toczone drewniane nogi</h1><br>
            <h2>Dbalosc o szczegoly i doskonala jakosc surowca</h2>
        </div>

        <div class="break"></div>

        <div id="second-section">
            <div class="item-holder">
                <div class="item">
                    <img src="product1.png">
                    <p>Noga toczona wzór nr 1<br>kolor biały</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product2.png">
                    <p>Noga toczona wzór nr 1<br>kolor bezbarwny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product3.png">
                    <p>Noga toczona wzór nr 1<br>kolor czarny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                
            </div>
            <div class="colors">
                <img src="colors/1.png">
                <img src="colors/2.png">
                <img src="colors/3.png">
            </div>
            <div class="item-holder">
                <div class="item">
                    <img src="product1.png">
                    <p>Noga toczona wzór nr 1<br>kolor biały</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product2.png">
                    <p>Noga toczona wzór nr 1<br>kolor bezbarwny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product3.png">
                    <p>Noga toczona wzór nr 1<br>kolor czarny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                
            </div>
            <div class="colors">
                <img src="colors/4.png">
                <img src="colors/5.png">
                <img src="colors/6.png">
            </div>
            <div class="item-holder">
                <div class="item">
                    <img src="product1.png">
                    <p>Noga toczona wzór nr 1<br>kolor biały</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product2.png">
                    <p>Noga toczona wzór nr 1<br>kolor bezbarwny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                <div class="item">
                    <img src="product3.png">
                    <p>Noga toczona wzór nr 1<br>kolor czarny</p>
                    <h3><a href="#fourth-section">Zamów</a></h3>
                </div>
                
            </div>
        </div>
        <div class="colors">
            <img src="colors/2.png">
            <img src="colors/6.png">
            <img src="colors/7.png">
        </div>
        <div class="break"></div>

        <div id="third-section">
            <div class="about-us">
                <h1>O nas</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam feugiat diam vel maximus pellentesque. Ut nec dui eu velit blandit lacinia. Integer ac vestibulum nulla, vitae condimentum eros. Proin laoreet tempor elit vel convallis. Fusce volutpat massa et facilisis porta. Donec pellentesque ultrices malesuada. Maecenas iaculis quis ligula ac feugiat. Praesent a augue vel erat pharetra vulputate. Proin sollicitudin felis id blandit dictum. Praesent rhoncus est ullamcorper, feugiat ipsum non, iaculis sapien.</p>
            </div>
            <div class="about-us" id="gater"></div>
        </div>

        <div class="break"></div>

        <div id="fourth-section">

                <div id="contact-form">
               <h2>Skontaktuj się z nami:</h1>
                <form action="iframe_content.php" method="post" target="content">
                    <input placeholder="Imie i nazwisko" type="text" name="name">
                    <input placeholder="Email" type="email" name="email">
                    <input style="padding: 30px" placeholder="Treść wiadomości" id="text" name="message" type="text">
                        <script>
                        function onSubmit(token) {
                            document.getElementById("demo-form").submit();
                            }
                        </script>
                        
                    <input  onclick="document.getElementById('frame').style.display = 'block'"; name="submit" type="submit">
                </form>

                
                <iframe loading="lazy"  name="content" scrolling="No" height="100px" width="100%" style="border: none;"></iframe>
            </div>
            
        </div>
        
        <div class="break"></div>


        <div id="fifth-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d532.347712734293!2d19.868743522822204!3d49.64438121255185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471675a051e43697%3A0x2241104dd4aad9d7!2sZakopia%C5%84ska%2083%2C%2034-240%20Jordan%C3%B3w!5e1!3m2!1spl!2spl!4v1657448670548!5m2!1spl!2spl" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <a href="https://waresiak.pl/"><div id="footer">Created by waresiak.pl </div></a>
    </div>
    <div onclick="document.getElementById('menu').style.display = 'none';" id="menu">
        <img src="more.png" onclick="close()">
        <h1 class="menu-element">Menu</h1>
        <div class="menu-element"><a href="#">Home</a></div>
        <div class="menu-element"><a href="#second-section">Wyroby</a></div>
        <div class="menu-element"><a href="#third-section">O nas</a></div>
        <div class="menu-element"><a href="#fourth-section">Zamów</a></div>
        <div class="info">
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>