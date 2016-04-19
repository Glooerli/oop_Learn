function autoSize() {
    var imgs = document.getElementsByClassName('item');
    var newWidth = imgs[1].clientWidth;

    $('.item').each(function(){
        $('.item').height(newWidth);
    });
}

$(document).ready(function(){
    autoSize();
});

$(window).resize(function() {
    autoSize();
});