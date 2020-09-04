@extends('layouts.default')
@section('site-content')
    <div class="container-fluid py-2">
        {{--START BANNER--}}
        <div class="header-banner">
            <img src="{{asset('')}}assets/img/banner/banner2.jpg" alt="" >
            <div class="banner-text-wrapper">
                <h1 class="text-white underlined">Contact Us</h1>
                <p class="text-white">Do you want to reach us at any time?.</p>

            </div>
            <div class="animated-pane">
                .
            </div>
        </div>
        {{--END BANNER--}}
<div class="container">
    <div class="row py-3">
        <div class="col-md-4 br-1">
            <div class="align-self-stretch">
                <div class="card-body text-center">
                    <h1><i class="fa fa-envelope theme-color"></i></h1>
                    <p class="text-muted">support@tabe.com.ng</p>
                </div>
            </div>

        </div>
        <div class="col-md-4  br-1">
            <div class=" align-self-stretch">
                <div class="card-body text-center">
                    <h1><i class="fa fa-phone theme-color"></i></h1>
                    <p class="text-muted">+2348023456894</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="align-self-stretch">
                <div class="card-body text-center">
                    <h1><i class="fa fa-map-marker theme-color"></i></h1>
                    <p class="text-muted">10 Lord Lugard Street, Asokoro, FCT, Nigeria</p>
                </div>
            </div>
        </div>

        <div class="col-sm-12 py-4">
            <div id="map"></div>
        </div>
    </div>
</div>

    </div>
@endsection

@section('footer-scripts')
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 9.047100, lng: 7.507530};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>

    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt0t6T3BA_SWXLGfRVh7DxTPSBe-qx5ts&callback=initMap">
    </script>

@endsection