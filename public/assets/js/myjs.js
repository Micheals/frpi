
function addAttrib() {

    var table = document.getElementById("tableAttrib");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    cell1.innerHTML = '<input name="'+ var_id +'" type="text" class="form-control" placeholder="Attribute"></input>';
    cell2.innerHTML = '<textarea class="form-control" rows="3" placeholder="Text"></textarea>';
    cell3.innerHTML = '<button onclick="addAttrib()" type="button" class="btn btn-danger"><i class="fa fa-minus-circle"></i>';
}
function addDiscount() {

    var table = document.getElementById("tableDiscount");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);

    cell1.innerHTML = '<select class="form-control"><option>--Select--</option></select>';
    cell2.innerHTML = '<input type="text" class="form-control"></input>';
    cell3.innerHTML = '<input type="text" class="form-control"></input>';
    cell4.innerHTML = '<input type="text" class="form-control"></input>';
    cell5.innerHTML = '<div class="xdisplay_inputx form-group has-feedback">'
                          +'<input style="margin-top: 9px;" type="text" class="form-control has-feedback-left datePickDrop" aria-describedby="inputSuccess2Status2">'
                          +'<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>'
                          +'<span class="sr-only">(success)</span>'
                        +'</div>';
    cell6.innerHTML = '<div class="xdisplay_inputx form-group has-feedback">'
                          +'<input style="margin-top: 9px;" type="text" class="form-control has-feedback-left datePickDrop" aria-describedby="inputSuccess2Status2">'
                          +'<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>'
                          +'<span class="sr-only">(success)</span>'
                        +'</div>';  
    cell7.innerHTML = '<button onclick="addAttrib()" type="button" class="btn btn-danger"><i class="fa fa-minus-circle"></i>';

    $('.datePickDrop').daterangepicker({
      singleDatePicker: true,
      calender_style: "picker_2"
    }, function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
    });
}

function addAdditionalImage() {

    var table = document.getElementById("tableAdditionalImage");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);//class="popbutton"

    cell1.innerHTML = '<div class="BrowseForFile"><label for="PickFileButton"><img src="../assets/images/no_image-100x100.png"/ class="addImg"></label><input id="PickFileButton" type="file"/></div>';
    cell2.innerHTML = '<input type="text" class="form-control" placeholder="Sort order"></input>';
    cell3.innerHTML = '<button onclick="addAttrib()" type="button" class="btn btn-danger"><i class="fa fa-minus-circle"></i>';

    var popupElement = '<a class="btn-sm btn-info" data-toggle="modal" data-target="#modal-image"><i class="fa fa-pencil"></i></a>';

    $('.popbutton').popover({
      animation: true,
      content: popupElement,
      html: true
    });

    $('body').on('click','.btn-toggle',function () {
      $(this).find('.btn').toggleClass('active');

      if ($(this).find('.btn-primary').length > 0) {
        $(this).find('.btn').toggleClass('btn-primary');
      }
      if ($(this).find('.btn-danger').length > 0) {
        $(this).find('.btn').toggleClass('btn-danger');
      }
      if ($(this).find('.btn-success').length > 0) {
        $(this).find('.btn').toggleClass('btn-success');
      }
      if ($(this).find('.btn-info').length > 0) {
        $(this).find('.btn').toggleClass('btn-info');
      }

      $(this).find('.btn').toggleClass('btn-default');
    });
}