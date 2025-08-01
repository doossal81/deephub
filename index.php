<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from preview.baliwebcrafted.com/theme/como/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 11:38:07 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Meta  -->
    <meta name="author" content="Gus eka creations" />
    <meta name="description" content="One Page Modern Template Design HTML. This template contain section by section marketing to market your product" />
    <meta name="keywords" content="web designer, Template design bundles, web design bundles" />

    <title>Como - One Page Modern Template Design HTML</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://via.placeholder.com/5x5" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="css/venobox.css" rel="stylesheet" />
    <link href="css/swiper.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="func.js"></script>
		
  </head>
  <body>
    <!-- Banner -->
    <section id="herobanner" class="hero_section herobanner overlay">
      <!-- Navigation menu -->
      

      <div class="container height-100">
        <div class="display-table">
          <div class="table-cell">
            <div class="col-md-7">
              <div class="hero_content">
                <h1 class="text-white">
                 Get started with us today! <br />
                </h1>
                <p>Experience seamless, discreet service tailored just for you</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form_container">
                <h2 class="text-white">
                  Please fill form below<br />
                  to contact us
                </h2>
                <div class="formbanner">
                  <div name="ajax_form"  id="ajax_form"  class="form-horizontal formreg mb-25">
                    <div class="form-group">
                      <div class="col-md-12">
                        <label><i class="far fa-user"></i></label>
                        <input type="text"  id="anonymous" name="name" class="form-control" placeholder="Anonymous name" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label><i class="far fa-envelope"></i></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required />
                      </div>
                    </div>
					 <div class="form-group">
                      <div class="col-md-12">
                        <label><i class="far fa-envelope"></i></label>
                        <input type="text"  id="ptitle" name="text" class="form-control" placeholder="What service do you require" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label><i class="fas fa-envelope"></i></label>
                       <textarea id="message"  class="form-control" height="80px" required name="description" placeholder="Enter your project description here..."></textarea>
                      </div>
                    </div>
                    <input type="submit" name="submit" id="submitpost" style="width:180px" onclick="postproject()" class="btnsignup" value="Submit" />
                  </form>
                  <p class="notif"></p>
                  <p>Don't hesitate to reachout to us</p>
                  <p>24/7 Actively available </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Banner -->

    <!-- About -->
    
    <!-- End Footer -->

    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/swiper.min.js"></script>

    <script>
      /*=========================================================================
        Maps
      =========================================================================*/
      var marker;
      function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 16,
          center: { lat: -8.619724, lng: 115.087758 },
          // Map Styling
          styles: [
            {
              featureType: "administrative",
              elementType: "all",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  lightness: 33,
                },
              ],
            },
            {
              featureType: "landscape",
              elementType: "all",
              stylers: [
                {
                  color: "#f2e5d4",
                },
              ],
            },
            {
              featureType: "poi.park",
              elementType: "geometry",
              stylers: [
                {
                  color: "#c5dac6",
                },
              ],
            },
            {
              featureType: "poi.park",
              elementType: "labels",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  lightness: 20,
                },
              ],
            },
            {
              featureType: "road",
              elementType: "all",
              stylers: [
                {
                  lightness: 20,
                },
              ],
            },
            {
              featureType: "road.highway",
              elementType: "geometry",
              stylers: [
                {
                  color: "#c5c6c6",
                },
              ],
            },
            {
              featureType: "road.arterial",
              elementType: "geometry",
              stylers: [
                {
                  color: "#e4d7c6",
                },
              ],
            },
            {
              featureType: "road.local",
              elementType: "geometry",
              stylers: [
                {
                  color: "#fbfaf7",
                },
              ],
            },
            {
              featureType: "water",
              elementType: "all",
              stylers: [
                {
                  visibility: "on",
                },
                {
                  color: "#acbcc9",
                },
              ],
            },
          ], // End map styling
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: { lat: -8.619724, lng: 115.087758 },
        });
        marker.addListener("click", toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMzGa-JHjmz7YB-x6OUujlMZW_Kp1fw-g&amp;callback=initMap"></script>
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from preview.baliwebcrafted.com/theme/como/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jul 2025 11:41:04 GMT -->
</html>
