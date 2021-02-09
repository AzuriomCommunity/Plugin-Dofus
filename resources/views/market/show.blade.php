@extends('layouts.app')

@section('title', 'Plugin home')

@push('styles')
    <link href="{{ plugin_asset('dofus','css/styles.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container my-5" id="plugin--dofus-market">
        <div class="row">
            <div class="col-xl-6 col-lg-7 mb-5 mb-lg-0">
                @include('dofus::market.character.inventory')
            </div>
            <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                @include('dofus::market.character.stats')
            </div>
        </div>
    </div>
@endsection
