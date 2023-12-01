$(function () {
    'use strict'

    const Loading = $('.loading-featured-blog')

    $('.featured-post').on('click', '.btn-category', function (event) {
        event.preventDefault()

        const $currentTarget = $(event.target)

        $('.featured-post').find('.btn-category').removeClass('active')

        $currentTarget.addClass('active')

        $.ajax({
            url: $(this).data('url'),
            method: 'GET',
            beforeSend: function () {
                Loading.show()
            },
            success: function (res) {
                $('.box-list-blogs').html(res.data)
                Loading.hide()
            },
            complete: function () {
                Loading.hide()
            }
        })
    })
})
