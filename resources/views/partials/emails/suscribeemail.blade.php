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
      <h1>Todays Subscription</h1>    
      

      <table id="t01">
        <tr>
          <th>Suscriber Email</th>
          <th>Suscribe NO.</th>
          <th>Date</th> 
          <th>Time</th>
        </tr>
        @foreach($todayData as $data)
        <tr>
            <td>{{$data->email}}</td>
            <td>{{$data->uni_subs_no}}</td>
            <td>{{date('m-d-Y',strtotime($data->created_at))}}</td>
            <td>{{date('h-i-s',strtotime($data->created_at))}}</td>
        </tr>
        @endforeach
      </table>
      
    </center>

    </body>
</html>
