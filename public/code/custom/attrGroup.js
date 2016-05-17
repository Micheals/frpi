/**
 * Created by Jessryll on 4/22/2016.
 */
function Edit(btn){
    var route = '/shopping-frpi/backend/attr-group/edit'+btn.value();
    $.get(route, function(res){

    });
}
function store(){
    var data = new FormData($('#form')[0]);
    $('#create').attr("disabled",true);

    $.ajax({
        url:'items',
        type:'POST',
        dataType:'json',
        processData:false,
        contentType:false,
        data:data,
        success:function(data){
        },
        error:function(data){
            $('#icon_button').removeClass('fa fa-spinner fa-pulse');
            $('#icon_button').addClass('fa save');
            errorsHtml = '<ul>';
            $.each( data.responseJSON, function( key, value ) {
                errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
            });
            errorsHtml += '</ul>';
        }
    });
    $('#create').attr("disabled",false);
}

function updateRowTable(){
    var route	=	'/brands';
    $.ajax({
        url:route,
        type:'GET',
        dataType:'json',
        success: function(data){
            $(".update-table").html(data);
            $(".table tbody tr:first").css("background-color", "#FAAC58");
            setTimeout(function() {
                $(".table tbody tr:first").css({
                    "background-color":"#FFF",
                    "transition":"all 3s"});
            }, 2000);
        }
    });
}