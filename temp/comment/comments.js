$(document).ready(function () {
    $('.reply').click(function () {

        var isFormCommentExist = $(this).next('.add-comment').html();
        //console.log(isFormCommentExist);
        if (typeof (isFormCommentExist) === 'undefined') {

            var comment_parrent_id = $(this).data('id');
            var formComment = $('.add-comment').first().clone();

            formComment.find('#comment_id_parent').val(comment_parrent_id);
            formComment.insertAfter($(this));



            $(this).parent().find('.cancel').click(function (event) {
                event.preventDefault();
                $(this).parents('.add-comment').remove();
            });
        } else {

        }

    });



    /**
     * SHOW MORE-LESS
     */
    $('ul.term-list').each(function () {
        if ($(this).find('li').length > 2) {
            $('li', this).eq(1).nextAll().hide().addClass('toggleable');
            $(this).append('<li class="more">More...</li>');
        }
        $(this).on('click', '.more', toggleShow);
    });


    function toggleShow() {
        var opened = $(this).hasClass('less');
        $(this).text(opened ? 'More...' : 'Less...').toggleClass('less', !opened);
        $(this).siblings('li.toggleable').slideToggle();
    }
    /**
     * /END SHOW MORE-LESS
     */


    /**
     * LIKES
     */
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: success,
        dataType: dataType
    });
    /**
     * /END LIKES
     */
    
    /**
     * REPORT
     */
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: success,
        dataType: dataType
    });
    /**
     * /END REPORT
     * 
     * 
     */
});