$(document).ready(function(){
    $('.star-rating .fa-star').on('click', function() {
        var onStar = parseInt($(this).data('rating'), 10);
        var stars = $(this).parent().children('.fa-star');
        console.log("click");
        for (var i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('checked');
        }
        
        for (var i = 0; i < onStar; i++) {
            $(stars[i]).addClass('checked');
        }
        
        var ratingValue = parseInt($('.star-rating .fa-star.checked').last().data('rating'), 10);
        $('.rating-value').val(ratingValue);
    });
});
