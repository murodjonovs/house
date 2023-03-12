@extends('layouts.dashboard.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-md-11">
                        <h5>Bussines House</h5>
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('dashboard.buildings.index', $project->id)}}"><button class="btn btn-success mb-2" >здания</button></a>
                    </div>
                </div>
            </div>
            <form action="{{ route('dashboard.projects.update', $project) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Фото проекта</label>
                                <div class="col-12 text-center">
                                    <img src="{{ $project->photo }}" alt="" style="height: 350px;">
                                </div>
                                <input class="form-control mt-2" type="file" name="photo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput3">План svg</label>
                                <div class="col-12 text-center">
                                        <svg viewBox="{{ $project->view_box }}" xmlns="http://www.w3.org/2000/svg" style="height: 350px;">
                                            @foreach($project->buildings as $building)
                                                <path d="{{ $building->d }}" checked="false" class="main_svg_{{ $building->id }}" onclick="ali({{ $building->id }})" id="{{ $building->id }}"/>
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
                                <input class="form-control" type="text" name="name_ru" value="{{ $project->name_ru }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название UZ</label>
                                <input class="form-control" type="text" name="name_uz" value="{{ $project->name_uz }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название EN</label>
                                <input class="form-control" type="text" name="name_en" value="{{ $project->name_kr }}">
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