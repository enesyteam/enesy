
$( document ).ready(function() {

    var sortColumn = $("#sortColumn").val();
    var orderColumn = $("#orderColumn").val();

    if ( sortColumn.trim() !== 'id'  ){
        if ( orderColumn.trim() === 'asc' ){
            $(".sort_"+sortColumn).removeClass("fa fa-sort");
            $(".sort_"+sortColumn).addClass("fa fa-sort-asc");
        }
        else if ( orderColumn.trim() === 'desc' ){
            $(".sort_"+sortColumn).removeClass("fa fa-sort");
            $(".sort_"+sortColumn).addClass("fa fa-sort-desc ");
        }
    }
});