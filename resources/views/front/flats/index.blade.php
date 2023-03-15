@extends('layouts.front.main')
@section('style')
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection
@section('content')
    <div class="wrapper">
        <section class="section__planing" style="display: block">
            <div class="general__container">
                <div class="planing">

                    <a href="" class="planing__back">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 8L10 12L14 16" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <!-- /.planing__back -->
                    <div class="planing__flats">
                        @foreach ($floors as $floor)
                            <a href="" class="planing__flat general-M">{{$floor['name_'.$lang]}}</a>
                        @endforeach
                        <!-- /.planing__flat -->
                    </div>
                    <!-- /.planing__flats -->
                    <div class="planing__container">
                        <div class="planing__house">
                            <img src="/img/genplan/2.png" alt="House">
                            <svg width="522" height="498" viewBox="{{$floor->view_box}}" preserveAspectRatio="none"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                @foreach ($floor->flats as $flat)
                                    <a href="" id="flat__path-1" data-flat="{{$flat->photo}}"
                                        data-flat-name="{{$flat['name_'.$lang]}}" data-flat-subtitle="Вторая фаза, 07 дом, 9 этаж" data-rooms="">
                                        <path onmouseleave="mouseLeavePlaning()"
                                            onmouseenter="mouseEnterPlaning(1, '{{ $flat['name_'.$lang] }}', '{{ $flat->room_count }}', '{{ $flat->long_area }}')" opacity="0.5"
                                            d="{{$flat->d}}" fill="#0FA85F" />
                                    </a>
                                @endforeach
                            </svg>
                        </div>
                        <!-- /.planing__house -->
                        <div class="planing__box">
                            <p class="planing__box-info general-M">
                                <span id="planing__floor" class="general-Db"></span>
                                {{__('asd.квартира')}}
                            </p>
                            <p class="planing__box-info general-M">
                                <span id="planing__room" class="general-Db"></span>
                                {{__('asd.комнат')}}
                            </p>
                            <p class="planing__box-info general-M">
                                <span id="planing__square" class="general-Db"></span>
                                {{__('asd.площадь')}}
                            </p>
                        </div>
                        <!-- /.planing__box -->
                    </div>
                    <!-- /.planing__container -->
                </div>
                <!-- /.planing -->
            </div>
            <!-- /.general__container -->
        </section>
        <div class="popup__plan">
            <span class="plan__close close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 19.1421L19.1421 4.99995" stroke="white" stroke-width="2"/>
                    <path d="M19.1426 19.1421L5.00044 4.99995" stroke="white" stroke-width="2"/>
                </svg>
            </span>
            <!-- /.close -->
            <form class="plan">
                <div class="plan__container">
                    <div class="plan__bg">
                        <img src="" alt="" class="plan__img">
                    </div>
                    <!-- /.plan__bg -->
                    <div class="plan__info">
                        <h3 class="plan__title general-Db"></h3>
                        <!-- /.plan__title -->
                        <p class="plan__subtitle general-M">Вторая фаза, 07 дом, 9 этаж</p>
                        <!-- /.plan__subtitle -->
                    </div>
                    <!-- /.plan__info -->
                    <div class="plan__content">
                        <div class="plan__content-row">
                            <p class="plan__content-name"></p>
                            <span class="plan__content-square"></span>
                        </div>
                    </div>
                </div>
                <!-- /.plan__container -->
                <button type="submit" class="plan__submit">{{__('asd.Забронировать')}}</button>
            </form>
            <!-- /.plan -->
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/fancybox.umd.js"></script>
    <script>
        function mouseLeave() {
            document.querySelector(".house__popup").style.visibility = 'hidden';
        }

        function mouseEnter(id, floor, flat) {
            var left = document.querySelector("#house__path-" + id).getBoundingClientRect().right;
            var top = document.querySelector("#house__path-" + id).getBoundingClientRect().top;
            document.querySelector(".house__popup").style.visibility = 'visible';
            $('#floor').text(floor);
            $('#flat').text(flat);
            document.querySelector(".house__popup").style.top = `${top+50}px`;
            document.querySelector(".house__popup").style.left = `${left+50}px`;
        }
        $('.house-change').click(function(e) {
            e.preventDefault();
            $('.house-main__floor').toggleClass('house-main__hide');
        });

        function mouseLeavePlaning() {}

        function mouseEnterPlaning(id, floor, room, square) {
            $('#planing__floor').text(floor);
            $('#planing__room').text(room);
            $('#planing__square').text(square);

        }



        if ($(window).width() <= 768.98) {
            $('.section__house').scrollLeft(300);
        }

        $('.planing__house svg a').on('click', function(event) {
            event.preventDefault();
            $('.popup__back').slideDown('200');

            let planImg = $(this).attr('data-flat');
            let planName = $(this).attr('data-flat-name');
            let planSubtitle = $(this).attr('data-flat-subtitle');

            $('.plan__img').attr('src', planImg);
            $('.plan__title').text(planName);
            $('.plan__subtitle').text(planSubtitle);

            setTimeout(function() {
                $('.popup__plan').animate({
                    right: '0',
                    opacity: '1'
                }).css("visibility", "visible");
            }, 200)
        })

        $('.plan__close').click(() => {
            $('.popup__plan').animate({
                right: '-21%',
                opacity: '0',
            });
            setTimeout(() => {
                $('.popup__plan').css("visibility", "hidden")
                $('.popup__back').slideUp('200');
            }, 250)
        })
    </script>
@endsection
