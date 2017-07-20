partener();
  function partener() {
    // body...
    $("#partener_list_table").DataTable({
    destroy:true,
    "ajax": {
          "url":url,
          "dataSrc": "",
          "type": 'GET',
      },
      
      "order": [[ 0, "desc" ]],
      columns: [
          { data: 'image' },
          // { data: 'name' },
          { data: 'action'}
         
      ]
      
  });
  }
  
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('click', 'a.delete_partener', function(e) {
    e.preventDefault(); // does not go through with the link.
    if(confirm('Are you sure want to delete this ??')){
      var $this = $(this);

      $.post({
          type: $this.data('method'),
          url: $this.attr('href')
      }).done(function (data) {
          alert('Record Deleted Successfully');
          partener();
          console.log(data);
      });
    }
});