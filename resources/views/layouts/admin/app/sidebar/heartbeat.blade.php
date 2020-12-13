<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-12-12
 * Time: 10:33
 */
?>

<!-- Heartbeat -->
<li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-opened has-active">
    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#"
       data-hssm-target="#heartbeat">

        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
            <i class="hs-admin-heart"></i>
        </span>
        <span class="media-body align-self-center">Heartbeat</span>
        <span class="d-flex align-self-center u-side-nav--control-icon">
            <i class="hs-admin-angle-right"></i>
        </span>
        <span class="u-side-nav--has-sub-menu__indicator"></span>
    </a>

    <!-- Heartbeat: Submenu-1 -->
    <ul id="heartbeat" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0"
        style="display: block;">

        <!-- Check Pulse -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
               href="{{route('admin.heartbeat.check-entity')}}">
                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                    <i class="hs-admin-check"></i>
                </span>
                <span class="media-body align-self-center">Check Entity</span>
            </a>
        </li>
        <!-- End Check Pulse -->

        <!-- Send Pulse -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12"
               href="{{route('admin.heartbeat.send-pulse')}}">
                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                    <i class="hs-admin-pulse"></i>
                </span>
                <span class="media-body align-self-center">Send Pulse</span>
            </a>
        </li>
        <!-- End Send Pulse -->

    </ul>
    <!-- End Heartbeat: Submenu-1 -->
</li>
<!-- End Heartbeat -->
