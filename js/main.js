$(document).ready(function () {
    var $aside = $('#rulesNav');
    var originalOffset = $aside.offset().top;

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var newOffset = originalOffset - scrollTop;
        $aside.css('margin-top', Math.max(newOffset, 20)); // ограничиваем минимальное значение top до 20px
    });
});


$(document).ready(function() {
    // Скрыть блок с правилами, последними темами и информацией о сервере при загрузке страницы
    $("#rulesBlock, #forumBlock, #serverInfoBlock, #contactsBlock, #rulesNav, #jobsBlock,  #navJobs").hide();

    // Обработка нажатия на ссылку "Правила"
    $("#showRules").click(function() {
        // Скрыть блок с последними темами, информацией о сервере и контактами
        $("#forumBlock, #serverInfoBlock, #contactsBlock, #jobsBlock, #navJobs").hide();
        // Показать блок с правилами
        $("#rulesBlock, #rulesNav").show();
    });

    // Обработка нажатия на ссылку "Форум"
    $("#showForum").click(function() {
        // Скрыть блок с правилами, информацией о сервере и контактами
        $("#rulesBlock, #serverInfoBlock, #contactsBlock, #rulesNav, #jobsBlock, #navJobs").hide();
        // Показать блок с последними темами
        $("#forumBlock").show();
    });

    // Обработка нажатия на ссылку "Информация о сервере"
    $("#showServerInfo").click(function() {
        // Скрыть блок с правилами, последними темами и контактами
        $("#rulesBlock, #forumBlock, #contactsBlock, #rulesNav, #jobsBlock, #navJobs").hide();
        // Показать блок с информацией о сервере
        $("#serverInfoBlock").show();
    });

    // Обработка нажатия на ссылку "Контакты"
    $("#showContacts").click(function() {
        // Скрыть блок с правилами, последними темами и информацией о сервере
        $("#rulesBlock, #forumBlock, #serverInfoBlock, #rulesNav, #jobsBlock, #navJobs").hide();
        // Показать блок с контактами
        $("#contactsBlock").show();
    });

    $("#showJobs").click(function() {
        // Скрыть блок с правилами, последними темами и информацией о сервере
        $("#rulesBlock, #forumBlock, #serverInfoBlock, #rulesNav").hide();
        // Показать блок с контактами
        $("#jobsBlock, #navJobs").show();
    });
  
});