jQuery(document).ready(function ($) {
    $('.faq-button').click(function () {
        $(this).siblings('.faq-moreinfo').slideToggle('fast')
    })
})