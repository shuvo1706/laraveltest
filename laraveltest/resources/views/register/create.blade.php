<html>
<head>
  <title>registration</title>
  <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
	<div class="row">

        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            {{ Form::open(array('route' => 'register.store')) }}
            {!!Form::token();!!}
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">first_name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="concept" name="first_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">last_name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="amount" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status" name="password">

                        </div>
                    </div>
            {!! Form::submit('submit');!!}
                </div>
                {{ Form::close() }}

            </div>
        </div>



</body>
</html>
