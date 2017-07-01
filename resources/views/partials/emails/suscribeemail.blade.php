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

    <table id="t01">
      <tr>
        <th>Suscriber</th>
        <th>Suscribe NO.</th>
        <th>Date</th> 
        <th>Time</th>
      </tr>
      <tr>
        @foreach($todayData as $data)
          <td>{{$data->email}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->email}}</td>
        @endforeach
      </tr>
    </table>

    </body>
</html>
