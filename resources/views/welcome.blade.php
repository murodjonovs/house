@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection
@section('content')
    <div class="preloader" style="display: none">
        <div class="preloader__logo">
            <svg width="176" height="46" viewBox="0 0 176 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M92.1578 6.7966V9.65992L90.9128 10.9038L92.1578 12.1478V15.0111L90.396 16.7713H81.5865V5.03653H90.396L92.1578 6.7966ZM89.1042 9.61294V7.61801H84.6408V9.61294H89.1042ZM89.1042 14.1898V12.1948H84.6408V14.1898H89.1042ZM94.5071 15.0112V5.03637H97.561V14.1898H101.79V5.03637H104.844V15.0112L103.082 16.7714H96.2693L94.5071 15.0112ZM114.592 7.61805H110.247V9.61298H116.002L117.764 11.3732V15.011L116.002 16.7713H108.954L107.193 15.011V13.2508H109.424L110.364 14.1896H114.71V12.1947H108.954L107.192 10.4344V6.7966L108.954 5.03637H116.002L117.764 6.7966V8.55684H115.532L114.592 7.61805ZM119.761 16.7714V14.4244H120.7V7.3834H119.761V5.03641H124.694V7.3834H123.754V14.4244H124.694V16.7714H119.761ZM133.973 5.03665H137.027V16.7714H134.325L129.744 10.1999V16.7714H126.69V5.03665H129.392L133.973 11.5614V5.03665ZM149.36 7.61805H142.43V9.61298H148.42V12.1947H142.43V14.1896H149.36V16.7713H141.138L139.376 15.011V5.0362H149.36L149.36 7.61805ZM159.109 7.61805H154.763V9.61298H160.518L162.28 11.3732V15.011L160.518 16.7713H153.471L151.709 15.011V13.2508H153.941L154.88 14.1896H159.226V12.1947H153.471L151.709 10.4344V6.7966L153.471 5.03637H160.518L162.28 6.7966V8.55684H160.048L159.109 7.61805ZM172.029 7.61805H167.683V9.61298H173.439L175.201 11.3732V15.011L173.439 16.7713H166.391L164.629 15.011V13.2508H166.861L167.801 14.1896H172.146V12.1947H166.391L164.629 10.4344V6.7966L166.391 5.03637H173.439L175.2 6.7966V8.55684H172.969L172.029 7.61805Z" fill="var(--main-color-one)"/>
                <path d="M92.8016 21.4043H97.4895V39.4179H92.8016V32.3924H86.3104V39.4179H81.5865L81.6225 21.4043H86.3105V28.4298H92.8016L92.8016 21.4043ZM114.257 21.4043L116.962 24.1064V36.7161L114.257 39.4181H103.8L101.095 36.7161V24.1064L103.8 21.4043H114.257ZM112.274 35.4549V25.3671H105.783V35.4549H112.274ZM120.568 36.7158V21.4039H125.256V35.4549H131.747V21.4039H136.435V36.7158L133.731 39.4179H123.273L120.568 36.7158ZM151.4 25.3669H144.729V28.4292H153.564L156.269 31.1313V36.7156L153.564 39.4176H142.746L140.041 36.7156V34.0135H143.467L144.909 35.4546H151.58V32.3923H142.745L140.041 29.6902V24.1059L142.745 21.4039H153.564L156.268 24.1059V26.808H152.842L151.4 25.3669ZM175.2 25.3669H164.563V28.4292H173.758V32.3923H164.563V35.4546H175.2V39.4176H162.579L159.875 36.7156V21.4036H175.201L175.2 25.3669Z" fill="var(--main-color-one)"/>
                <path d="M65.2696 38.5664H35.3605V36.8736H59.5971V35.6224H35.3605V21.344L56.9451 32.752L57.5345 31.648L35.3605 19.872V17.8848L56.7978 29.2192L57.3871 28.1152L35.3605 16.4864V9.0528H34.1081V15.824L30.1301 13.6896V0H28.8777V13.0272L19.0063 7.8016L0 18.2528V23.1104L4.19906 20.8288V39.8176H19.0063H34.1081V46H35.3605V39.8176H65.2696V38.5664ZM34.1081 35.6224H30.1301V18.5472L34.1081 20.6816V35.6224ZM34.1081 17.296V19.2832L30.0564 17.1488V15.1616L34.1081 17.296ZM28.8041 14.4992V16.4128L18.9326 11.2608V9.2736L28.8041 14.4992ZM8.47178 18.4736L18.9326 12.7328L28.8041 17.8848V35.5488H22.1003V28.1888H16.4279V35.6224H13.2602H8.47178V18.4736ZM28.8041 36.8736V38.5664H22.1003V36.8736H28.8041ZM30.0564 38.5664V36.8736H34.1081V38.5664H30.0564Z" fill="url(#paint0_linear_100_99)"/>
                <defs>
                    <linearGradient id="paint0_linear_100_99" x1="1.20494e-06" y1="-2" x2="63" y2="50" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DEB59C"/>
                        <stop offset="0.586458" stop-color="var(--main-color-one)"/>
                        <stop offset="0.983659" stop-color="#DEB59C"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
    <div class="wrapper">
        <section class="section__main" id="showcase">
            <div class="main">
                <div class="swiper-container main__slider">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 2; $i++):?>
                        <div class="swiper-slide">
                            <div class="main__slider-frame" data-swiper-parallax-opacity="0">
                                <div class="main__slider-photo" data-swiper-parallax="-100"
                                    data-swiper-parallax-scale="1.2">
                                    <div class="main__bg">
                                        <img src="<?php echo '/img/main/' . $i . '.jpg'; ?>" alt="photo">
                                    </div>
                                    <!-- /.main__bg -->
                                </div>
                                <div class="main__slider-caption general__container" data-swiper-parallax="0"
                                    data-swiper-parallax-opacity="0">
                                    <div class="main__slider-title general__regular" data-swiper-parallax-y="-200"
                                        data-swiper-parallax-scale=".8">
                                        <h1 class="main__title general-Db">
                                            BUSINESS HOUSE - СДЕЛАЙТЕ МЕЧТУ РЕАЛЬНОСТЬЮ
                                        </h1>
                                        <!-- /.main__title -->
                                    </div>
                                
                                    <div class="main__slider-description" data-swiper-parallax="200">
                                        <div class="main__list">
                                            <?php for ($k = 1; $k <= 3; $k++):?>
                                            <div class="main__list-box">
                                                <span class="general-M">Стоимость</span>
                                                <p class="general-Db">от 450 000 C/м²</p>
                                            </div>
                                            <!-- /.main__list-box -->
                                            <?php endfor ?>
                                        </div>
                                        <!-- /.main__list -->
                                        <div class="main__content">
                                            <a href="" class="content__link general-Db">
                                                Выбрать планировку
                                            </a>
                                            <!-- /.main__title -->
                                            <a href="#section__about" class="content__link general-Db">
                                                О проекте
                                            </a>
                                            <!-- /.main__descr -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="main__slider-pagination"></div>
            </div>
            <!-- /.main -->
        </section>
        <!-- /.section__main -->

        <section class="section__about" id="about">
            <div class="general__container">
                <div class="about" id="section__about">
                    <div class="about__info" data-aos="fade-right">
                        <p class="general__subtitle general-R">ЖК Business House</p>
                        <!-- /.contact__subtitle -->
                        <h2 class="general__title general-Db">О проекте</h2>
                        <!-- /.contact__title -->
                        <div class="about__subtitle general-M">Business House - жилой комплекс, открывающий серию новых современных домов Business House по ул. Шарля ме Голля.</div>
                        <!-- /.about__subtitle -->
                        <div class="about__txt general-R">Жилой комплекс обладает продуманными планировочными решениями, в которых предусмотрено множество преимуществ и удобств: мастер-спальни, гардеробные, прачечные. Сделайте мечту реальностью - становитесь обладателями комфортных и уютных квартир в BUSINESS HOUSE</div>
                        <!-- /.about__txt -->
                        <a href="" download="" class="about__download">
                            <span class="ico">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5575 11.1106L12 14.6678L8.4425 11.1106" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 3.9967V14.6682" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20.0033 16.4457C20.0033 18.4103 18.4106 20.0029 16.4458 20.0029H7.55412C5.58938 20.0029 3.99664 18.4103 3.99664 16.4457" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            </span>
                            <!-- /.ico -->
                            <span class="box">
                                <span class="box__title general-M">Скачать электронный буклет</span>
                                <!-- /.general-M -->
                                <span class="box__info general-M">
                                    Формат PDF, <span id="whole">7</span> mb
                                </span>
                                <!-- /.box__info -->
                            </span>
                            <!-- /.box -->
                        </a>
                        <!-- /.about__download -->
                    </div>
                    <!-- /.about__info -->
                    <div class="swiper-container about__slider" data-aos="fade-left">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 2; $i++):?>
                                <div class="swiper-slide">
                                    <div class="about__slider-frame" data-swiper-parallax-opacity="0">
                                        <div class="about__slider-photo" data-swiper-parallax="-100"
                                             data-swiper-parallax-scale="1.2">
                                            <img src="<?php echo '/img/main/'.$i.'.jpg'; ?>" alt="photo">
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                        <div class="about__slider-buttons">
                            <button class="about__slider-btn about__slider-prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <!-- /.about__slider-btn -->
                            <button class="about__slider-btn about__slider-next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <!-- /.about__slider-btn -->
                        </div>
                        <!-- /.about__slider-buttons -->
                    </div>
                    <!-- /.about__slider -->
                </div>
                <!-- /.about -->
                <div class="about__location">
                    <div class="location__info" data-aos="fade-right">
                        <div class="icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_100_609)">
                                    <path d="M24.9383 24.8861C28.2619 19.6707 27.8447 20.3221 27.9399 20.1859C29.1467 18.4896 29.7935 16.4586 29.7897 14.3768C29.7897 8.82439 25.2845 4.25012 19.7247 4.25012C14.1835 4.25012 9.6596 8.81599 9.6596 14.3768C9.6596 16.4693 10.3129 18.5301 11.5627 20.2596L14.5111 24.8861C11.3573 25.3705 6 26.8144 6 29.9924C6 31.1507 6.756 32.8017 10.3587 34.0897C12.8749 34.9876 16.2013 35.4823 19.7247 35.4823C26.314 35.4823 33.4493 33.624 33.4493 29.9924C33.4493 26.8135 28.0976 25.3715 24.9383 24.8861ZM13.0915 19.2535C12.0501 17.8408 11.4888 16.1317 11.4899 14.3768C11.4899 9.80066 15.1747 6.08039 19.7247 6.08039C24.2653 6.08039 27.9595 9.80252 27.9595 14.3768C27.9595 16.0839 27.4396 17.7219 26.4568 19.1144C26.3681 19.2311 26.8283 18.5171 19.7247 29.6629L13.0915 19.2535ZM19.7247 33.652C12.5268 33.652 7.83027 31.5371 7.83027 29.9933C7.83027 28.9545 10.2439 27.2475 15.5919 26.5829L18.9528 31.8563C19.0354 31.9862 19.1494 32.0931 19.2844 32.1672C19.4193 32.2413 19.5707 32.2802 19.7247 32.2802C19.8786 32.2802 20.03 32.2413 20.165 32.1672C20.2999 32.0931 20.4139 31.9862 20.4965 31.8563L23.8575 26.5829C29.2055 27.2475 31.62 28.9545 31.62 29.9924C31.62 31.5231 26.9645 33.652 19.7247 33.652Z" fill="#966C53"/>
                                    <path d="M19.7247 9.80164C18.5116 9.80287 17.3486 10.2853 16.4909 11.143C15.6331 12.0008 15.1507 13.1638 15.1495 14.3768C15.1507 15.5899 15.6331 16.7529 16.4909 17.6106C17.3486 18.4684 18.5116 18.9508 19.7247 18.952C20.9377 18.9508 22.1007 18.4684 22.9585 17.6106C23.8162 16.7529 24.2986 15.5899 24.2999 14.3768C24.2986 13.1638 23.8162 12.0008 22.9585 11.143C22.1007 10.2853 20.9377 9.80287 19.7247 9.80164ZM19.7247 17.1218C18.9971 17.1208 18.2995 16.8312 17.7851 16.3166C17.2707 15.8021 16.9814 15.1044 16.9807 14.3768C16.9814 13.6492 17.2707 12.9516 17.7851 12.437C18.2995 11.9224 18.9971 11.6329 19.7247 11.6319C20.4523 11.6326 21.1499 11.922 21.6645 12.4364C22.1791 12.9508 22.4686 13.6483 22.4696 14.3759C22.4691 15.1037 22.1799 15.8015 21.6655 16.3163C21.151 16.8311 20.4534 17.1208 19.7256 17.1218H19.7247Z" fill="#966C53"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_100_609">
                                        <rect width="28" height="31.7333" fill="white" transform="translate(6 4)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <!-- /.icon -->
                        <h4 class="name general-M">
                            <span class="txt general-M">
                                Идеальное расположение
                            </span>
                            <!-- /.txt -->
                            ЖК расположен близ пересечения проспекта Амира Темура и улицы Салам Папалам, в элитном районе столицы
                        </h4>
                        <!-- /.name -->
                    </div>
                    <!-- /.location__info -->
                    <a href="" class="location__btn" data-aos="fade-left">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.9 5V16.2M8.9 5L14.5 7.8M8.9 5L4 7.8V19L8.9 16.2M8.9 16.2L14.5 19M14.5 7.8V19M14.5 7.8L19.4 5V16.2L14.5 19" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="general-M">Смотреть на карте</span>
                    </a>
                    <!-- /.location__btn -->
                </div>
                <!-- /.about__location -->
                <ul class="about__list">
                    <li data-aos-delay="100" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/1.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Стоимость</span>
                            <!-- /.general-M -->
                            <p class="general-M">от 450 000 C/м²</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="200" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/2.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Класс</span>
                            <!-- /.general-M -->
                            <p class="general-M">Комфорт +</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="300" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/3.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Срок строительства</span>
                            <!-- /.general-M -->
                            <p class="general-M">4 кв. 2023г</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="400" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/4.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Этажность</span>
                            <!-- /.general-M -->
                            <p class="general-M">9, 15, 16, 17</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="500" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/5.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Площадь квартир</span>
                            <!-- /.general-M -->
                            <p class="general-M">от 40 до 121 м²</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="600" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/6.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Высота потолков</span>
                            <!-- /.general-M -->
                            <p class="general-M">3 метра</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="700" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/7.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Межквартирные стены</span>
                            <!-- /.general-M -->
                            <p class="general-M">Кирпич</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="800" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/8.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Паркинг</span>
                            <!-- /.general-M -->
                            <p class="general-M">Наземный крытый</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="900" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/9.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Гардеробные</span>
                            <!-- /.general-M -->
                            <p class="general-M">Есть</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="1000" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/10.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Двор</span>
                            <!-- /.general-M -->
                            <p class="general-M">Закрытый</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="1100" data-aos="fade-up">
                        <div class="ico">
                            <img src="/img/icons/11.gif" alt="ico-gif">
                        </div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Кладовые</span>
                            <!-- /.general-M -->
                            <p class="general-M">Есть</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                    <li data-aos-delay="1200" data-aos="fade-up">
                        <div class="ico"><img src="/img/icons/12.gif" alt="ico-gif"></div>
                        <!-- /.ico -->
                        <div class="content"><span class="general-M">Прачечные</span>
                            <!-- /.general-M -->
                            <p class="general-M">Есть</p>
                            <!-- /.general-M -->
                        </div>
                        <!-- /.content -->
                    </li>
                </ul>
                <!-- /.about__list -->
                <div class="about__developer" id="comerc">
                    <div class="developer" data-aos-delay="200" data-aos="fade-right">
                        <p class="general__subtitle general-R">О застройщике</p>
                        <!-- /.developer__subtitle -->
                        <h2 class="general__title general-Db">Cтроим семейные ценности вместе</h2>
                        <!-- /.developer__title -->
                        <div class="developer__txt general-R">Business House - строительная компания, занимающаяся возведением и реализацией жилых комплексов в г. Ташкент с 2004 года. Мы гордимся высоким качеством строительства, надежностью наших объектов и профессионализмом нашего коллектива. В наших домах уже живут счастливые семьи, обретают первых друзей маленькие дети и расцветает культура добрососедства.</div>
                        <!-- /.general-R -->
                        <div class="developer__txt general-R">Мы ставим перед собой амбициозные цели, разрабатываем уникальные проекты, которые наполнятся уютом домашнего очага и станут украшением любимого города</div>
                        <!-- /.general-R -->
                    </div>
                    <!-- /.developer -->
                    <div class="developer__list">
                        <div class="developer__box" data-aos-delay="100" data-aos="fade-up">
                            <h4 class="general-B">75 000</h4>
                            <!-- /.general-B -->
                            <p class="general-Db">КВАДРАТНЫХ МЕТРОВ СДАННОЙ ЖИЛОЙ НЕДВИЖИМОСТИ</p>
                        </div>
                        <!-- /.developer__box -->
                        <div class="developer__box" data-aos-delay="200" data-aos="fade-up">
                            <h4 class="general-B">18</h4>
                            <!-- /.general-B -->
                            <p class="general-Db">ЛЕТ В СФЕРЕ СТРОИТЕЛЬСТВА</p>
                        </div>
                        <!-- /.developer__box -->
                        <div class="developer__box" data-aos-delay="300" data-aos="fade-up">
                            <h4 class="general-B">7</h4>
                            <!-- /.general-B -->
                            <p class="general-Db">РЕАЛИЗОВАННЫХ, СТРОЯЩИХСЯ И ПЕРСПЕКТИВНЫХ ЖК</p>
                        </div>
                        <!-- /.developer__box -->
                        <div class="developer__box" data-aos-delay="400" data-aos="fade-up">
                            <svg width="202" height="54" viewBox="0 0 202 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M106.255 7.83632V11.1376L104.819 12.5718L106.255 14.006V17.3073L104.223 19.3368H94.0663V5.80702H104.223L106.255 7.83632ZM102.734 11.0835V8.78337H97.5879V11.0835H102.734ZM102.734 16.3604V14.0603H97.5879V16.3604H102.734ZM108.963 17.3075V5.80683H112.484V16.3604H117.36V5.80683H120.881V17.3075L118.849 19.337H110.995L108.963 17.3075ZM132.121 8.78342H127.11V11.0835H133.746L135.778 13.113V17.3073L133.746 19.3368H125.621L123.589 17.3073V15.2778H126.162L127.246 16.3602H132.256V14.0601H125.62L123.589 12.0306V7.83632L125.62 5.80683H133.746L135.777 7.83632V9.86582H133.204L132.121 8.78342ZM138.08 19.337V16.6309H139.163V8.51288H138.08V5.80688H143.767V8.51288H142.684V16.6309H143.767V19.337H138.08ZM154.466 5.80716H157.987V19.337H154.872L149.59 11.7602V19.337H146.069V5.80716H149.184L154.466 13.33V5.80716ZM172.207 8.78342H164.217V11.0835H171.123V14.0601H164.217V16.3602H172.207V19.3368H162.727L160.696 17.3073V5.80664H172.207L172.207 8.78342ZM183.447 8.78342H178.436V11.0835H185.072L187.103 13.113V17.3073L185.072 19.3368H176.946L174.915 17.3073V15.2778H177.488L178.572 16.3602H183.582V14.0601H176.946L174.915 12.0306V7.83632L176.946 5.80683H185.072L187.103 7.83632V9.86582H184.53L183.447 8.78342ZM198.343 8.78342H193.333V11.0835H199.969L202 13.113V17.3073L199.969 19.3368H191.843L189.812 17.3073V15.2778H192.385L193.468 16.3602H198.479V14.0601H191.843L189.812 12.0306V7.83632L191.843 5.80683H199.968L202 7.83632V9.86582H199.427L198.343 8.78342Z" fill="var(--main-color-one)"/>
                                <path d="M106.997 24.6783H112.402V45.4473H106.997V37.3472H99.5128V45.4473H94.0663L94.1079 24.6783H99.5129V32.7784H106.997L106.997 24.6783ZM131.735 24.6783L134.853 27.7937V42.3322L131.735 45.4476H119.678L116.559 42.3322V27.7937L119.678 24.6783H131.735ZM129.448 40.8781V29.2472H121.964V40.8781H129.448ZM139.011 42.3319V24.6778H144.416V40.8781H151.9V24.6778H157.305V42.3319L154.187 45.4473H142.13L139.011 42.3319ZM174.559 29.247H166.867V32.7778H177.054L180.172 35.8932V42.3316L177.054 45.447H164.581L161.462 42.3316V39.2162H165.412L167.075 40.8778H174.767V37.347H164.58L161.462 34.2316V27.7932L164.58 24.6778H177.053L180.172 27.7932V30.9086H176.222L174.559 29.247ZM202 29.247H189.735V32.7778H200.337V37.347H189.735V40.8778H202V45.447H187.448L184.33 42.3316V24.6775H202L202 29.247Z" fill="var(--main-color-one)"/>
                                <path d="M75.2535 44.4657H40.7694V42.514H68.7134V41.0714H40.7694V24.6089L65.6557 37.7619L66.3352 36.489L40.7694 22.9117V20.6205L65.4858 33.6887L66.1653 32.4158L40.7694 19.0082V10.4376H39.3255V18.2445L34.7389 15.7836V0H33.295V15.0199L21.9135 8.99497L0 21.0448V26.6455L4.84136 24.0149V45.9083H21.9135H39.3255V53.0364H40.7694V45.9083H75.2535V44.4657ZM39.3255 41.0714H34.7389V21.3843L39.3255 23.8452V41.0714ZM39.3255 19.9417V22.2328L34.654 19.772V17.4808L39.3255 19.9417ZM33.2101 16.7171V18.9234L21.8286 12.9833V10.6921L33.2101 16.7171ZM9.76766 21.2994L21.8286 14.6805L33.2101 20.6205V40.9865H25.4809V32.5007H18.9408V41.0714H15.2885H9.76766V21.2994ZM33.2101 42.514V44.4657H25.4809V42.514H33.2101ZM34.654 44.4657V42.514H39.3255V44.4657H34.654Z" fill="url(#paint0_linear_103_618)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_103_618" x1="1.38926e-06" y1="-2.30593" x2="72.6368" y2="57.6482" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#DEB59C"/>
                                        <stop offset="0.586458" stop-color="var(--main-color-one)"/>
                                        <stop offset="0.983659" stop-color="#DEB59C"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <!-- /.developer__box -->
                    </div>
                    <!-- /.developer__list -->
                </div>
                <!-- /.about__developer -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__about -->

        <section class="section__location">
            <div class="general__container">
                <p class="general__subtitle general-R" data-aos-delay="200" data-aos="fade-right">Расположение</p>
                <!-- /.contact__subtitle -->
                <h2 class="general__title general-Db" data-aos-delay="300" data-aos="fade-right">Территория</h2>
                <!-- /.contact__title -->
                <div class="location__buttons">
                    <a href="/genplan" class="location__btn general-M" data-aos-delay="200" data-aos="fade-right">Генплан</a>
                    <a href="" class="location__btn general-M" data-aos-delay="400" data-aos="fade-right">Показать на карте</a>
                </div>
                <!-- /.location__buttons -->
                <div class="genplan" data-aos-delay="200" data-aos="fade-up">
                    <div class="genplan__main genplan__main-floor">
                        <img src="/img/genplan/genplan.jpg" alt="House">
                        <svg viewBox="0 0 1920 969" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                            <a href="" id="genplan__path-1">
                                <path onmouseleave="mouseLeave()" onmouseenter="mouseEnter(1, '9', '4')" opacity="0.5" d="M729 279.5V253.5L805.5 236.5L814.5 249L914.5 234V225L1077 199.5L1115.5 249L1203 236.5L1241 297V368.5L1203 321L1115.5 329.5L1077 288.5L717.5 341.5V318L702.5 307.5V283.5L729 279.5Z" fill="var(--main-color-one)"/>
                            </a>
                        </svg>
                    </div>
                    <a href="/genplan" class="genplan__link general-Db">Выбрать планировку</a>
                    <!-- /.genplan__link -->
                    <div class="genplan__popup" style="">
                        <p class="genplan__popup-floor general-Db"><span id="floor"></span> Этаж</p>
                        <p class="genplan__popup-flat general-M"><span id="flat"></span> квартир</p>
                    </div>
                </div>
                <!-- /.genplan -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__location -->

        <section class="section__architect">
            <div class="general__container">
                <div class="architect">
                    <div class="architect__column">
                        <div class="column">
                            <p class="general__subtitle general-R" data-aos-delay="200" data-aos="fade-up">Архитектура</p>
                            <!-- /.contact__subtitle -->
                            <h2 class="general__title general-Db" data-aos-delay="300" data-aos="fade-up">Материалы </br>строительства</h2>
                            <!-- /.contact__title -->
                        </div>
                        <!-- /.column -->
                    </div>
                    <!-- /.architect__column -->
                    <div class="architect__content" data-aos-delay="400" data-aos="fade-left">
                        <img src="/img/bg/architect.jpg" alt="" class="architect__img">
                        <!-- /.architect__img -->
                        <div class="architect__box architect__box-1">
                            <div class="architect__btn">
                                <p class="general-M">Окна</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>
                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                        <div class="architect__box architect__box-2">
                            <div class="architect__btn">
                                <p class="general-M">Стены</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>
                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                        <div class="architect__box architect__box-3">
                            <div class="architect__btn">
                                <p class="general-M">Корзины</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>

                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                        <div class="architect__box architect__box-4">
                            <div class="architect__btn">
                                <p class="general-M">Каркас</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>

                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                        <div class="architect__box architect__box-5">
                            <div class="architect__btn">
                                <p class="general-M">Фасад</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>

                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                        <div class="architect__box architect__box-6">
                            <div class="architect__btn">
                                <p class="general-M">Лаймстоун</p>
                                <!-- /.general-M -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6312 13.2751H5V10.7249H10.6312V5H13.3677V10.7249H19V13.2751H13.3688V19H10.6323L10.6312 13.2751Z" fill="#966C53"/>
                                </svg>

                            </div>
                            <!-- /.architect__btn -->
                            <div class="architect__info general-R">клинкерная плитка,
                                фиброцементный
                                панели.</div>
                            <!-- /.architect__info -->
                        </div>
                        <!-- /.architect__box -->
                    </div>
                    <!-- /.architect__content -->
                </div>
                <!-- /.architect -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__architect -->

        <section class="section__infrstr" data-aos-delay="200" data-aos="fade-up">
            <div class="general__container">
                <div class="infrstr">

                    <div class="swiper-container infrstr__slider" data-aos-delay="200" data-aos="fade-right">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 2; $i++):?>
                            <div class="swiper-slide">
                                <div class="infrstr__slider-frame" data-swiper-parallax-opacity="0">
                                    <div class="infrstr__slider-photo" data-swiper-parallax="-100"
                                         data-swiper-parallax-scale="1.2">
                                        <img src="<?php echo '/img/main/'.$i.'.jpg'; ?>" alt="photo">
                                    </div>
                                </div>
                            </div>
                            <?php endfor ?>
                        </div>
                    </div>
                    <!-- /.infrstr__slider -->

                    <div class="infrstr__content" data-aos-delay="500" data-aos="fade-left">
                        <div class="general__top">
                            <div class="top">
                                <p class="general-R">Инфраструктура</p>
                                <!-- /.general-R -->
                                <h2 class="general-Db">Архитектура
                                    и материалы</h2>
                                <!-- /.general-Db -->
                            </div>
                            <!-- /.top -->
                            <div class="description">Благодаря комбинированному фасаду из фиброцементных панелей, клинкера и натурального камня архитектурный облик комплекса никого не оставит равнодушным. Его отличительными характерными особенностями являются функционализм, лаконичность в деталях, приверженность принципу создания комфортной среды для человека и внимание к экологии.</div>
                            <!-- /.description -->
                        </div>
                        <!-- /.general__top -->
                        <div class="general__config">
                            <div class="config__number infstr__number"></div>
                            <!-- /.config__number -->
                            <div class="config__lines">
                                <span class="config__line" id="infrstr__line"></span>
                                <!-- /.infrstr__line -->
                            </div>
                            <!-- /.config__line -->
                            <div class="general__slider-buttons">
                                <button class="general__slider-btn infrstr__slider-prev">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                                <button class="general__slider-btn infrstr__slider-next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                            </div>
                            <!-- /.about__slider-buttons -->
                        </div>
                        <!-- /.config -->
                    </div>
                    <!-- /.infrstr__content -->
                </div>
                <!-- /.infrstr -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__infrstr -->

        <section class="section__yard">
            <div class="general__container">
                <div class="yard">
                    <div class="general__top" data-aos-delay="200" data-aos="fade-right">
                        <div class="top">
                            <p class="general-R">Инфраструктура</p>
                            <!-- /.general-R -->
                            <h2 class="general-Db">Двор</h2>
                            <!-- /.general-Db -->
                        </div>
                        <!-- /.top -->
                        <div class="description">Одним из важных вопросов при выборе места для жизни являются благоустройство двора и придомовой территории. Новый формат жилья и дворовой площади, где Вы и Ваши дети будут с радостью проводить время, не переживая за собственную безопасность.</div>
                        <!-- /.description -->
                    </div>
                    <!-- /.general__top -->
                </div>
                <!-- /.yard -->
            </div>
            <!-- /.general__container -->
            <div class="yard__container" data-aos-delay="200" data-aos="fade-up">

                <div class="swiper yard__slider general__slider">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 3; $i++):?>
                        <div class="swiper-slide">
                            <div class="general__slider-photo">
                                <img src="<?php echo '/img/sliders/'.$i.'.jpg'; ?>" alt="photo">
                            </div>
                            <!-- /.yard__slider-photo -->
                        </div>
                        <?php endfor ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- /.yard__slider -->

                <div class="yard__buttons">
                    <button class="general__slider-btn yard__slider-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <!-- /.yard__slider-btn -->
                    <button class="general__slider-btn yard__slider-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <!-- /.yard__slider-btn -->
                </div>
                <!-- /.yard__buttons -->

            </div>
            <!-- /.yard__container -->
        </section>
        <!-- /.section__yard -->

        <section class="section__hall">
            <div class="general__container">
                <div class="hall">
                    <div class="hall__content" data-aos-delay="200" data-aos="fade-right">
                        <p class="general__subtitle general-R">Архитектура</p>
                        <!-- /.hall__subtitle -->
                        <h2 class="general__title general-Db">Холлы</h2>
                        <!-- /.hall__title -->
                        <div class="hall__description general-R">Уникальный дизайн просторных холлов выполнен в современном стиле с золотыми элементами. Именно в этом сочетании красоты и спокойствия Вы почувствуете себя в приятной обстановке.</div>
                        <!-- /.hall__description -->
                        <div class="general__config">
                            <div class="config__number hall__number"></div>
                            <!-- /.config__number -->
                            <div class="config__lines">
                                <span class="config__line" id="hall__line"></span>
                                <!-- /.infrstr__line -->
                            </div>
                            <!-- /.config__line -->
                            <div class="general__slider-buttons">
                                <button class="general__slider-btn hall__slider-prev">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                                <button class="general__slider-btn hall__slider-next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                            </div>
                            <!-- /.about__slider-buttons -->
                        </div>
                        <!-- /.config -->
                    </div>
                    <!-- /.infrstr__content -->

                    <div class="swiper-container hall__slider" data-aos-delay="500" data-aos="fade-left">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 2; $i++):?>
                            <div class="swiper-slide">
                                <div class="infrstr__slider-frame" data-swiper-parallax-opacity="0">
                                    <div class="hall__slider-photo" data-swiper-parallax="-100"
                                         data-swiper-parallax-scale="1.2">
                                        <img src="<?php echo '/img/main/'.$i.'.jpg'; ?>" alt="photo">
                                    </div>
                                </div>
                            </div>
                            <?php endfor ?>
                        </div>
                    </div>
                    <!-- /.infrstr__slider -->
                </div>
                <!-- /.infrstr -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__infrstr -->

        <section class="section__feedback">
            <div class="general__container">
                <div class="feedback">
                    <div class="feedback__content" data-aos-delay="200" data-aos="fade-right">
                        <h2 class="feedback__title general-Db">Получить консультацию</h2>
                        <!-- /.feedback__title -->
                        <form action="" class="feedback__form">
                            <input type="text" class="general-M" placeholder="Имя">
                            <input id="feedback__tel" name="phone" type="tel" class="form__tel general-M" required
                                placeholder="+998" pattern="^[0-9-+\s()]*$">
                            <button type="submit" class="feedback__btn general-Db">Оставить заявку</button>
                        </form>
                    </div>
                    <!-- /.feedback__content -->
                    <div class="feedback__bg" data-aos-delay="600" data-aos="fade-up">
                        <img src="/img/bg/feedback.png" alt="feedback">
                    </div>
                    <!-- /.feedback__bg -->
                </div>
                <!-- /.feedback -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__feedback -->

        <section class="section__commercial">
            <div class="general__container">
                <div class="commercial">
                    <p class="general__subtitle general-R" data-aos-delay="200" data-aos="fade-up">Инфраструктура</p>
                    <!-- /.contact__subtitle -->
                    <h2 class="general__title general-Db" data-aos-delay="500" data-aos="fade-up">Коммерческие помещения</h2>
                    <!-- /.contact__title -->
                    <div class="commercial__description general-R" data-aos-delay="600" data-aos="fade-up">Успех вашего бизнеса зависит от различных составляющих: правильная локация, оптимальный клиентопоток, высокие потолки в помещении и свободные планировки. Все это вкупе с приятным фасадом и архитектурой делают коммерческие помещения в ЖК Business House весьма привлекательными как для инвесторов, так и для будущих клиентов.</div>
                    <!-- /.commercial__description -->
                </div>
                <!-- /.commercial -->
            </div>
            <!-- /.general__container -->
            <div class="commercial__container" data-aos-delay="300" data-aos="fade-up">
                <div class="swiper commercial__slider general__slider">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i <= 3; $i++):?>
                        <div class="swiper-slide">
                            <div class="general__slider-photo">
                                <img src="<?php echo '/img/sliders/'.$i.'.jpg'; ?>" alt="photo">
                            </div>
                            <!-- /.yard__slider-photo -->
                        </div>
                        <?php endfor ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- /.yard__slider -->
                <div class="commercial__buttons">
                    <button class="general__slider-btn commercial__slider-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <!-- /.yard__slider-btn -->
                    <button class="general__slider-btn commercial__slider-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <!-- /.yard__slider-btn -->
                </div>
                <!-- /.commercial__buttons -->
            </div>
            <!-- /.yard__container -->
        </section>
        <!-- /.section__commercial -->

        <section class="section__parking">
            <div class="general__container">
                <div class="parking">

                    <div class="swiper-container parking__slider" data-aos-delay="300" data-aos="fade-right">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 2; $i++):?>
                            <div class="swiper-slide">
                                <div class="parking__slider-frame" data-swiper-parallax-opacity="0">
                                    <div class="parking__slider-photo" data-swiper-parallax="-100"
                                         data-swiper-parallax-scale="1.2">
                                        <img src="<?php echo '/img/main/'.$i.'.jpg'; ?>" alt="photo">
                                    </div>
                                </div>
                            </div>
                            <?php endfor ?>
                        </div>
                    </div>
                    <!-- /.infrstr__slider -->

                    <div class="parking__content" data-aos-delay="500" data-aos="fade-left">
                        <div class="general__top">
                            <div class="top">
                                <p class="general-R">Инфраструктура</p>
                                <!-- /.general-R -->
                                <h2 class="general-Db">Парковки
                                    и кладовые</h2>
                                <!-- /.general-Db -->
                            </div>
                            <!-- /.top -->
                            <div class="description">Позаботьтесь заранее о безопасности и уходе своего автомобиля, а также о хранении сезонных вещей. Для этого в нашем комплексе предусмотрены парковочные места и кладовые помещения. Это удобно и практично, ведь подобные приобретения - это настоящая забота не только о вещах, но и о себе любимых.</div>
                            <!-- /.description -->
                        </div>
                        <!-- /.general__top -->
                        <div class="general__config">
                            <div class="config__number parking__number"></div>
                            <!-- /.config__number -->
                            <div class="config__lines">
                                <span class="config__line" id="parking__line"></span>
                                <!-- /.infrstr__line -->
                            </div>
                            <!-- /.config__line -->
                            <div class="general__slider-buttons">
                                <button class="general__slider-btn parking__slider-prev">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 15.8794L10 11.9096L14 7.9397" stroke="#966C53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                                <button class="general__slider-btn parking__slider-next">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15.8794L14 11.9096L10 7.9397" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <!-- /.about__slider-btn -->
                            </div>
                            <!-- /.about__slider-buttons -->
                        </div>
                        <!-- /.config -->
                    </div>
                    <!-- /.infrstr__content -->
                </div>
                <!-- /.infrstr -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__parking -->

        <section class="section__choice" id="appart">
            <div class="general__container">
                <form class="choice">
                    <div class="choice__content" data-aos-delay="300" data-aos="fade-right">
                        <p class="general__subtitle general-R">Подбор квартиры</p>
                        <!-- /.contact__subtitle -->
                        <h2 class="general__title general-Db">Выберите планировку</h2>
                        <!-- /.contact__title -->
                        <div class="choice__filter">
                            <div class="choice__rooms">
                                <p class="choice__name general-M">Комнатность</p>
                                <!-- /.choice__name -->
                                <div class="choice__buttons">
                                    <?php for ($i = 1; $i <= 5; $i++):?>
                                    <button type="button" class="choice__btn general-M"><?php echo $i; ?></button>
                                    <?php endfor ?>
                                    {{--active--}}
                                </div>
                                <!-- /.choice__buttons -->
                            </div>
                            <!-- /.choice__rooms -->
                            <div class="choice__flats">
                                <p class="choice__name general-M">Доступные планировки</p>
                                <!-- /.choice__rooms -->
                                <div class="choice__container">
                                    <?php for ($i = 1; $i <= 7; $i++):?>
                                    <label for="fl-<?php echo $i; ?>"
                                           class="choice__flats-box"
                                           data-room="<?php echo $i; ?>"
                                           data-section="<?php echo $i; ?>">
                                        <input type="radio" id="fl-<?php echo $i; ?>"
                                               class="choice__input"
                                               name="choice-flat" checked>
                                        <img src="/img/flat/1.png" alt="fl-<?php echo $i; ?>">
                                        <span class="square general-M">41.71 м²</span>
                                        <!-- /.square -->
                                    </label>
                                    <?php endfor ?>
                                </div>
                                <!-- /.choice__flats -->
                            </div>
                            <!-- /.choice__flats -->
                        </div>
                        <!-- /.choice__filter -->
                    </div>
                    <!-- /.choice__content -->
                    <div class="choice__main" data-aos-delay="600" data-aos="fade-left">
                        <div class="choice__main-bg">
                            <img src="/img/flat/1.png" data-fancybox alt="" class="info__img">
                        </div>
                        <!-- /.choice__main-bg -->
                        <div class="choice__info">
                            <div class="box">
                                <div class="pocket">
                                    <h3 class="info__room general-M">1</h3>
                                    <!-- /.info__room -->
                                    <div class="box__content">
                                        <p class="general-M">Комнатная</p>
                                        <!-- /.general-M -->
                                        <span class="general-M info__square">40.39 м²</span>
                                        <!-- /.general-M -->
                                    </div>
                                    <!-- /.box__content -->
                                </div>
                                <!-- /.pocket -->
                                <div class="box__content">
                                    <p class="general-M">Секция</p>
                                    <!-- /.general-M -->
                                    <span class="general-M info__section">1-2</span>
                                    <!-- /.general-M -->
                                </div>
                                <!-- /.box__content -->
                            </div>
                            <!-- /.box -->
                            <button class="general-Db choice__submit" type="submit">Оставить заявку</button>
                        </div>
                        <!-- /.choice__info -->
                    </div>
                    <!-- /.choice__main -->
                </form>
                <!-- /.choice -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__choice -->

        <section class="section__feedback">
            <div class="general__container">
                <div class="feedback">
                    <div class="feedback__content" data-aos-delay="200" data-aos="fade-right">
                        <h2 class="feedback__title general-Db">Получить консультацию</h2>
                        <!-- /.feedback__title -->
                        <form action="" class="feedback__form">
                            <input type="text" class="general-M" placeholder="Имя">
                            <input id="feedback__tel" name="phone" type="tel" class="form__tel general-M" required
                                placeholder="+998" pattern="^[0-9-+\s()]*$">
                            <button type="submit" class="feedback__btn general-Db">Оставить заявку</button>
                        </form>
                    </div>
                    <!-- /.feedback__content -->
                    <div class="feedback__bg" data-aos-delay="600" data-aos="fade-up">
                        <img src="/img/bg/feedback.png" alt="feedback">
                    </div>
                    <!-- /.feedback__bg -->
                </div>
                <!-- /.feedback -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__feedback -->

        <section class="section__contact">
            <div class="general__container">
                <div class="contact">
                    <div class="contact__content" data-aos-delay="300" data-aos="fade-right">
                        <p class="general__subtitle general-R">Контакты</p>
                        <!-- /.contact__subtitle -->
                        <h2 class="general__title general-Db">Свяжитесь с нами</h2>
                        <!-- /.contact__title -->
                        <div class="contact__container">

                            <div class="contact__box">
                                <div class="box__ico">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_158_91)">
                                            <path
                                                d="M15 26C15 26 6 20 6 13C6 10.6131 6.94821 8.32387 8.63604 6.63604C10.3239 4.94821 12.6131 4 15 4C17.3869 4 19.6761 4.94821 21.364 6.63604C23.0518 8.32387 24 10.6131 24 13C24 20 15 26 15 26Z"
                                                stroke="var(--main-color-one)" stroke-width="1.8" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M15 16C15.7956 16 16.5587 15.6839 17.1213 15.1213C17.6839 14.5587 18 13.7956 18 13C18 12.2044 17.6839 11.4413 17.1213 10.8787C16.5587 10.3161 15.7956 10 15 10C14.2044 10 13.4413 10.3161 12.8787 10.8787C12.3161 11.4413 12 12.2044 12 13C12 13.7956 12.3161 14.5587 12.8787 15.1213C13.4413 15.6839 14.2044 16 15 16Z"
                                                stroke="var(--main-color-one)" stroke-width="1.8" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_158_91">
                                                <rect width="20" height="24" fill="white"
                                                    transform="translate(5 3)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- /.box__ico -->
                                <div class="box">
                                    <a href="" class="box__content">г. Ташкент, Юнус-Абад 13, улица Ниязова 7</a>
                                    <!-- /.box__content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.contact__box -->

                            <div class="contact__box">
                                <div class="box__ico">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_158_92)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.2353 2C20.0653 2 20.8612 2.33684 21.4481 2.93641C22.035 3.53599 22.3647 4.34919 22.3647 5.19712V23.8029C22.3645 24.6507 22.0347 25.4638 21.4478 26.0633C20.861 26.6628 20.0652 26.9997 19.2353 27H10.1294C9.29952 26.9997 8.50368 26.6628 7.91686 26.0633C7.33003 25.4638 7.00025 24.6507 7 23.8029V5.19712C7 4.34919 7.3297 3.53599 7.91658 2.93641C8.50346 2.33684 9.29944 2 10.1294 2L19.2353 2ZM19.2353 3.74327H18.9501V4.03462C18.9501 5.1 18.1501 5.97212 17.1308 6.0625L16.9595 6.07019H12.4071C12.1454 6.07032 11.8862 6.01775 11.6444 5.9155C11.4026 5.81325 11.1829 5.66331 10.9979 5.47427C10.8129 5.28522 10.6661 5.06077 10.566 4.81375C10.4659 4.56672 10.4145 4.30197 10.4146 4.03462L10.4136 3.74327H10.1294C9.34447 3.74327 8.70635 4.39423 8.70635 5.19712V23.8029C8.70635 24.6048 9.34353 25.2558 10.1294 25.2558H19.2353C20.0212 25.2558 20.6584 24.6067 20.6584 23.8029V5.19712C20.6584 4.39519 20.0221 3.74327 19.2353 3.74327Z"
                                                fill="var(--main-color-one)" />
                                            <path
                                                d="M14.6838 23.95C14.8895 23.95 15.0931 23.9086 15.2831 23.8282C15.4731 23.7478 15.6458 23.6299 15.7912 23.4814C15.9366 23.3328 16.052 23.1564 16.1307 22.9623C16.2094 22.7682 16.2499 22.5601 16.2499 22.35C16.2499 22.1399 16.2094 21.9318 16.1307 21.7377C16.052 21.5436 15.9366 21.3672 15.7912 21.2186C15.6458 21.0701 15.4731 20.9522 15.2831 20.8718C15.0931 20.7914 14.8895 20.75 14.6838 20.75C14.2684 20.75 13.8701 20.9186 13.5764 21.2186C13.2827 21.5187 13.1177 21.9257 13.1177 22.35C13.1177 22.7743 13.2827 23.1813 13.5764 23.4814C13.8701 23.7814 14.2684 23.95 14.6838 23.95Z"
                                                fill="var(--main-color-one)" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_158_92">
                                                <rect width="16" height="25" fill="white"
                                                    transform="translate(7 2)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- /.box__ico -->
                                <div class="box">
                                    <span class="general-R">Телефон</span>
                                    <a href="tel:" class="box__content">+99899 900 09 09</a>
                                    <!-- /.box__content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.contact__box -->

                            <div class="contact__box">
                                <div class="box__ico">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_158_107)">
                                            <path
                                                d="M23.454 6.48505C22.3438 5.37599 21.0255 4.49718 19.5747 3.89912C18.1239 3.30105 16.5692 2.99551 15 3.00005C11.8278 2.99314 8.78257 4.24548 6.533 6.48205C5.41451 7.57771 4.52592 8.88555 3.91926 10.329C3.3126 11.7724 3.00008 13.3223 3 14.888L3 14.894C3 16.812 3.504 18.746 4.462 20.512L3.034 27L9.602 25.507C11.276 26.347 13.122 26.7871 14.995 26.7871H15C18.1719 26.7932 21.2167 25.5406 23.466 23.3041C25.744 21.0531 26.999 18.067 27 14.898C27 11.75 25.741 8.76205 23.454 6.48605V6.48505ZM15 24.9151H14.995C13.3129 24.9138 11.6576 24.4942 10.178 23.694L9.866 23.526L5.498 24.518L6.448 20.21L6.265 19.8951C5.355 18.3291 4.875 16.598 4.875 14.893C4.877 9.37105 9.42 4.87205 15 4.87205C17.695 4.87205 20.228 5.91605 22.132 7.81205C24.064 9.73405 25.127 12.251 25.126 14.897C25.124 20.4191 20.58 24.913 15 24.913L14.999 24.914L15 24.9151Z"
                                                fill="var(--main-color-one)" />
                                            <path
                                                d="M11.387 9H10.822C10.6728 9.00418 10.5259 9.03869 10.3905 9.10145C10.255 9.1642 10.1337 9.25387 10.034 9.365C9.763 9.658 9 10.363 9 11.799C9 13.235 10.058 14.623 10.207 14.817C10.354 15.012 12.249 18.052 15.25 19.222C17.744 20.193 18.25 20 18.792 19.952C19.333 19.903 20.538 19.246 20.785 18.565C21.031 17.884 21.031 17.299 20.957 17.178C20.883 17.056 20.686 16.983 20.391 16.838C20.096 16.691 18.649 15.972 18.379 15.876C18.107 15.779 17.911 15.729 17.714 16.022C17.518 16.314 16.937 16.988 16.764 17.183C16.592 17.378 16.421 17.403 16.124 17.257C15.829 17.111 14.888 16.797 13.761 15.803C12.884 15.028 12.274 14.043 12.103 13.75C11.929 13.458 12.083 13.3 12.231 13.155C12.3907 13.0013 12.5442 12.8411 12.691 12.675C12.838 12.505 12.88 12.383 12.978 12.189C13.077 11.994 13.028 11.823 12.954 11.677C12.88 11.532 12.314 10.089 12.05 9.511C11.83 9.025 11.597 9.009 11.387 9Z"
                                                fill="var(--main-color-one)" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_158_107">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(3 3)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- /.box__ico -->
                                <div class="box">
                                    <span class="general-R">WhatsApp</span>
                                    <a href="tel:" class="box__content">+99899 900 09 09</a>
                                    <!-- /.box__content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.contact__box -->

                            <div class="contact__box">
                                <div class="box__ico">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_158_96)">
                                            <path
                                                d="M19.167 4.5H9.833C8.28599 4.5 6.80235 5.11455 5.70845 6.20845C4.61455 7.30235 4 8.78599 4 10.333V19.667C4 21.214 4.61455 22.6977 5.70845 23.7916C6.80235 24.8855 8.28599 25.5 9.833 25.5H19.167C20.714 25.5 22.1977 24.8855 23.2916 23.7916C24.3855 22.6977 25 21.214 25 19.667V10.333C25 8.78599 24.3855 7.30235 23.2916 6.20845C22.1977 5.11455 20.714 4.5 19.167 4.5Z"
                                                stroke="var(--main-color-one)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M18.7 14.3391C18.7842 14.8842 18.7603 15.4406 18.6295 15.9764C18.4987 16.5123 18.2637 17.0171 17.9378 17.4622C17.6119 17.9072 17.2016 18.2837 16.7302 18.5701C16.2588 18.8565 15.7356 19.0473 15.1905 19.1316C14.6454 19.2158 14.089 19.1919 13.5531 19.0611C13.0173 18.9303 12.5124 18.6953 12.0674 18.3694C11.6224 18.0435 11.2459 17.6331 10.9595 17.1618C10.673 16.6904 10.4822 16.1672 10.398 15.6221C10.2279 14.5212 10.502 13.3977 11.1602 12.499C11.8183 11.6002 12.8066 10.9997 13.9075 10.8296C15.0084 10.6594 16.1318 10.9336 17.0306 11.5918C17.9293 12.2499 18.5299 13.2382 18.7 14.3391Z"
                                                stroke="var(--main-color-one)" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M20.333 10.3325C20.489 10.3371 20.6444 10.3103 20.7899 10.2537C20.9355 10.1972 21.0682 10.112 21.1802 10.0032C21.2922 9.89444 21.3812 9.7643 21.442 9.62049C21.5028 9.47669 21.5341 9.32215 21.5341 9.16602C21.5341 9.0099 21.5028 8.85536 21.442 8.71155C21.3812 8.56775 21.2922 8.43761 21.1802 8.32884C21.0682 8.22007 20.9355 8.13488 20.7899 8.07831C20.6444 8.02175 20.489 7.99495 20.333 7.99952C20.0295 8.00841 19.7415 8.1352 19.53 8.353C19.3184 8.57079 19.2001 8.86243 19.2001 9.16602C19.2001 9.46962 19.3184 9.76126 19.53 9.97905C19.7415 10.1968 20.0295 10.3236 20.333 10.3325Z"
                                                fill="var(--main-color-one)" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_158_96">
                                                <rect width="23" height="24" fill="white"
                                                    transform="translate(3 3)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <!-- /.box__ico -->
                                <div class="box">
                                    <span class="general-R">Instagram</span>
                                    <a href="" class="box__content">business.house</a>
                                    <!-- /.box__content -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.contact__box -->

                        </div>
                        <!-- /.contact__container -->
                        <p class="contact__txt">Оставьте заявку, и наш менеджер перезвонит Вам.
                            Живую консультацию вы сможете получить в отделе продаж
                            Business House.</p>
                        <!-- /.general__txt -->
                        <a href="" class="contact__feedback">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_158_112)">
                                    <path
                                        d="M22.844 18.271C22.812 18.244 19.127 15.622 18.132 15.783C17.652 15.868 17.378 16.195 16.828 16.85C16.739 16.956 16.526 17.209 16.361 17.389C15.125 16.9751 14.0019 16.2799 13.0803 15.3581C12.1587 14.4363 11.4637 13.3131 11.05 12.077C11.23 11.911 11.484 11.697 11.592 11.607C12.244 11.06 12.571 10.785 12.656 10.304C12.829 9.31 10.193 5.626 10.166 5.592C10.046 5.42195 9.88972 5.28065 9.7085 5.17828C9.52728 5.07591 9.3256 5.01502 9.118 5C8.05 5 5 8.955 5 9.622C5 9.661 5.056 13.597 9.91 18.534C14.84 23.382 18.777 23.437 18.815 23.437C19.481 23.437 23.438 20.387 23.438 19.32C23.4229 19.1121 23.3618 18.9101 23.259 18.7287C23.1563 18.5472 23.0145 18.3909 22.844 18.271ZM18.747 22.205C18.213 22.159 14.907 21.723 10.777 17.667C6.701 13.517 6.276 10.204 6.233 9.691C7.0388 8.42643 8.01195 7.27667 9.126 6.273C9.15 6.298 9.183 6.335 9.225 6.383C10.0786 7.549 10.8139 8.79717 11.42 10.109C11.2229 10.3075 11.0145 10.4944 10.796 10.669C10.456 10.927 10.146 11.22 9.866 11.543C9.81895 11.6091 9.78545 11.6839 9.76743 11.763C9.74941 11.8421 9.74722 11.924 9.761 12.004C9.891 12.568 10.091 13.113 10.354 13.628C11.2999 15.5684 12.8687 17.1359 14.81 18.08C15.3244 18.3443 15.8695 18.5438 16.433 18.674C16.5131 18.6883 16.5953 18.6864 16.6746 18.6684C16.754 18.6503 16.8289 18.6165 16.895 18.569C17.218 18.289 17.512 17.976 17.772 17.636C17.965 17.406 18.222 17.099 18.32 17.013C19.6353 17.6189 20.8862 18.3556 22.054 19.212C22.105 19.255 22.141 19.288 22.165 19.31C21.1614 20.4238 20.0116 21.3966 18.747 22.202V22.205Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_158_112">
                                        <rect width="19" height="19" fill="white" transform="translate(5 5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="general-M"> Получить консультацию</span>
                        </a>
                        <!-- /.contact__feedback -->
                    </div>
                    <!-- /.contact__content -->
                    <div class="map">
                    </div>
                    <!-- /.map -->
                </div>
                <!-- /.contact -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__contact -->
    </div>
    <!-- /.wrapper -->
    @include('components.front.footer')
@endsection

@section('script')
    <script src="/js/swiper.min.js"></script>
    <script src="/js/fancybox.umd.js"></script>

    <script>
        let swiperMain = new Swiper('.main__slider', {
            slidesPerView: 1,
            speed: 800,
            parallax: true,
            loop: true,
            effect: 'fade',
            // autoplay: {
            //     delay: 2000,
            // },
            navigation: {
                prevEl: '.main__slider-prev',
                nextEl: '.main__slider-next',
            },
            pagination: {
                el: ".main__slider-pagination",
            },
        });

        let swiperAbout = new Swiper('.about__slider', {
            slidesPerView: 1,
            speed: 800,
            parallax: false,
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 2000,
            },
            navigation: {
                prevEl: '.about__slider-prev',
                nextEl: '.about__slider-next',
            },
        });

        const progressInfrstr = document.querySelector("#infrstr__line");
        let swiperInfrstr = new Swiper('.infrstr__slider', {
            slidesPerView: 1,
            speed: 800,
            parallax: false,
            loop: true,
            effect: 'fade',
            pagination: {
                el: ".infstr__number",
                type: "fraction",
            },
            autoplay: {
                delay: 2000,
            },
            navigation: {
                prevEl: '.infrstr__slider-prev',
                nextEl: '.infrstr__slider-next',
            },
            on: {
                init: function () {
                    progressInfrstr.classList.remove("animate");
                    progressInfrstr.classList.add("animate");
                },
                slideChangeTransitionStart: function () {
                    progressInfrstr.classList.remove("animate");
                },
                slideChangeTransitionEnd: function () {
                    progressInfrstr.classList.add("animate");
                }
            }
        });

        const progressHall = document.querySelector("#hall__line");
        let swiperHall = new Swiper('.hall__slider', {
            slidesPerView: 1,
            speed: 800,
            parallax: false,
            loop: true,
            effect: 'fade',
            pagination: {
                el: ".hall__number",
                type: "fraction",
            },
            autoplay: {
                delay: 2000,
            },
            navigation: {
                prevEl: '.hall__slider-prev',
                nextEl: '.hall__slider-next',
            },
            on: {
                init: function () {
                    progressHall.classList.remove("animate");
                    progressHall.classList.add("animate");
                },
                slideChangeTransitionStart: function () {
                    progressHall.classList.remove("animate");
                },
                slideChangeTransitionEnd: function () {
                    progressHall.classList.add("animate");
                }
            }
        });

        let swiperYard = new Swiper(".yard__slider", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 80,
            loop: true,
            navigation: {
                prevEl: '.yard__slider-prev',
                nextEl: '.yard__slider-next',
            },
        });

        let swiperCommercial = new Swiper(".commercial__slider", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 80,
            loop: true,
            navigation: {
                prevEl: '.commercial__slider-prev',
                nextEl: '.commercial__slider-next',
            },
        });

        const progressparking = document.querySelector("#parking__line");
        let swiperParking = new Swiper('.parking__slider', {
            slidesPerView: 1,
            speed: 800,
            parallax: false,
            loop: true,
            effect: 'fade',
            pagination: {
                el: ".parking__number",
                type: "fraction",
            },
            autoplay: {
                delay: 2000,
            },
            navigation: {
                prevEl: '.parking__slider-prev',
                nextEl: '.parking__slider-next',
            },
            on: {
                init: function () {
                    progressparking.classList.remove("animate");
                    progressparking.classList.add("animate");
                },
                slideChangeTransitionStart: function () {
                    progressparking.classList.remove("animate");
                },
                slideChangeTransitionEnd: function () {
                    progressparking.classList.add("animate");
                }
            }
        });

        function mouseLeave() {
            document.querySelector(".genplan__popup").style.visibility = 'hidden';
        }
        function mouseEnter(id, floor, flat) {
            var left = document.querySelector("#genplan__path-"+id).getBoundingClientRect().left;
            var top = document.querySelector("#genplan__path-"+id).getBoundingClientRect().top;
            document.querySelector(".genplan__popup").style.visibility = 'visible';
            $('#floor').text(floor);
            $('#flat').text(flat);
            document.querySelector(".genplan__popup").style.top = `${top-250}px`;
            document.querySelector(".genplan__popup").style.left = `${left+50}px`;
        }
        $('.house-change').click(function(e) {
            e.preventDefault();
            $('.house-main__floor').toggleClass('house-main__hide');
        });


        if($(window).width() <= 768.98) {
            $('.house').scrollLeft(300);
        }

        $('.choice__container input.choice__input').on('change', function() {
            $('label.choice__flats-box').removeClass('active')
            $(this).parent().addClass('active')

            let inChecked = $('input[name=choice-flat]:checked');
            let inCheckedVal = $('input[name=choice-flat]:checked').val();

            let prImg = inChecked.parent().children().find('img').attr('src');
            let prSquare = inChecked.parent().children().find('.square').html();
            let prRoom = inChecked.parent().attr('data-room');
            let prSection = inChecked.parent().attr('data-section');
            $('.info__img').attr('src', prImg);
            $('.info__room').html(prRoom);
            $('.info__square').html(prSquare);
            $('.info__section').html(prSection);
            setTimeout(function() {
                // $('#calculation__products').load('/load/products/'+inCheckedVal);
            }, 250)

            console.log([prRoom, prSquare, prSection, prImg])
        });


    </script>

@endsection
