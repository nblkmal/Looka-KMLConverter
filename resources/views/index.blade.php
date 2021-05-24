<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL to KML Converter</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h1>tokml</h1>
        <hr />
        <textarea id='map-geojson'></textarea>
        <button id='convert-raw'>convert from raw geojson input</button>
        {{-- <script src='site/site.js'></script> --}}
        </div>
    </div>
    

    @section('page-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/site/index.js' )}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/site/site.js' )}}"></script>
    @endsection

</body>
</html>

