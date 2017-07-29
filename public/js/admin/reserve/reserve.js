 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('change', '.update_reserve', function(e) {
    e.preventDefault(); // does not go through with the link.
    var status;
    if($(this).prop('checked')==true){
      status=1;
    }
    else{
      status=0;
    }
    var $this = $(this);
    //if(confirm('Are you sure want to delete this ??')){
      $.post({
          type: $this.data('method'),
          url: $this.attr('action'),
          data:{status:status}
      }).done(function (data) {
          
        
          console.log(data);
      });
    //}
});