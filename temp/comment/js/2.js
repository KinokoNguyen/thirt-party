
            $('ul.list-group').each(function () {
        if ($(this).find('li').length > 3) {
$('li', this).eq(2).nextAll().hide().addClass('toggleable');
        $(this).append('<li class="more">More...</li>');
                }
                $(this).on('click', '.more', toggleShow);
            });

            function toggleShow() {
        var opened = $(this).hasClass('less');
        $(this).text(opened ? 'More...' : 'Less...').toggleClass('less', !opened);
        $(this).siblings('li.toggleable').slideToggle();
            }

