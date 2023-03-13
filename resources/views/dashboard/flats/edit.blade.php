@extends('layouts.dashboard.main')
@section('content')
{{-- @dd($flat); --}}
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-md-11">
                        <h5>Квартира: {{ $flat->name_ru }}</h5>
                    </div>
                </div>
            </div>
            <form action="{{route('dashboard.flats.update', $flat)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Планировка квартиры</label>
                                <div class="col-12 text-center">
                                    <img src="{{ $flat->photo }}" alt="" style="height: 350px;">
                                </div>
                                <input class="form-control mt-2" type="file" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название RU</label>
                                <input class="form-control" type="text" name="name_ru" value="{{ $flat->name_ru }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название UZ</label>
                                <input class="form-control" type="text" name="name_uz" value="{{ $flat->name_uz }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label">Название Kr</label>
                                <input class="form-control" type="text" name="name_kr" value="{{ $flat->name_kr }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Все площадь</label>
                                <input class="form-control" type="text" name="long_area" required value="{{ $flat->long_area }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Количество комнат</label>
                                <input class="form-control" type="number" name="room_count" value="{{ $flat->room_count }}" min="1" max="5">
                            </div>
                        </div>
                    </div>
                    <hr>
                        <h5>Комнаты | <button class="btn btn-xs btn-success" onclick="add()" type="button">+</button></h5>
                        
                        <input type="hidden" id="id" @if ($flat->rooms != null) value="{{ count($flat->rooms)+1 }}" @else value="0" @endif>
                        <div class="row">
                            <div class="rooms">
                                @if ($flat->rooms != null)
                                    @foreach ($flat->rooms as $key=>$room)
                                        <div class="row mt-2" id="{{ $key }}">
                                            <div class="col-md-8">
                                                <label class="form-label">Название</label>
                                                <input class="form-control" type="text" name="rooms[{{ $key }}][name]" value="{{ $room['name'] }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Площадь</label>
                                                <input class="form-control" type="text" name="rooms[{{ $key }}][area]" value="{{ $room['area'] }}">
                                            </div>
                                            <div class="col-md-1 mt-1">
                                                <div class="row mt-4">
                                                    <button class="btn btn-danger" onclick="remove({{ $key }})" type="button">-</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
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


@section('scripts')
    <script>
        let id = $('#id').val();
        function add() {
            $('.rooms').append(
                '<div class="row mt-2" id="'+id+'">\n' +
                '<div class="col-md-8">\n' +
                '<label class="form-label">Название</label>\n' +
                '<input class="form-control" type="text" name="rooms['+id+'][name]" required>\n' +
                '</div>\n' +
                '<div class="col-md-3">\n' +
                '<label class="form-label">Площадь</label>\n' +
                '<input class="form-control" type="text" name="rooms['+id+'][area]" required>\n' +
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