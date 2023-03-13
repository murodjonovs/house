@extends('layouts.dashboard.main')
@section('content')
    {{-- @dd('asd'); --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Добавить Скачать</h5>
                </div>
                <form action="{{ route('dashboard.dowload.update', $dowloads) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <div class="col-12 text-center">
                                        <i data-feather="loader" style="height: 100px; width: 100px"></i>
                                    </div>
                                    <input class="form-control" id="exampleFormControlInput1" type="file" name="photo" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Название RU</label>
                                        <input class="form-control" type="text" name="name_ru" value="{{$dowloads->name_ru}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Название UZ</label>
                                        <input class="form-control" type="text" name="name_uz" value="{{$dowloads->name_uz}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Название Kr</label>
                                        <input class="form-control" type="text" name="name_kr" value="{{$dowloads->name_kr}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
