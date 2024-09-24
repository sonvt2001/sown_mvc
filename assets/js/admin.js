$('.list-item').on('click', '.list-link', function(){
    resertLinkChecked();
    $(this).addClass('active');
})

var fillterLinks = $('.list-item').find('.list-link');

function resertLinkChecked() {
    fillterLinks.each(function(){
        $(this).removeClass('active');
    })
}