$('.mct-vdo .fa-youtube').on('click', function() {
    $('.mct-vdo .vdo-body').html('<iframe src="https://www.youtube.com/embed/yvRLER6dPtQ?autoplay=1" frameborder="1" allowfullscreen></iframe>');
});

$('.btn-discount img').on('click', function() {
    $('html, body').animate({
        scrollTop: $(".mct-promotion").offset().top - 100 // Means Less header height
    }, 500);
});