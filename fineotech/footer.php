<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="text-white text-left">
                    <a class="navbar-brand footer-logo" href="index.html"><span class="lnr lnr-diamond"></span>
                        Fineotech Inc.</a>
                    <p class="address-text">437M, Belmount Road <br> Helvitica Springs,120029</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-white text-left">
                    <p class="footer-header">Quick Links</p>
                    <ul class="footer-text">
                        <li><a href="javascript:void(0)">About Us</a></li>
                        <li><a href="javascript:void(0)">Services</a></li>
                        <li><a href="javascript:void(0)">Blog</a></li>
                        <li><a href="javascript:void(0)">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-white text-left">
                    <p class="footer-header">Support Links</p>
                    <ul class="footer-text">
                        <li><a href="javascript:void(0)">Community</a></li>
                        <li><a href="javascript:void(0)">Report Abuse</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-white text-left">
                    <p class="footer-header">News Letter</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="copyright-section text-white text-left">
                    <p class="footer-text">&copy; 2019 fineotech.com </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="copyright-section-privacy text-white text-right">
                    <p class="footer-text"><a href="javascript:void(0)">Privacy Policy</a></p>&nbsp &nbsp
                    <p class="footer-text"><a href="javascript:void(0)">Terms And Condition</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>

<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery-min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/nivo-lightbox.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/menu.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/main.js"></script>

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>
<!-- Google Maps JS Only for Contact Pages -->
<script type="text/javascript">
var map;
var defult = new google.maps.LatLng(44.2072183, -101.3681486);
var mapCoordinates = new google.maps.LatLng(44.2072183, -101.3681486);


var markers = [];
var image = new google.maps.MarkerImage(
    'img/map-marker.png',
    new google.maps.Size(84, 70),
    new google.maps.Point(0, 0),
    new google.maps.Point(60, 60)
);

function addMarker() {
    markers.push(new google.maps.Marker({
        position: defult,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
    }));

}

function initialize() {
    var mapOptions = {
        backgroundColor: "#fff",
        zoom: 8,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "landscape.man_made",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "stylers": [{
                    "color": "#80C8E5"
                }, {
                    "saturation": 0
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#999999"
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "elementType": "labels.text",
                "stylers": [{
                    "color": "#333333"
                }]
            }

            , {
                "featureType": "road.local",
                "stylers": [{
                    "color": "#dedede"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [{
                    "color": "#666666"
                }]
            }, {
                "featureType": "transit.station.bus",
                "stylers": [{
                    "saturation": -57
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "visibility": "off"
                }]
            }

        ]

    };
    map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
    addMarker();

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>