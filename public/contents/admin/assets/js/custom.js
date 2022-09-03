//modal code start
$(document).ready(function(){
    $(document).on('click','#softdelete',function(){
      var deleteID=$(this).data('id');
      $('.modal_body #modal_id').val(deleteID);
    });
  });