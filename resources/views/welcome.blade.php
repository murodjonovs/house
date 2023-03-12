@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection
@section('content')
    <div class="preloader" style="display: none">
        <div class="preloader__logo">

        </div>
    </div>
    <div class="wrapper">
        <section class="section__main">
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
                                            <?php for ($k = 1; $k <= 4; $k++):?>
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
                                            <a href="" class="content__link general-Db">
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

        <section class="section__feedback">
            <div class="general__container">
                <div class="feedback">
                    <div class="feedback__content">
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
                    <div class="feedback__bg">
                        <img src="/img/bg/feedback.png" alt="feedback">
                    </div>
                    <!-- /.feedback__bg -->
                </div>
                <!-- /.feedback -->
            </div>
            <!-- /.general__container -->
        </section>
        <!-- /.section__feedback -->

        <section class="section__feedback">
            <div class="general__container">
                <div class="feedback">
                    <div class="feedback__content">
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
                    <div class="feedback__bg">
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
                    <div class="contact__content">
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
    </script>
@endsection
