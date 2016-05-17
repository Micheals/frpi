function StoreDiscount(){
    var route   = '/shopping-frpi/backend/discounts/store';
    var data = new FormData($('#formDiscount')[0]);
    $.ajax({
        url:route,
        type:'POST',
        dataType:'json',
        processData:false,
        contentType:false,
        data:data,
        success:function(data){
            console.log(data.label);
            $('#quantity').val("");
            $('#priority').val("");
            $('#price').val("");
            $('#start_at').val("");
            $('#end_at').val("");
            var table = document.getElementById("tableDiscount");
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);


            cell1.innerHTML = data.customerGroup;
            cell2.innerHTML = data.quantity;
            cell3.innerHTML = data.priority;
            cell4.innerHTML = data.price;
            cell5.innerHTML = data.start_at;
            cell6.innerHTML = data.end_at;
            cell7.innerHTML = '<button class="btn btn-danger" type="button" onclick="removeDiscount(this)" value="'+data.id+'"><i class="fa fa-trash"></i>&nbsp;Remove</button>';
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
function removeDiscount(id)
{
    console.log(id.value);
    var route   = '/shopping-frpi/backend/discounts/delete-discount';

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