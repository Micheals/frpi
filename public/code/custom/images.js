function StoreImage(){
    var route   = '/shopping-frpi/backend/images/store';
    var data = new FormData($('#formImages')[0]);
    $('#create').attr("disabled",true);
    $.ajax({
        url:route,
        type:'POST',
        dataType:'json',
        processData:false,
        contentType:false,
        data:data,
        success:function(data){
            console.log(data.label);
            $('#create').attr("disabled",false);
            //$("input:text").val("");
            $('#label').val("");
            $('#sort_order').val("");
            var table = document.getElementById("tableImage");
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            console.log(data.path);
            cell1.innerHTML = '<img src="/../../../'+data.path+'" class="img-responsive" width="80" height="80">'
            cell2.innerHTML = data.sort_order;
            cell3.innerHTML = '<button class="btn btn-danger" type="button" onclick="removeImage(this)" value="'+data.id+'"><i class="fa fa-trash"></i>&nbsp;Remove</button>';
        },
        error:function(data){
            $('#create').attr("disabled",false);
            errorsHtml = '<ul>';
            $.each( data.responseJSON, function( key, value ) {
                errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
            });
            errorsHtml += '</ul>';
        }
    });
}
function removeImage(id)
{
    console.log(id.value);
    var route   = '/shopping-frpi/backend/images/delete-image';

    $.ajax({
        url:route,
        type:'POST',
        dataType:'json',
        data:{id:id.value},
        success:function(data){
            var row = id.parentNode.parentNode;
            row.parentNode.removeChild(row);
        },
        error:function(data){
            errorsHtml = '<ul>';
            $.each( data.responseJSON, function( key, value ) {
                errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
            });
            errorsHtml += '</ul>';
        }
    });

}


/**
 * Created by Jessryll on 4/26/2016.
 */
