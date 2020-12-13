<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-09-08
 * Time: 18:27
 */
?>

        <!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.app.head')
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
        <nav class="navbar no-gutters g-pa-0">
            <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                <!-- Logo -->
                <a href="../index.html"
                   class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

                    <svg class="u-header-logo" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-78.000000, -19.000000)">
                                <g transform="translate(78.000000, 19.000000)">
                                    <path class="g-fill-primary"
                                          d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z"></path>
                                    <path class="g-fill-white"
                                          d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z"></path>
                                    <path class="g-fill-white"
                                          d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>


                </a>
                <!-- End Logo -->

                <!-- Sidebar Toggler -->
                <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#"
                   data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini"
                   data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true"
                   data-hssm-target="#sideNav">
                    <i class="hs-admin-align-left"></i>
                </a>
                <!-- End Sidebar Toggler -->
            </div>

            <!-- Top Search Bar -->
            <form id="searchMenu" class="u-header--search col-sm g-py-12 g-ml-15--sm g-ml-20--md g-mr-10--sm"
                  aria-labelledby="searchInvoker" action="#!">
                <div class="input-group g-max-width-450--sm">
                    <input class="form-control h-100 form-control-md g-rounded-4 g-pr-40" type="text"
                           placeholder="Enter search keywords">
                    <button type="submit"
                            class="btn u-btn-outline-primary g-brd-none g-bg-transparent--hover g-pos-abs g-top-0 g-right-0 d-flex g-width-40 h-100 align-items-center justify-content-center g-font-size-18 g-z-index-2">
                        <i class="hs-admin-search"></i>
                    </button>
                </div>
            </form>
            <!-- End Top Search Bar -->

            <!-- Messages/Notifications/Top Search Bar/Top User -->
            <?php /*
            <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                <!-- Top Messages -->
                <div class="g-pos-rel g-hidden-sm-down g-mr-5">
                    <a id="messagesInvoker"
                       class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
                       href="#" aria-controls="messagesMenu" aria-haspopup="true" aria-expanded="false"
                       data-dropdown-event="click" data-dropdown-target="#messagesMenu"
                       data-dropdown-type="css-animation" data-dropdown-duration="300"
                       data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">7</span>
                        <i class="hs-admin-comment-alt g-absolute-centered"></i>
                    </a>

                    <!-- Top Messages List -->
                    <div id="messagesMenu" class="g-absolute-centered--x g-width-340 g-max-width-400 g-mt-17 rounded"
                         aria-labelledby="messagesInvoker">
                        <div class="media u-header-dropdown-bordered-v1 g-pa-20">
                            <h4 class="d-flex align-self-center text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                                3 new messages</h4>
                            <div class="media-body align-self-center text-right">
                                <a class="g-color-secondary" href="#">View All</a>
                            </div>
                        </div>

                        <ul class="p-0 mb-0">
                            <!-- Top Messages List Item -->
                            <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                <div class="d-flex g-mr-15">
                                    <img class="g-width-40 g-height-40 rounded-circle" src="/img-temp/100x100/img5.jpg"
                                         alt="Image Description">
                                </div>

                                <div class="media-body">
                                    <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Verna Swanson</a>
                                    </h5>
                                    <p class="g-mb-10">Not so many years businesses used to grunt at using</p>

                                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                                        <i class="hs-admin-time icon-clock g-mr-5"></i>
                                        <small>5 Min ago</small>
                                    </em>
                                </div>
                                <a class="u-link-v2" href="#">Read</a>
                            </li>
                            <!-- End Top Messages List Item -->

                            <!-- Top Messages List Item -->
                            <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                <div class="d-flex g-mr-15">
                                    <img class="g-width-40 g-height-40 rounded-circle" src="/img-temp/100x100/img6.jpg"
                                         alt="Image Description">
                                </div>

                                <div class="media-body">
                                    <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Eddie Hayes</a></h5>
                                    <p class="g-mb-10">But today and influence of is growing right along
                                        illustration</p>

                                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                                        <i class="hs-admin-time icon-clock g-mr-5"></i>
                                        <small>22 Min ago</small>
                                    </em>
                                </div>
                                <a class="u-link-v2" href="#">Read</a>
                            </li>
                            <!-- End Top Messages List Item -->

                            <!-- Top Messages List Item -->
                            <li class="media g-pos-rel u-header-dropdown-item-v1 g-pa-20">
                                <div class="d-flex g-mr-15">
                                    <img class="g-width-40 g-height-40 rounded-circle" src="/img-temp/100x100/img7.jpg"
                                         alt="Image Description">
                                </div>

                                <div class="media-body">
                                    <h5 class="g-font-size-16 g-font-weight-400 g-mb-5"><a href="#">Herbert Castro</a>
                                    </h5>
                                    <p class="g-mb-10">But today, the use and influence of illustrations is growing
                                        right along</p>

                                    <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-lightblue-v2">
                                        <i class="hs-admin-time icon-clock g-mr-5"></i>
                                        <small>15 Min ago</small>
                                    </em>
                                </div>
                                <a class="u-link-v2" href="#">Read</a>
                            </li>
                            <!-- End Top Messages List Item -->
                        </ul>
                    </div>
                    <!-- End Top Messages List -->
                </div>
                <!-- End Top Messages -->

                <!-- Top Notifications -->
                <div class="g-pos-rel g-hidden-sm-down">
                    <a id="notificationsInvoker"
                       class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
                       href="#" aria-controls="notificationsMenu" aria-haspopup="true" aria-expanded="false"
                       data-dropdown-event="click"
                       data-dropdown-target="#notificationsMenu" data-dropdown-type="css-animation"
                       data-dropdown-duration="300" data-dropdown-animation-in="fadeIn"
                       data-dropdown-animation-out="fadeOut">
                        <i class="hs-admin-bell g-absolute-centered"></i>
                    </a>

                    <!-- Top Notifications List -->
                    <div id="notificationsMenu"
                         class="js-custom-scroll g-absolute-centered--x g-width-340 g-max-width-400 g-height-400 g-mt-17 rounded"
                         aria-labelledby="notificationsInvoker">
                        <div class="media text-uppercase u-header-dropdown-bordered-v1 g-pa-20">
                            <h4 class="d-flex align-self-center g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">
                                Notifications</h4>
                        </div>

                        <ul class="p-0 mb-0">
                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-bookmark-alt g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">A Pocket PC is a handheld computer features</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->

                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-blackboard g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">The first is a non technical method which requires</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->

                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-calendar g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">Stu Unger is of the biggest superstarsis</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->

                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-pie-chart g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">Sony laptops are among the most well known laptops</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->
                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-bookmark-alt g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">A Pocket PC is a handheld computer features</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->

                            <!-- Top Notifications List Item -->
                            <li class="media u-header-dropdown-item-v1 g-parent g-px-20 g-py-15">
                                <div class="d-flex align-self-center u-header-dropdown-icon-v1 g-pos-rel g-width-55 g-height-55 g-font-size-22 rounded-circle g-mr-15">
                                    <i class="hs-admin-blackboard g-absolute-centered"></i>
                                </div>

                                <div class="media-body align-self-center">
                                    <p class="mb-0">The first is a non technical method which requires</p>
                                </div>

                                <a class="d-flex g-color-lightblue-v2 g-font-size-12 opacity-0 g-opacity-1--parent-hover g-transition--ease-in g-transition-0_2"
                                   href="#">
                                    <i class="hs-admin-close"></i>
                                </a>
                            </li>
                            <!-- End Top Notifications List Item -->
                        </ul>
                    </div>
                    <!-- End Top Notifications List -->
                </div>
                <!-- End Top Notifications -->

                <!-- Top Search Bar (Mobi) -->
                <a id="searchInvoker"
                   class="g-hidden-sm-up text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
                   href="#" aria-controls="searchMenu" aria-haspopup="true" aria-expanded="false"
                   data-is-mobile-only="true" data-dropdown-event="click"
                   data-dropdown-target="#searchMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                   data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                    <i class="hs-admin-search g-absolute-centered"></i>
                </a>
                <!-- End Top Search Bar (Mobi) -->

                <!-- Top User -->
                <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                    <div class="g-pos-rel g-px-10--lg">
                        <a id="profileMenuInvoker" class="d-block" href="#" aria-controls="profileMenu"
                           aria-haspopup="true" aria-expanded="false" data-dropdown-event="click"
                           data-dropdown-target="#profileMenu" data-dropdown-type="css-animation"
                           data-dropdown-duration="300"
                           data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm"
                     src="/img-temp/130x130/img1.jpg" alt="Image description">
                </span>
                            <span class="g-pos-rel g-top-2">
        <span class="g-hidden-sm-down">Charlie Bailey</span>
                <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
                        </a>

                        <!-- Top User Menu -->
                        <ul id="profileMenu"
                            class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded"
                            aria-labelledby="profileMenuInvoker">
                            <li class="g-hidden-sm-up g-mb-10">
                                <a class="media g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-pos-rel g-mr-12">
          <span class="u-badge-v1 g-top-minus-3 g-right-minus-3 g-width-18 g-height-18 g-bg-secondary g-font-size-10 g-color-white rounded-circle p-0">10</span>
                    <i class="hs-admin-comment-alt"></i>
                    </span>
                                    <span class="media-body align-self-center">Unread Messages</span>
                                </a>
                            </li>
                            <li class="g-hidden-sm-up g-mb-10">
                                <a class="media g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-bell"></i>
        </span>
                                    <span class="media-body align-self-center">Notifications</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-user"></i>
        </span>
                                    <span class="media-body align-self-center">My Profile</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-rocket"></i>
        </span>
                                    <span class="media-body align-self-center">Upgrade Plan</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-layout-grid-2"></i>
        </span>
                                    <span class="media-body align-self-center">Latest Projects</span>
                                </a>
                            </li>
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-headphone-alt"></i>
        </span>
                                    <span class="media-body align-self-center">Get Support</span>
                                </a>
                            </li>
                            <li class="mb-0">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="#">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-shift-right"></i>
        </span>
                                    <span class="media-body align-self-center">Sign Out</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Top User Menu -->
                    </div>
                </div>
                <!-- End Top User -->
            </div>
            */ ?>
            <!-- End Messages/Notifications/Top Search Bar/Top User -->

            <!-- Top Activity Toggler -->
            <a id="activityInvoker"
               class="text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20"
               href="#" aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false"
               data-dropdown-event="click" data-dropdown-target="#activityMenu"
               data-dropdown-type="css-animation" data-dropdown-animation-in="fadeInRight"
               data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                <i class="hs-admin-align-right g-absolute-centered"></i>
            </a>
            <!-- End Top Activity Toggler -->
        </nav>

        <!-- Top Activity Panel -->
        <?php /*
        <div id="activityMenu"
             class="js-custom-scroll u-header-sidebar g-pos-fix g-top-0 g-left-auto g-right-0 g-z-index-4 g-width-300 g-width-400--sm g-height-100vh"
             aria-labelledby="activityInvoker">
            <div class="u-header-dropdown-bordered-v1 g-pa-20">
                <a id="activityInvokerClose" class="pull-right g-color-lightblue-v2" href="#"
                   aria-controls="activityMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click"
                   data-dropdown-target="#activityMenu" data-dropdown-type="css-animation"
                   data-dropdown-animation-in="fadeInRight"
                   data-dropdown-animation-out="fadeOutRight" data-dropdown-duration="300">
                    <i class="hs-admin-close"></i>
                </a>
                <h4 class="text-uppercase g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">Activity</h4>
            </div>

            <!-- Activity Short Stat. -->
            <section class="g-pa-20">
                <div class="media align-items-center u-link-v5 g-color-white">
                    <div class="media-body align-self-center g-line-height-1_3 g-font-weight-300 g-font-size-40">
                        624 <span class="g-font-size-16">+3%</span>
                    </div>

                    <div class="d-flex align-self-center g-font-size-25 g-line-height-1 g-color-secondary ml-auto">
                        $49,000
                    </div>

                    <div class="d-flex align-self-center g-ml-8">
                        <svg class="g-fill-white-opacity-0_5" width="12px" height="20px" viewBox="0 0 12 20"
                             version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-21.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                    <g transform="translate(20.000000, 619.000000)">
                                        <g transform="translate(1.000000, 68.000000)">
                                            <polygon
                                                    points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-33.000000, -751.000000)">
                                <g transform="translate(0.000000, 64.000000)">
                                    <g transform="translate(20.000000, 619.000000)">
                                        <g transform="translate(1.000000, 68.000000)">
                                            <polygon
                                                    transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                                    points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <span class="g-font-size-16">Transactions</span>
            </section>
            <!-- End Activity Short Stat. -->

            <!-- Activity Bars -->
            <section class="g-pa-20 g-mb-10">
                <!-- Advertising Income -->
                <div class="g-mb-30">
                    <div class="media u-link-v5  g-color-white g-mb-10">
                        <span class="media-body align-self-center">Advertising Income</span>

                        <span class="d-flex align-self-center">
          <svg class="g-fill-white-opacity-0_5" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon
                            points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                             points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                    </div>

                    <div class="progress g-height-4 g-bg-gray-light-v8 g-rounded-2">
                        <div class="progress-bar g-bg-teal-v2 g-rounded-2" role="progressbar" style="width: 70%"
                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Advertising Income -->

                <!-- Projects Income -->
                <div class="g-mb-30">
                    <div class="media u-link-v5  g-color-white g-mb-10">
                        <span class="media-body align-self-center">Projects Income</span>
                        <span class="d-flex align-self-center">
          <svg class="g-fill-red" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon
                            points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-white-opacity-0_5" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                             points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                    </div>

                    <div class="progress g-height-4 g-bg-gray-light-v8 g-rounded-2">
                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-2" role="progressbar" style="width: 40%"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Projects Income -->

                <!-- Template Sales -->
                <div>
                    <div class="media u-link-v5  g-color-white g-mb-10">
                        <span class="media-body align-self-center">Template Sales</span>
                        <span class="d-flex align-self-center">
          <svg class="g-fill-white-opacity-0_5" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-21.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon
                            points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <svg class="g-fill-lightblue-v3" width="12px" height="20px" viewBox="0 0 12 20" version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g transform="translate(-33.000000, -751.000000)">
              <g transform="translate(0.000000, 64.000000)">
                <g transform="translate(20.000000, 619.000000)">
                  <g transform="translate(1.000000, 68.000000)">
                    <polygon transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                             points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </span>
                    </div>

                    <div class="progress g-height-4 g-bg-gray-light-v8 g-rounded-2">
                        <div class="progress-bar g-bg-darkblue-v2 g-rounded-2" role="progressbar" style="width: 90%"
                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- End Template Sales -->
            </section>
            <!-- End Activity Bars -->

            <!-- Activity Accounts -->
            <section class="g-pa-20">
                <h5 class="text-uppercase g-font-size-default g-letter-spacing-0_5 g-mb-10">My accounts</h5>

                <div class="media u-header-dropdown-bordered-v2 g-py-10">
                    <div class="d-flex align-self-center g-mr-12">
                        <span class="u-badge-v2--sm g-pos-stc g-transform-origin--top-left g-bg-teal-v2"></span>
                    </div>

                    <div class="media-body align-self-center">Credit Card</div>

                    <div class="d-flex text-right">$12.240</div>
                </div>

                <div class="media u-header-dropdown-bordered-v2 g-py-10">
                    <div class="d-flex align-self-center g-mr-12">
                        <span class="u-badge-v2--sm g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3"></span>
                    </div>

                    <div class="media-body align-self-center">Debit Card</div>

                    <div class="d-flex text-right">$228.110</div>
                </div>

                <div class="media g-py-10">
                    <div class="d-flex align-self-center g-mr-12">
                        <span class="u-badge-v2--sm g-pos-stc g-transform-origin--top-left g-bg-darkblue-v2"></span>
                    </div>

                    <div class="media-body align-self-center">Savings Account</div>

                    <div class="d-flex text-right">$128.248.000</div>
                </div>
            </section>
            <!-- End Activity Accounts -->

            <!-- Activity Transactions -->
            <section class="g-pa-20">
                <h5 class="text-uppercase g-font-size-default g-letter-spacing-0_5 g-mb-10">Transactions</h5>

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-plus g-color-lightblue-v3"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$240.00</strong>
                            <p class="mb-0 g-mt-5">Addiction When Gambling Becomes</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>5 Min ago</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-minus g-color-red"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$126.00</strong>
                            <p class="mb-0 g-mt-5">Make Myspace Your</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>25 Nov 2017</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-plus g-color-lightblue-v3"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$560.00</strong>
                            <p class="mb-0 g-mt-5">Writing A Good Headline</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>22 Nov 2017</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-plus g-color-lightblue-v3"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$6.00</strong>
                            <p class="mb-0 g-mt-5">Buying Used Electronic Equipment</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>13 Oct 2017</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-plus g-color-lightblue-v3"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$320.00</strong>
                            <p class="mb-0 g-mt-5">Gambling Becomes A Problem</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>27 Jul 2017</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-minus g-color-red"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$28.00</strong>
                            <p class="mb-0 g-mt-5">Baby Monitor Technology</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i>
                            <small>05 Mar 2017</small>
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-plus g-color-lightblue-v3"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$490.00</strong>
                            <p class="mb-0 g-mt-5">Adwords Keyword Research For Beginners</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 text-uppercase g-font-size-11 g-letter-spacing-0_5 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i> 09 Feb 2017
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->

                <!-- Transaction Item -->
                <div class="u-header-dropdown-bordered-v2 g-py-20">
                    <div class="media g-pos-rel">
                        <div class="d-flex align-self-start g-pt-3 g-mr-12">
                            <i class="hs-admin-minus g-color-red"></i>
                        </div>

                        <div class="media-body align-self-start">
                            <strong class="d-block g-font-size-17 g-font-weight-400 g-line-height-1">$14.20</strong>
                            <p class="mb-0 g-mt-5">A Good Autoresponder</p>
                        </div>

                        <em class="d-flex align-items-center g-pos-abs g-top-0 g-right-0 text-uppercase g-font-size-11 g-letter-spacing-0_5 g-font-style-normal g-color-lightblue-v2">
                            <i class="hs-admin-time icon-clock g-font-size-default g-mr-8"></i> 09 Feb 2017
                        </em>
                    </div>
                </div>
                <!-- End Transaction Item -->
            </section>
            <!-- End Activity Transactions -->
        </div>
        */ ?>
        <!-- End Top Activity Panel -->

    </div>
</header>
<!-- End Header -->


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">

        @include('layouts.admin.app.sidebar')


        <div class="col-12">

            <!-- Contents -->
            <div class="row">
                <div class="col-12 m-3">
                    @yield('content')
                </div>
            </div>
            <!-- End Contents -->

            @include('layouts.admin.app.footer')
        </div>
    </div>
</main>

foot
</body>
</html>
