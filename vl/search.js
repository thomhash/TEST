$(function() {
    var mglass = $('.magnifying-glass');
    var form = $('.header-search-box');
    mglass.click(function() {
        if (form.is(':hidden')) {
            form.show().focus()
        }
        else { form.hide()    }
        form.animate({
            'width': form.width() == 100 ? '0px' : '100px'
        }, 'fast', function() {
            if (form.width() == 0) {
                form.hide();
            }
        });
    });
});

