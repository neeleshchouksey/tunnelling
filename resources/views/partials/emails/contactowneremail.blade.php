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
      <h1>Todays Contact</h1> 
      <table id="t01">
        <tr>
          <th>Name</th>
          <th>DEscription no.</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$todayData->name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$todayData->email}}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{$todayData->phone}}</td>
        </tr>
        <tr>
            <td>Unique No.</td>
            <td>{{$todayData->uni_contc_no}}</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>{{$todayData->company}}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{$todayData->message}}</td>
        </tr>
       
      </table>
      
    </center>

    </body>
</html>
