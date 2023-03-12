@extends('layouts.dashboard.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-md-11">
                        <h5>Здание: {{ $building->name_ru }}</h5>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('dashboard.floors.index', $building)}}"><button class="btn btn-success mb-2" >этажи</button></a>
                    </div>
                </div>
            </div>
            <form action="{{route('dashboard.buildings.update', $building)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Фото здания</label>
                                <div class="col-12 text-center">
                                    <img src="{{ $building->photo }}" alt="" style="height: 350px;">
                                </div>
                                <input class="form-control mt-2" type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput3">План svg</label>
                                <div class="col-12 text-center">
                                        <svg viewBox="{{ $building->view_box }}" xmlns="http://www.w3.org/2000/svg" style="height: 350px;">
                                            @foreach($building->floors as $floor)
                                                <path d="{{ $floor->d }}" checked="false" class="main_svg_{{ $floor->id }}" onclick="ali({{ $floor->id }})" id="{{ $floor->id }}"/>
                                            @endforeach
                                        </svg>
                                    <input class="form-control mt-2" type="file" id="exampleFormControlInput3" name="svg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название RU</label>
                                <input class="form-control" type="text" name="name_ru" value="{{ $building->name_ru }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название UZ</label>
                                <input class="form-control" type="text" name="name_uz" value="{{ $building->name_uz }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название EN</label>
                                <input class="form-control" type="text" name="name_kr" value="{{ $building->name_kr }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Изменить</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection