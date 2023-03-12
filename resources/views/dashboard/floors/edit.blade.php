@extends('layouts.dashboard.main')
@section('content')
{{-- @dd($flat); --}}
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-md-11">
                        <h5>Этаж: {{ $floor->name_ru }}</h5>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('dashboard.flats.index', $floor)}}"><button class="btn btn-success mb-2" >квартиры</button></a>
                    </div>
                </div>
            </div>
            <form action="{{route('dashboard.floors.update', $floor)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Фото этажа</label>
                                <div class="col-12 text-center" style="background: grey">
                                    <img src="{{ $floor->photo }}" alt="" style="height: 350px;">
                                </div>
                                <input class="form-control mt-2" type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput3">План svg</label>
                                <div class="col-12 text-center">
                                        <svg viewBox="{{ $floor->view_box }}" xmlns="http://www.w3.org/2000/svg" style="height: 350px;">
                                            @foreach($floor->flats as $flat)
                                                <path d="{{ $flat->d }}" checked="false" class="main_svg_{{ $flat->id }}" onclick="ali({{ $flat->id }})" id="{{ $flat->id }}"/>
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
                                <input class="form-control" type="text" name="name_ru" value="{{ $floor->name_ru }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название UZ</label>
                                <input class="form-control" type="text" name="name_uz" value="{{ $floor->name_uz }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название EN</label>
                                <input class="form-control" type="text" name="name_kr" value="{{ $floor->name_kr }}">
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