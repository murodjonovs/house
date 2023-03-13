@extends('layouts.dashboard.main')
@section('content')
    {{-- @dd($flat); --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-11">
                            <h5> Слайдеры : </h5>
                        </div>
                    </div>
                </div>
                <form action="{{ route('dashboard.mainslider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Фото</label>
                                    <div class="col-12 text-center">
                                        {{-- <img src="{{ $flat->photo }}" alt="" style="height: 350px;"> --}}
                                    </div>
                                    <input class="form-control mt-2" type="file" name="photo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">Название RU</label>
                                    <input class="form-control" type="text" name="name_ru" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">Название UZ</label>
                                    <input class="form-control" type="text" name="name_uz">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">Название Kr</label>
                                    <input class="form-control" type="text" name="name_kr">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Параметры | <button class="btn btn-xs btn-success" onclick="add()" type="button">+</button></h5>

                        <input type="hidden" id="id" value="0">
                        <div class="row">
                            <div class="rooms">
                                
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

@section('scripts')
    <script>
        let id = $('#id').val();
        function add() {
            $('.rooms').append(
                '<div class="row mt-2" id="'+id+'">\n' +
                '<div class="col-md-8">\n' +
                '<label class="form-label">Название</label>\n' +
                '<input class="form-control" type="text" name="parametrs['+id+'][name]" required>\n' +
                '</div>\n' +
                '<div class="col-md-3">\n' +
                '<label class="form-label">Площадь</label>\n' +
                '<input class="form-control" type="text" name="parametrs['+id+'][area]" required>\n' +
                '</div>\n' +
                '<div class="col-md-1 mt-1">\n' +
                '<div class="row mt-4">\n' +
                '<button class="btn btn-danger" onclick="remove('+id+')" type="button">-</button>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>')
            id++;
        }
        function remove(id) {
            $('#'+id).remove();
        }

    </script>
@endsection
