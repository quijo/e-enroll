$(document).ready(function(){
    //the table id  .DataTable is a function
var table = $('#datatable').DataTable();
//start edit record .edit class of of updtate button
table.on('click', '.edit', function(){

$tr =$(this).closest('tr');
if ($($tr).hasClass('child')){
$tr = $tr.prev('.parent');

}

var data = table.row($tr).data();
console.log(data);


// $('#created_at').val(data[1]);
// $('#First_Name').val(data[2]);
// $('#Last_Name').val(data[3]);
// $('#Gender').val(data[4]);
// $('#Grade_Level').val(data[5]);
// $('#Parents_Contact').val(data[6]);
// $('#Parents_Email').val(data[7]);
// $('#Status').val(data[8]);


$('#edit_status_form').attr('action', '/students/' + data[0]);
$('#edit_modal').modal('show');
});
})
