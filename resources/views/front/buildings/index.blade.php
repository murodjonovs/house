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
                        <svg width="24" height="24" viewBox="{{ $building->view_box }}" fill="none" xmlns="http://www.w3.org/2000/svg">
                            @foreach($building->floors as $floor)
                                <path d="{{ $floor->d }}" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            @endforeach
                        </svg>
                    </a>
                    <!-- /.planing__back -->
                    <div class="planing__flats">
                        @foreach($building->floors as $floor)
                            <a href="" class="planing__flat general-M">{{ $floor->id }}</a>
                        @endforeach
                        <!-- /.planing__flat -->
                    </div>
                    <!-- /.planing__flats -->
                    <div class="planing__container">
                        <div class="planing__house">
                            <img src="{{ $building->photo }}" alt="House">
                            <svg width="522" height="498" viewBox="{{ $building->view_box }}" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                                @foreach ($building->floors as $floor)
                                    <a href="" id="flat__path-1"
                                        data-flat="/img/flat/1.png"
                                        data-flat-name="2х комнатная"
                                        data-flat-subtitle="Вторая фаза, 07 дом, 9 этаж">
                                        <path
                                            onmouseleave="mouseLeavePlaning()"
                                            onmouseenter="mouseEnterPlaning(1, '49', '4', '48')"
                                            opacity="0.5" d="{{ $floor->d }}" fill="#0FA85F"/>
                                    </a>
                                @endforeach
                            </svg>
                        </div>
                        <!-- /.planing__house -->
                        <div class="planing__box">
                            <p class="planing__box-info general-M">
                                <span id="planing__floor" class="general-Db"></span>
                                квартира
                            </p>
                            <p class="planing__box-info general-M">
                                <span id="planing__room" class="general-Db"></span>
                                комнат
                            </p>
                            <p class="planing__box-info general-M">
                                <span id="planing__square" class="general-Db"></span>
                                площадь
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
        <!-- /.section__planing -->
        <!-- /.popup__plan -->
    </div>
    <!-- /.wrapper -->
@endsection

@section('script')
    <script src="/js/fancybox.umd.js"></script>
    <script>
        function mouseLeave() {
            document.querySelector(".house__popup").style.visibility = 'hidden';
        }
        function mouseEnter(id, floor, flat) {
            var left = document.querySelector("#house__path-"+id).getBoundingClientRect().right;
            var top = document.querySelector("#house__path-"+id).getBoundingClientRect().top;
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

        function mouseLeavePlaning() {
        }
        function mouseEnterPlaning(id, floor, room, square) {
            $('#planing__floor').text(floor);
            $('#planing__room').text(room);
            $('#planing__square').text(square);

        }



        if($(window).width() <= 768.98) {
            $('.section__house').scrollLeft(300);
        }

        $('.planing__house svg a').on('click', function (event){
            event.preventDefault();
            $('.popup__back').slideDown('200');

            let planImg = $(this).attr('data-flat');
            let planName = $(this).attr('data-flat-name');
            let planSubtitle = $(this).attr('data-flat-subtitle');

            $('.plan__img').attr('src', planImg);
            $('.plan__title').text(planName);
            $('.plan__subtitle').text(planSubtitle);

            setTimeout(function (){
                $('.popup__plan').animate({
                    right: '0',
                    opacity: '1'
                }).css("visibility", "visible");
            }, 200)
        })

        $('.plan__close').click(()=> {
            $('.popup__plan').animate({
                right: '-21%',
                opacity: '0',
            });
            setTimeout(()=> {
                $('.popup__plan').css("visibility", "hidden")
                $('.popup__back').slideUp('200');
            }, 250)
        })
    </script>
@endsection
