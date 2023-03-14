

@foreach ($flats as $flat)
    
<label for="fl-{{$flat->id}}" class="choice__flats-box"
    data-room="{{$flat->id}}" data-section="{{$flat->id}}">
    <input type="radio" id="fl-{{$flat->id}}" class="choice__input"
        name="choice-flat" checked>
    <img src="{{$flat->photo}}" alt="fl-{{$flat->id}}">
    <span class="square general-M">{{$flat->long_area}} м²</span>
    <!-- /.square -->
</label>
@endforeach
