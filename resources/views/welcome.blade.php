@extends('template.app')
@section('title','Busca')
@section('main')
    @parent
    <div class="row">
        <h1>Busca de Serviços</h1>
        <form class="form-inline">
            <div class="form-group mb-2">
                <label for="FormControlSelect1">Tipos de Serviços</label>
                <select class="form-control" id="FormControlSelect1" value="Tipos de Serviços">
                    <option>Blindagem</option>
                    <option>Mecânica em Geral</option>
                    <option>Retifica</option>
                    <option>Lanternagem/Pintura</option>
                    <option>Elétrica</option>
                    <option>Suspensão</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
        </form>
        <br/>
        {{dd($oi)}}

    </div>
    <div class="row">

        <div id="map"></div>
    </div>
    <script>
      function initMap () {
        //map options
        var options = {
          zoom: 15,
          center: {lat: -16.0655, lng: -47.9761},
        }
        //new map
        var map = new google.maps.Map(document.getElementById('map'), options)

        //add marker
        var marker = new google.maps.Marker({
          position: {lat: -16.0699, lng: -47.9811},
          map: map,
        })
      }
    </script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyCKfC-5lLpDU0Wy6hHAqq8UbMmL4typA&callback=initMap">
    </script>
@endsection