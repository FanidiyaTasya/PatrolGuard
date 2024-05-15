@extends('layout.main')

@section('content')
    <div>
        {{-- pke SVG
    <h1>{{ $location->location_name }}</h1>
    {!! $location->barcode !!} --}}

        {{-- pke path
    <h1>{{ $location->location_name }}</h1>
    <img src="{{ asset('storage/' . $location->barcode) }}" alt="Barcode"> --}}
        {!! QrCode::size(100)->generate($location->location_name) !!}
        <div>
            <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->errorCorrection('H')->generate($location->location_name)) !!} " download>Download</a>
        </div>        
        {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate('Generate any QR Code!')) !!} "> --}}
    </div>
@endsection
