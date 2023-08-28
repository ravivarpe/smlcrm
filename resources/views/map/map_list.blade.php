@extends('includes.header')

@section('content')

<style>
   .error{
      color:red;
   }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-check-square-o"></i>
       </div>
       <div class="header-title">
          <h1>Map</h1>
          <small></small>
       </div>
    </section>
    <div class="btn-group">
    <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Company
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($companies as $company)

        <a class="dropdown-item" href="#">{{$company->name}}</a>
         @endforeach

       </div>
     </div>
     {{-- <div class="dropdown col">
       <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Categories Type
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         @foreach ($jobcategories as $cat)

           <a class="dropdown-item" href="{{route('task.catwise',$cat->id)}}">{{$cat->name}}</a>
         @endforeach

       </div>
     </div> --}}
    </div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
             <div class="col-lg-12 pinpin">
                   <div class="card lobicard"  data-sortable="true">
                       <div class="card-header">
                           <div class="card-title custom_title">
                               <h4>Map</h4>
                           </div>
                       </div>
                       <div class="card-body">

                               <div class="table-responsive" id="map" style="width: 1000px; height:500px;">

                               </div>
                        </div>
                   </div>
               </div>
       </div>

       <!-- /.modal-content -->



    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 @endsection

 @section('footer_scripts')

<script defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwMzZDXSoDPcWl2xoR62Ql3SbewScI5Mc&callback=initMap&libraries=places"></script>

 <script>
        let marker;
        let markerArray=[]

        let infoWindow



        function initMap()
        {
             map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 55.378052, lng: -3.435973 },
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControlOptions: {
                        mapTypeIds: ["roadmap", "satellite"]}
            });

            // for (let index = 0; index < varray['detail_data'].length; index++) {
            //     var element = varray['detail_data'][index];
            //     createMarker(element);
            //     console.log(index);
            // }

        };

            function createMarker(place)
            {

                let icon = {
                    url: "{{url('front_assets/img/truck.png')}}", // url
                   // scaledSize: new google.maps.Size(30, 30) // scale the image to an icon size
                }

                let  marker = new google.maps.Marker({
                    map: map,
                    icon: icon,
                    position:{ lat:parseFloat(place.latitude), lng: parseFloat(place.longitude) }
                })

                infoWindow = new google.maps.InfoWindow()

                google.maps.event.addListener(marker, "click", () =>
                {
                    infoWindow.setContent("Vehicle NO: "+place.vehicle_no+"<br/>\n Location: "+place.location + "\n<br/> Date Time"+place.date_time)
                    infoWindow.open(map, marker)

                })

            }

 </script>
 @endsection
