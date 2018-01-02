<html>
<head>
  <title>registration</title>
  <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
	<div class="row">
		<div class="span5">
            <table class="table table-striped table-condensed">
                     {!!Form::token();!!}
                  <thead>
                  <tr>
                      <th>first_name</th>
                      <th>last_name</th>
                      <th>email</th>
                      <th>password</th>
                  </tr>
              </thead>
              <tbody>
               @foreach($alldata as $data)
                <tr>

                    <td>{{$data->first_name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->email}}</td>
                        <td>{{$data->password}}</td>

                </tr>
@endforeach
</tbody>
            </table>
          {{  $alldata->render()}}
            </div>
	</div>
</div>
</body>
</html>
