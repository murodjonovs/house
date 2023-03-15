@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection

@section('content')
    <div class="wrapper">
        <section class="section__house">
            <a href="/" class="house__back">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 8L10 12L14 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="general-M">Назад</span>
            </a>
            <!-- /.house__back -->
            <div class="house__main house__main-floor">
                <img src="{{ $project->photo }}" alt="House">
                <svg viewBox="{{ $project->view_box }}" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                    @foreach ($project->buildings as $building)
                        <a href="{{ route('buildings.show', $building) }}" id="house__path-1">
                            <path onmouseleave="mouseLeave()" onmouseenter="mouseEnter(1, '9', '4')" opacity="0.5" d="{{ $building->d }}" fill="var(--main-color-one)"/>
                        </a>
                    @endforeach
                </svg>
            </div>


            <div class="house__popup" style="">
                <p class="house__popup-floor general-Db"><span id="floor"></span> {{__('asd.Этаж')}}</p>
                <p class="house__popup-flat general-M"><span id="flat"></span> {{__('asd.квартир')}}</p>
            </div>
        </section>
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
