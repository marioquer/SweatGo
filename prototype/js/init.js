$(document).ready(function () {
    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    $(function () {
        $('.button-collapse').sideNav();
        $('.parallax').parallax();
    });
    $('ul.tabs').tabs();
});