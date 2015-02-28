$(document).on('click', '.prev', function() {
    var active = $('.active');    
    // remove active tag
    $(active).removeClass('active');
    if ($(active).prev().length > 0) {
        $(active).prev().addClass('active');
    } else {
        $('.image').last().addClass('active');
    }
    console.log($('.image').last());
});

$(document).on('click', '.next', function() {
    var active = $('.active');    
    // remove active tag
    $(active).removeClass('active');
    if ($(active).next().length > 0) {
        $(active).next().addClass('active');
    } else {
        $('.image').first().addClass('active');
    }
    
    console.log($('.image').first());
});


document.getElementById("Stoerrelser").addEventListener('change', function () {
    window.location = this.value;
}, false); 
