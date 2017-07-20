advertiser();
  function advertiser () {
    // body...
    $("#advister_list_table").DataTable({
    destroy:true,
    "ajax": {
          "url":url,
          "dataSrc": "",
          "type": 'GET',
      },
      
      "order": [[ 0, "desc" ]],
      columns: [
          { data: 'advertiser' },
          { data: 'action'}
         
      ]
      
  });
  }
  
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('click', 'a.delete_advertiser', function(e) {
    e.preventDefault(); // does not go through with the link.

    var $this = $(this);
    if(confirm('Are you sure want to delete this ??')){
      $.post({
          type: $this.data('method'),
          url: $this.attr('href')
      }).done(function (data) {
          alert('Record Deleted Successfully');
          advertiser();
          console.log(data);
      });
    }
});