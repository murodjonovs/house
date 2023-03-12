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
                <img src="/img/genplan/genplan.jpg" alt="House">
                <svg viewBox="0 0 1920 969" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                    <a href="" id="house__path-1">
                        <path onmouseleave="mouseLeave()" onmouseenter="mouseEnter(1, '9', '4')" opacity="0.5" d="M729 279.5V253.5L805.5 236.5L814.5 249L914.5 234V225L1077 199.5L1115.5 249L1203 236.5L1241 297V368.5L1203 321L1115.5 329.5L1077 288.5L717.5 341.5V318L702.5 307.5V283.5L729 279.5Z" fill="var(--main-color-one)"/>
                    </a>
                </svg>
            </div>


            <div class="house__popup" style="">
                <p class="house__popup-floor general-Db"><span id="floor"></span> Этаж</p>
                <p class="house__popup-flat general-M"><span id="flat"></span> квартир</p>
            </div>
        </section>
        <!-- /.section__house -->
        <section class="section__planing">
            <div class="general__container">
                <div class="planing">

                    <a href="" class="planing__back">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 8L10 12L14 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <!-- /.planing__back -->
                    <div class="planing__flats">
                        <?php for ($i = 1; $i <= 10; $i++):?>
                            <a href="" class="planing__flat general-M"><?php echo $i; ?></a>
                        <?php endfor ?>
                        <!-- /.planing__flat -->
                    </div>
                    <!-- /.planing__flats -->
                    <div class="planing__container">
                        <div class="planing__house">
                            <img src="/img/genplan/2.png" alt="House">
                            <svg width="522" height="498" viewBox="0 0 522 498" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <a href="" id="flat__path-1"
                                   data-flat="/img/flat/1.png"
                                   data-flat-name="2х комнатная"
                                   data-flat-subtitle="Вторая фаза, 07 дом, 9 этаж">
                                    <path
                                        onmouseleave="mouseLeavePlaning()"
                                        onmouseenter="mouseEnterPlaning(1, '49', '4', '48')"
                                        opacity="0.5" d="M296 213V0H366V12.5H438V147.5H524.5V245H339V213H296Z" fill="#0FA85F"/>
                                </a>
                                <a href="" id="flat__path-1">
                                    <path
                                        onmouseleave="mouseLeavePlaning()"
                                        onmouseenter="mouseEnterPlaning(2, '39', '4', '48')"
                                        opacity="0.5" d="M296 273L295 495C321.36 495 333.64 495.5 360 495.5V471H433.5V336.5H519.5L519.185 247H340.5V273H296Z" fill="#0FA85F"/>
                                </a>
                                <a href="" id="flat__path-1">
                                    <path
                                        onmouseleave="mouseLeavePlaning()"
                                        onmouseenter="mouseEnterPlaning(3, '19', '4', '48')"
                                        opacity="0.5" d="M230.5 281V494H168V467.5H92V335H0V249H177H230.5V281Z" fill="#0FA85F"/>
                                </a>
                                <a href="" id="flat__path-1">
                                    <path
                                        onmouseleave="mouseLeavePlaning()"
                                        onmouseenter="mouseEnterPlaning(4, '29', '4', '48')"
                                        opacity="0.5" d="M228.5 207V0H158.5V12.5H86.5V147.5H0V245H185.5L213.5 244V207H228.5Z" fill="#0FA85F"/>
                                </a>
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
                </div>
                <!-- /.plan__container -->
                <button type="submit" class="plan__submit">Забронировать</button>
            </form>
            <!-- /.plan -->
        </div>
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
