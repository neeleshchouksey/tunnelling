visitor();
  function visitor () {
    // body...
    $("#visitor_list_table").DataTable({
    destroy:true,
    "ajax": {
          "url":url,
          "dataSrc": "",
          "type": 'GET',
      },
      
      "ordering": false,
      columns: [
          { data: 'client_ip' },
          { data: 'country'},
          { data: 'city'},
          { data: 'date'},
          { data: 'action'},
      ] 
      
  });
  }
  
 