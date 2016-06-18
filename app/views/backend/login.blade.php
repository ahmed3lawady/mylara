<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Admin Panel Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ HTML::style('assets/admin/css/bootstrap.min.css'); }}
        <!-- font Awesome -->
        {{ HTML::style('assets/admin/css/font-awesome.min.css'); }}
        <!-- Theme style -->
        {{ HTML::style('assets/admin/css/AdminLTE.css'); }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
                {{ Form::open() }}
                <div class="body bg-gray">
                    <div class="form-group">
                        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Username')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
                </div>
            {{ Form::close() }}
        </div>
        <br />
        @if(!empty($errors->all()))
        <div class="alert alert-danger alert-dismissable" style="margin: auto;max-width: 600px;">
            <i class="fa fa-ban"></i>
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            @foreach($errors->all('<li>:message</li>') as $message) {{ $message }} @endforeach
        </div>
        @endif
        
        <!-- jQuery 2.0.2 -->
        {{ HTML::script('assets/admin/js/jquery.min.js'); }}
        <!-- Bootstrap -->
        {{ HTML::script('assets/admin/js/bootstrap.min.js'); }}        
    </body>
</html>