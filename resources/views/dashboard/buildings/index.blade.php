@extends('layouts.dashboard.main')

@section('styles')
    <style>
        .map {
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        .map img {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 3;
            width: 100%;
            height: auto;
            -webkit-transition: .3s all;
            transition: .3s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .map svg {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 3;
            width: 100%;
            height: auto;
            -webkit-transition: .3s all;
            transition: .3s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .map svg path {
            opacity: 0.5;
            fill: yellow;
            cursor: pointer;
            transition: 0.3s;
        }

        .map path:hover {
            opacity: 0.8;
            transition: 0.3s;
        }

        .map path[checked=checked] {
            opacity: 0.8;
            transition: 0.3s;
            fill: red;
        }

        .map polygon {
            opacity: 0.5;
            fill: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .map polygon:hover {
            opacity: 0.8;
            transition: 0.3s;
        }

        .map polygon[checked=checked] {
            opacity: 0.8;
            transition: 0.3s;
            fill: red;
        }

        .map img {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 100%;
            height: auto;
        }

        .map input[type=radio] {
            visibility: visible;
        }

        [data-selected=true] {
            fill: red;
        }

        [data-selected=false] {
            fill: olive;
            opacity: .5;
        }
    </style>
@endsection

@section('content')
    <h5>Генплан Business House</h5>
    <div class="map">
        <img src="{{ $project->photo }}" alt="building">
        <svg viewBox="{{ $project->view_box }}" xmlns="http://www.w3.org/2000/svg">
            @foreach($project->buildings as $building)
                <a href="{{route('dashboard.buildings.edit', $building->id)}}">
                    <path d="{{ $building->d }}" checked="false" class="main_svg_{{$building->id}}" onclick="ali({{ $building->id }})" id="{{ $building->id }}"/>
                </a>
            @endforeach
        </svg>
        
    </div>
@endsection


