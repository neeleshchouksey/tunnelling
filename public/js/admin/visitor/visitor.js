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
      
      "order": [[ 0, "desc" ]],
      columns: [
          { data: 'client_ip' },
          { data: 'country'},
          { data: 'city'}
         
      ]
      
  });
  }
  
 