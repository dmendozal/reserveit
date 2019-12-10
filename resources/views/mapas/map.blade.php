@extends('layouts.app')
@push('estilos')
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
@endpush
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.asignar') }}
    </div>

</div>
<div class="container">
    <div class="card">
        <div class="card-content">
            <div id="map" style="height: 450px"></div>
        </div>
    </div>
</div>
<div id="app"> </div>
@endsection

@push('partials.scripts')
<script src="{{ url('/js/bootstrap.js') }}" type="text/javascript"></script>

<script>
    var map;
    var sucurLatLng = {
        lat: {!! $reserva->ofertaProducto->sucursal->latitud !!},
        lng: {!! $reserva->ofertaProducto->sucursal->longitud !!}
    };
    var cliLatlng = {
        lat: {!! $reserva->cliente->latitud !!},
        lng: {!! $reserva->cliente->longitud !!}
    };
    function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -17.785173, lng: -63.181163},
        zoom: 13
    });

    console.log(map);
    //ubicacion de la sucursal
    var marker = new google.maps.Marker({
    position: sucurLatLng,
    map: map,
    title: '{!! $reserva->ofertaProducto->sucursal->nombre !!}'
    });
    //ubicacion del cliente
    var marker = new google.maps.Marker({
    position: cliLatlng,
    map: map,
    title: '{!! $reserva->cliente->nombre !!}'
    });
        let channel = window.Echo.channel('home');
        channel.listen('.SocketsEvent',function(data){
        var myLatLng = {lat: parseFloat(data.latitud) , lng: parseFloat(data.longitud)};
        console.log(myLatLng);
        var marker = new google.maps.Marker({
            position: myLatLng,
            title: '{!! $reserva->cliente->nombre !!}',
            map: map
            });
        });
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdG9dbToS4EEPT5rvxhdbLKZxiG6l8YPI&callback=initMap">
</script>
<script>

</script>

@endpush

<script src="{{ asset('assets/node_modules/socket.io-client/dist/socket.io.js') }}"></script>


{{-- <script>
     var socket = io('http://192.168.0.106:6001');
  socket.on('home:App\\Events\\SocketsEvent', function(message){
    console.log('CONECTADO',message);
  });
  socket.on('event', function(data){
      console.log(data);
  });
  socket.on('disconnect', function(){
      console.log('DESCONECTADO')
  });
  console.log(socket);
</script> --}}
