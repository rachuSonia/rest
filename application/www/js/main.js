'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////
$(function () {
    $('#meals').on('change', function () {
        getMealById($('#meals').val());
    });
});
function getMealById(id) {
    $.get(ServerConfig.requestUrl + '/api/meals?id=' + id, detailsArticleOrder);

}
function detailsArticleOrder(article) {
    $('#target .mealName').html(article.Name);
    $('#target .mealDesc').html(article.Description);
}



