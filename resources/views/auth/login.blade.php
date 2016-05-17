<!DOCTYPE html>
<html>
<head>
    <title>FRPI</title>
    @include('auth.head')
</head>
<body>
<br>
<div class="container">
    <br><br>
    <div class="col-md-offset-3 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Authentication
                </h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="form-group">
                                Email
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                Password
                                <input class="form-control" type="password" name="password" id="password">
                            </div>

                            <div>
                                <button class="btn btn-default" type="submit">Login</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
