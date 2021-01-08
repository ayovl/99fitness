    
    <!--header-->
    <?php require 'header.php' ?>

    <!--content-->
    
    <!--Welcome Note-->
    <div id="welcome-note">
            <div id="welcome">
                WELCOME
            </div>
            
            <hr style="width: 100px; border: 1px solid black;">
        
            <p id="wnote-text">
            <span style="font-size: 1.5em;">99 Martial Arts & Fitness Academy</span> is Islamabad based Organization where we 
            provide fitness services and Martial Arts classes. We have advanced equipments and highly qualified professionals 
            in order to provide you with the best experience. 99 has currently two braches with plans for expanding the number of 
            branches accross the city.
           </p>
        
        <!--join button-->
        <div id="join-button">Join Now</div>
        <!--popup box-->
        <div id="pop-up">
            <i id="cancel-button" class="material-icons">clear</i>

            <h1>Call Us Now</h1>
            <br/>
            <div style=" max-width: 500px; margin-left: auto; margin-right: auto; margin-top: 45px;">
                <i class="material-icons" style="font-size: 50px; vertical-align:middle; ">phone</i>
                <span style="font-size: 1.5em;">+9133123023223</span> 
            </div>
            <!--inside popup box-->
            <div id="inside-popup" style="width: 100%; height: 300px; background-color: rgb(95, 64, 119) ;position: absolute; bottom: 0;">
                <h1>Visit Us</h1>
                <br/>
                <div style="max-width: 500px; margin-left: auto; margin-right: auto; margin-top: 45px;">
                    <i class="material-icons" style="font-size: 50px; vertical-align:middle;">add_location</i>
                    <span style="font-size: 1.5em;">Block C, Soan Garden, Islamabad</span> 
                </div>
            </div>
        </div>
    </div>

    <!--Map-->
    <div id="map" class="map"></div>
    <script type="text/javascript">
        var map = new ol.Map({
          target: 'map',
          layers: [
            new ol.layer. Tile({
              source: new ol.source.OSM()
            })
          ],
          view: new ol.View({
            center: ol.proj.fromLonLat([73.149258, 33.565180]),
            zoom: 17,
            minZoom: 17,
            maxZoom: 17
          })
          
        });
      </script>

      <!--Services Shortcut-->
      <div id="services-container" class="clearfix">
            <h1 style="text-align: center; font-size: 3em; -webkit-text-stroke: 3px; color:white;">SERVICES</h1>
            <!--Div to add spaces between services-->
            <div class="space-div">
                &nbsp;  
            </div>
            <!--services div-->
            <div id="karate" class="services clearfix" >
                <img src="martial-arts2.jpg" alt="A kid doing Martial Arts"/>
                <div class="caption"> Martial Arts</div>
                <div class="button-container">
                    <a href="services.php"><button> Learn More </button></a>
                 </div>
            </div>
            <!--Div to add spaces between services-->
            <div class="space-div">
                &nbsp; 
            </div>
            <!--services div-->
            <div id="body-building2" class="services clearfix" >
                <img src="body-building.jpg" alt="A kid doing Martial Arts"/>
                <div class="caption"> Body Building</div>
                <div class="button-container">
                    <a href="services.php"><button> Learn More </button></a>
                </div>
            </div>
            <!--Div to add spaces between services-->
            <div class="space-div">
                &nbsp;
            </div>
      </div>
      

      <!--Slide Show-->
      <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="pics/5.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/6.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/7.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/8.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/9.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/10.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/11.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/12.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/13.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/14.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/15.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/16.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/17.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/18.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/19.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/20.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/21.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/22.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/23.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="pics/24.jpg" style="width:100%">
            </div>

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none"; 
                    }
                    
                    slides[slideIndex-1].style.display = "block";  
                }

                setInterval(function() 
                {
                    showSlides(slideIndex += 1);
                }, 2000);
            </script>
    </div>
    <!--Footer-->
    
    
</body>

<?php require 'footer.php' ?>
    

    
    
