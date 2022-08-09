<!DOCTYPE html>
<html>
<head>
<title>PDF Data List</title>
</head>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
<body>
    <table class="table table-hover mb-0"> @csrf
        <thead>
           <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Phone Number</th>
              <th>Discription</th>

        </thead>
        <tbody>
            @php
            $srno = 1;
            @endphp
            @foreach ($pdf_data as $key => $value)
           <tr>
            <td>{{ $srno }}</td>
            <td>{{ $value['first_name']}}</td>
            <td>{{ $value['last_name']}}</td>
            <td>{{ $value['email']}}</td>
            <td>{{ $value['gender']}}</td>
            <td>{{ $value['phone_number']}}</td>
            <td>{{ $value['description']}}</td>




           </tr>
           @php
           $srno++;
       @endphp
       @endforeach


        </tbody>

     </table>



</body>
</html>

