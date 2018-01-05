
$('.single-item').slick({
      dots: true,
      autoplay: true,
      arrows: false
});

$('.room_fare_question_mark').on('click', function() {
    $('#book_info_modal').modal({
        show: 'true'
    });
});