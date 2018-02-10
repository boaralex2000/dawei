<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

</head>

<style>
    body,
    html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
        background-position: center;
        background-size: cover;
        background-image: url("../images/thai_frontpage.jpg");
        min-height: 75%;
    }

    .menu {
        display: none;
    }

</style>

<body>

    <?php>

        mysqli_query($dbc,"SET NAMES UTF8");
    
        $dbc = mysqli_connect("localhost","root","","dawei");
        $query = "SELECT * FROM dishes";
    
        $result = mysqli_query($dbc,$query);
        
        
    
    ?>

        <div class="w3-top">
            <div class="w3-row w3-padding w3-black">
                <div class="w3-col s3">
                    <a href="#" class="w3-button w3-block w3-black">HEM</a>
                </div>
                <div class="w3-col s3">
                    <a href="#about" class="w3-button w3-block w3-black">OM</a>
                </div>
                <div class="w3-col s3">
                    <a href="#menu" class="w3-button w3-block w3-black">MENY</a>
                </div>
                <div class="w3-col s3">
                    <a href="#where" class="w3-button w3-block w3-black">HITTA OSS</a>
                </div>
            </div>
        </div>

        <!-- Header with image -->
        <header class="bgimg w3-display-container w3-grayscale-min" id="home">
            <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
                <span class="w3-tag">Öppet från 08 t.o.m. 22 </span>
            </div>
            <div class="w3-display-middle w3-center">
                <span class="w3-text-white" style="font-size:90px">Da Wei</span>
            </div>
            <div class="w3-display-bottomright w3-center w3-padding-large">
                <span class="w3-text-white">Atles Gata, Vintrie, Malmö</span>
            </div>
        </header>

        <!-- Add a background color and large text to the whole page -->
        <div class="w3-sand w3-grayscale w3-large">

            <!-- About Container -->
            <div class="w3-container" id="about">
                <div class="w3-content" style="max-width:700px">
                    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">OM RESTAURANGET</span></h5>
                    <p>Restauranget grundades 1998 av BaBa BaoB och Tombång Beis. Här på Da Wei erbjuds goda rätter som man inte kan få tag på annanstans. Våra produkter är från naturen och är helt färska.</p>
                    <p>Dessutom så kan man boka bord online och kolla rätterna innan man besöker restauranget. Karta finns längre ner på sidan och här på Da Wei garanterar vi bästa service.</p>
                    <div class="w3-panel w3-leftbar w3-light-grey">
                        <p><i>"Använd produkter från naturen för vad det är värt - men aldrig för tidigt eller för sent." Färskt är det nya söta.</i></p>
                        <p>Chef and Owner: BaBa BaoB</p>
                    </div>
                    <p><strong>Opening hours:</strong> Varje dag från 08 t.o.m. 22. </p>
                    <p><strong>Address:</strong> Atles Gata, Vintrie, Malmö</p>
                </div>
            </div>

            <!-- Menu Container -->
            <div class="w3-container" id="menu">
                <div class="w3-content" style="max-width:700px">

                    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>

                    <div class="w3-row w3-center w3-card w3-padding">
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                            <div class="w3-col s6 tablink">Eat</div>
                        </a>
                        <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                            <div class="w3-col s6 tablink">Drink</div>
                        </a>
                    </div>

                    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                        
                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=1";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div>
                            <img class="menu-images" src="../images/Pad.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=1";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville2.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=1";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; } 
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=2";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/Gai.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=2";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville1.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=2";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p>
                        <p class="w3-text-grey">! GLUTEN !</p>
                        <br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=3";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/ChickenMasala.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=3";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville1.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=3";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p>
                        <p class="w3-text-grey">! NÖTTER !</p>
                        <br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=4";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/fl%C3%A4skfile.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=4";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville2.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=4";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=5";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/nudelwok.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=5";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville3.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=5";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=6";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/biff.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=6";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville3.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=6";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=7";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/klubbor.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=7";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville1.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=7";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=8";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>er
                        </h5>
                        <div class="menu-images">
                            <img src="../images/n%C3%B6tter.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=8";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville2.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=8";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p>
                        <p class="w3-text-grey">! NÖTTER !</p>
                        <br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=9";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/thaikyckling.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=9";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville2.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=9";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p><br>

                        
                        
                        <h5>
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT NAME FROM dishes WHERE ID=10";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['NAME']; }
                        ?>
                        </h5>
                        <div class="menu-images">
                            <img src="../images/soppa.png" width="200px" />
                        </div>
                        <div>
                            <p class="menu-prices">
                            <?php 
                                $dbc = mysqli_connect("localhost","root","","dawei"); 
                                mysqli_query($dbc,"SET NAMES UTF8");
                                $query = "SELECT PRICE FROM dishes WHERE ID=10";
                                $result = mysqli_query($dbc,$query); 
                                while($row = mysqli_fetch_array($result)){ echo $row['PRICE']; }
                            ?> KR
                            </p>
                        </div>
                        <img src="../images/scoville1.png" width="200px" class="menu-scoville">
                        <p class="w3-text-grey">
                            <?php 
                            $dbc = mysqli_connect("localhost","root","","dawei"); 
                            mysqli_query($dbc,"SET NAMES UTF8");
                            $query = "SELECT ABOUT FROM dishes WHERE ID=10";
                            $result = mysqli_query($dbc,$query); 
                            while($row = mysqli_fetch_array($result)){ echo $row['ABOUT']; }
                        ?>
                        </p>

                        
                        
                    </div>

                    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                        <h5>Alcohol</h5>
                        <p class="w3-text-grey">Öl, Vodka, Vin. 45 Kr</p><br>

                        <h5>Corretto</h5>
                        <p class="w3-text-grey">Whiskey och caffe. 35 Kr</p><br>

                        <h5>Iced tea</h5>
                        <p class="w3-text-grey">Kall te. 15 Kr</p><br>

                        <h5>Soda</h5>
                        <p class="w3-text-grey">Cola, Sprite, Fanta, osv. 15 Kr</p>

                        <h5>Water</h5>
                        <p class="w3-text-grey">Gratis</p>

                    </div>
                </div>
            </div>

            <!-- Contact/Area Container -->
            <div class="w3-container" id="where" style="padding-bottom:32px;">
                <div class="w3-content" style="max-width:700px">
                    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">HITTA OSS</span></h5>
                    <div id="googleMap" class="w3-sepia" style="width:100%;height:400px;"></div>
                    <p><span class="w3-tag">FYI!</span> Vi erbjuder bästa service för alla evenemang, stora eller små. Vi förstår dina behov och vi kommer att tillaga maten för att behålla de största kriterierna för dem alla, både utseende och smak.</p>
                    <p><strong>Boka</strong> ett bord och lämna gärna ett meddelande om det behövs speciala kost:</p>
                    <form action="/action_page.php" target="_blank">
                        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Namn" required name="Name"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Antal personer" required name="People"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2018-03-01T13:00"></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Meddelande / Speciala krav" required name="Message"></p>
                        <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
                    </form>
                </div>
            </div>

            <!-- End page content -->
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
            <p>© 2018 BaBa BaoB.</p>
        </footer>
        <!-- Add Google Maps -->
        <script>
            function myMap() {
                myCenter = new google.maps.LatLng(55.5587605, 12.9786832);
                var mapOptions = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });
                marker.setMap(map);
            }

            // Tabbed Menu
            function openMenu(evt, menuName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("menu");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                }
                document.getElementById(menuName).style.display = "block";
                evt.currentTarget.firstElementChild.className += " w3-dark-grey";
            }
            document.getElementById("myLink").click();

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8MPZU6GFkKYCARufg1lM-nf0CKhYteH0&callback=myMap"></script>
