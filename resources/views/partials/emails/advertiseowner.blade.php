<!DOCTYPE html>
<html>
    <head>
        <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid blue;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
           background-color:#fff;
        }
        table#t01 th {
            background-color: blue;
            color: white;
        }
        </style>
    </head>
    <body>
    <center>
      <h1>User Info</h1>    
      <table cellpadding="5" cellspacing="5" border="1">
        <tr><td>Customer Name</td><td>{{$customerinfo->customer_name}}</td></tr>
        <tr><td>Custome Email</td><td>{{$customerinfo->customer_email}}</td></tr>
        <tr><td>Job Title</td><td>{{$customerinfo->job_title}}</td></tr>
        <tr><td>Company Name</td><td>{{$customerinfo->company_name}}</td></tr>
        <tr><td>Phone</td><td>{{$customerinfo->phone}}</td></tr>
        <tr><td>Country</td><td>{{$customerinfo->country}}</td></tr>
      </table>
      <br>
      <br>
       <h1>Product Info</h1>  

      <table id="t01">
        <tr>
          <th>Name</th>
          <th>Year</th>
          <th>Quantity</th> 
          
        </tr>
        @foreach($data as $product)
        <tr>
            <td>{{$product['name']}}</td>
            <td>{{$product['attributes']['year']}}</td>
            <td>{{$product['quantity']}}</td>

        </tr>
        @endforeach
      </table>
      
    </center>

    </body>
</html>
