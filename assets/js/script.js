$('.groupBtn').on('click', '.btn', function(){
    resetBtns();
    $(this).addClass('activeBtn');
});

var btnOnClick = $('.groupBtn').find('.btn');

function resetBtns() {
    btnOnClick.each(function(){
        $(this).removeClass('activeBtn');
    });
}
