// item selection
$('.select_food li').click(function () {


    $(this).toggleClass('selected');
    var num  = $('.send').val();
    if($('li.selected').length < 3){

        if ($('li.selected').length == 0) {
            $('.select').removeClass('selected');
            $('.send').val( $('li.selected').length );

        } else {
            $('.select').addClass('selected');
            $('.send').val( $('li.selected').length );
        }

    }else{
        $('.send').val( $('li.selected').length );
        $(this).removeClass('selected');
        layer.msg('Can not choose more than two ');
        return false;

    }
 
    // counter();
});

// all item selection
// $('.select').click(function () {
//     if ($('li.selected').length == 0) {
//         $('li').addClass('selected');
//         $('.select').addClass('selected');
//     }
//     else {
//         $('li').removeClass('selected');
//         $('.select').removeClass('selected');
//     }
//     counter();
// });

// number of selected items
function counter() {
    if ($('li.selected').length > 0){
        $('.send').addClass('selected');
    }else{
        $('.send').removeClass('selected');
    }
    // $('.send').attr('data-counter', $('li.selected').length);
    $('.send').val( $('li.selected').length );
}
