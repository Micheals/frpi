function StoreAttr(){
    var route   = '/shopping-frpi/backend/attributes/store';
    var data = new FormData($('#formAttribute')[0]);
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
            var table = document.getElementById("tableAttrib");
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);


            cell1.innerHTML = data.groupLabel;
            cell2.innerHTML = data.label;
            cell3.innerHTML = data.sort_order;
            cell4.innerHTML = '<button class="btn btn-danger" type="button" onclick="removeAttr(this)" value="'+data.id+'"><i class="fa fa-trash"></i>&nbsp;Remove</button>';
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
function removeAttr(id)
{
    console.log(id.value);
    var route   = '/shopping-frpi/backend/attributes/delete-attr';

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


