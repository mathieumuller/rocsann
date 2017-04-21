$(function(){
    $("form[name='creation_criteria']").on("change", function(){
        $("#creation_criteria_search").trigger("click");
    });
});