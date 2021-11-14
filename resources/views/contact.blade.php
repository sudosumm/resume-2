<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

<!-- ===== Start of Header ===== -->
<header class="main">
    <nav class="navbar navbar-default navbar-static-top fluid_header">
        <div class="container">
            @include('includes.header')
        </div>
    </nav>
</header>
<!-- ===== End of Header ===== -->


<!-- ===== Main Page Section ===== -->
<section class="main" id="pages">

    <!-- Title -->
        @include('includes.background')
        <h2>تماس باما</h2>
    </div>
    <!-- End of Title -->

</section>
<!-- ===== End of Main Page Section ===== -->


<!-- ===== Start of Contact Section ===== -->
<section id="contact">
    <div class="container main-content">
        <div class="col-md-12">
            <h2 class="section-title">برای ما پیغام بگذارید</h2>
        </div>

        <!-- Start of Contact Form -->
        <div class="col-md-6 pull-right">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

            <!-- start of form -->
                @include('includes.formcontact')
            <!-- end of form -->

        </div>
        <!-- End of Contact Form -->

        <!-- Start of Google Map -->
        <div class="col-md-6 gmaps">
            <div id="map"><img src="{{ asset('assets/client/images/img/map.png') }}" width="526px" height="600px" style="border-radius: 30px;"></div>
        </div>
        <!-- End of Google Map -->

    </div>
</section>
<!-- ===== End of Contact Section ===== -->


<!-- ===== Start of Footer ===== -->
<footer id="main-footer">
    @include('includes.footer')
</footer>
<!-- ===== End of Footer ===== -->




<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    @include('includes.js')
<script>
    jQuery(function ($) {
        // Asynchronously Load the map API
        var script = document.createElement('script');
        script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize";
        document.body.appendChild(script);
    });

    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            scrollwheel: false,
            draggable: false,
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]

        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [
            ['swimmerland', 40.716323, -74.004326],
        ];

        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h5>Swimmerland</h5>' +
            '<p>Your address here</p>' + '</div>']
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(13);
            google.maps.event.removeListener(boundsListener);
        });

    }
</script>

</body>

</html>
