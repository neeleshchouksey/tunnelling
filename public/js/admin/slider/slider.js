
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).on('click', 'a.delete_slider', function(e) {
    e.preventDefault(); // does not go through with the link.
  if(confirm('Are you sure want to delete this ??')){
    var $this = $(this);

    $.post({
        type: $this.data('method'),
        url: $this.attr('href')
    }).done(function (data) {
        $this.closest('tr').remove();
        alert('Record Deleted Successfully');
       // advertiser();
        console.log(data);
    });
  }
});