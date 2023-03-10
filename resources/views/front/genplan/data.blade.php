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


        if($(window).width() <= 768.98) {
            $('.section__house').scrollLeft(300);
        }
    </script>
@endsection
