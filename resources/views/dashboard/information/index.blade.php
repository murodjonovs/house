@extends('layouts.dashboard.main')
@section('content')
    {{-- @dd('asd'); --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Информация Изменить</h5>
                </div>
                <form action="{{ route('dashboard.information.update', $information) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">КВАДРАТНЫХ МЕТРОВ СДАННОЙ ЖИЛОЙ НЕДВИЖИМОСТИ</label>
                                        <input class="form-control" type="text" name="area" value="{{$information->area}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">ЛЕТ В СФЕРЕ СТРОИТЕЛЬСТВА</label>
                                        <input class="form-control" type="text" name="year" value="{{$information->year}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">РЕАЛИЗОВАННЫХ, СТРОЯЩИХСЯ И ПЕРСПЕКТИВНЫХ ЖК</label>
                                        <input class="form-control" type="text" name="project_number" value="{{$information->project_number}}">
                                    </div>
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
