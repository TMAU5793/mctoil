var waypoints = $('#waypoint1').waypoint(function() {
    $('#waypoint1').removeClass('invisible');
    $('#waypoint1').addClass('left-to-right');
}, {
    offset: '90%'
});

var waypoints = $('#waypoint2').waypoint(function() {
    $('#waypoint2').removeClass('invisible');
    $('#waypoint2').addClass('left-to-right');
}, {
    offset: '90%'
});

var waypoints = $('#waypoint3').waypoint(function() {
    $('#waypoint3').removeClass('invisible');
    $('#waypoint3').addClass('right-to-left');
}, {
    offset: '80%'
});

var waypoints = $('#waypoint4').waypoint(function() {
    $('#waypoint4').removeClass('invisible');
    $('#waypoint4').addClass('left-to-right');
}, {
    offset: '70%'
});

var waypoints = $('#waypoint5').waypoint(function() {
    $('#waypoint5').removeClass('invisible');
    $('#waypoint5').addClass('right-to-left');
}, {
    offset: '70%'
});

var waypoints = $('.slow-show').waypoint(function() {
    $('.slow-show').removeClass('invisible');
    $('.slow-show').addClass('animate-slow-show');
}, {
    offset: '70%'
});

var waypoints = $('.bnf-ltr').waypoint(function() {
    $('.bnf-ltr').removeClass('invisible');
    $('.bnf-ltr').addClass('animate-bnf-ltr');
}, {
    offset: '70%'
});

var waypoints = $('.whyour-wpt').waypoint(function() {
    $('.whyour-wpt').removeClass('invisible');
    $('.whyour-wpt').addClass('left-to-right');
}, {
    offset: '70%'
});

var waypoints = $('.vdo-ltr-wpt').waypoint(function() {
    $('.vdo-ltr-wpt').removeClass('invisible');
    $('.vdo-ltr-wpt').addClass('left-to-right');
}, {
    offset: '70%'
});

var waypoints = $('.vdo-rtl-wpt').waypoint(function() {
    $('.vdo-rtl-wpt').removeClass('invisible');
    $('.vdo-rtl-wpt').addClass('right-to-left');
}, {
    offset: '70%'
});