@extends('site.layout')

@section('css')
    <link rel='stylesheet' href='/gallery/dist/css/unite-gallery.css' type='text/css' /> 
    <link rel='stylesheet' href='/gallery/dist/themes/default/ug-theme-default.css' type='text/css' /> 
@endsection

@section('content')
<div id="gallery" style="margin: 40px; display:none;">

        @foreach($fotos as $foto)
          <img alt="" src="/uploads/{{$foto->name}}"
          data-image="/uploads/{{$foto->name}}">
        @endforeach
  
</div>
@endsection

@section('js')
    <script type='text/javascript' src='/gallery/dist/js/unitegallery.min.js'></script> 
    <script type='text/javascript' src='/gallery/dist/themes/tiles/ug-theme-tiles.js'></script>

    <script type="text/javascript"> 
        jQuery(document).ready(function(){ 
          jQuery("#gallery").unitegallery({
            tiles_type:"justified"
          }); 
        }); 
      </script>
@endsection