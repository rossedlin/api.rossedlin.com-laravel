<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-12-12
 * Time: 10:25
 */
?>

<!-- JS Global Compulsory -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/jquery-migrate/jquery-migrate.min.js"></script>

<script src="/vendor/popper.js/popper.min.js"></script>
<script src="/vendor/bootstrap/bootstrap.min.js"></script>

<script src="/vendor/cookiejs/jquery.cookie.js"></script>


<!-- jQuery UI Core -->
<script src="/vendor/jquery-ui/ui/widget.js"></script>
<script src="/vendor/jquery-ui/ui/version.js"></script>
<script src="/vendor/jquery-ui/ui/keycode.js"></script>
<script src="/vendor/jquery-ui/ui/position.js"></script>
<script src="/vendor/jquery-ui/ui/unique-id.js"></script>
<script src="/vendor/jquery-ui/ui/safe-active-element.js"></script>

<!-- jQuery UI Helpers -->
<script src="/vendor/jquery-ui/ui/widgets/menu.js"></script>
<script src="/vendor/jquery-ui/ui/widgets/mouse.js"></script>

<!-- jQuery UI Widgets -->
<script src="/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- JS Plugins Init. -->
<script src="/vendor/appear.js"></script>
<script src="/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
<script src="/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/vendor/chartist-js/chartist.min.js"></script>
<script src="/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
<script src="/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="/js/hs.core.js"></script>
<script src="/js/components/hs.side-nav.js"></script>
<script src="/js/helpers/hs.hamburgers.js"></script>
<script src="/js/components/hs.range-datepicker.js"></script>
<script src="/js/components/hs.datepicker.js"></script>
<script src="/js/components/hs.dropdown.js"></script>
<script src="/js/components/hs.scrollbar.js"></script>
<script src="/js/helpers/hs.focus-state.js"></script>
<script src="/js/components/hs.area-chart.js"></script>
<script src="/js/components/hs.donut-chart.js"></script>
<script src="/js/components/hs.bar-chart.js"></script>
<script src="/js/components/hs.pie-chart.js"></script>
<script src="/js/components/hs.popup.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of custom select
        $('.js-select').selectpicker();

        // initialization of hamburger
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of charts
        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');
        $.HSCore.components.HSPieChart.init('.js-pie-chart');

        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav', {
            afterOpen: function() {
                setTimeout(function() {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                    $.HSCore.components.HSPieChart.init('.js-pie-chart');
                }, 400);
            },
            afterClose: function() {
                setTimeout(function() {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                    $.HSCore.components.HSPieChart.init('.js-pie-chart');
                }, 400);
            }
        });

        // initialization of range datepicker
        $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

        // initialization of datepicker
        $.HSCore.components.HSDatepicker.init('#datepicker', {
            dayNamesMin: [
                'SU',
                'MO',
                'TU',
                'WE',
                'TH',
                'FR',
                'SA'
            ]
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
