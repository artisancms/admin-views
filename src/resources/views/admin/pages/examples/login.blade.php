@extends('admin::layouts.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ config('artisancms.site.url') }}">
                {!! config('artisancms.title', '<b>Artisan</b>CMS') !!}
            </a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
    
            @include('admin::partials.errors')

            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ url('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            Sign In
                        </button>
                    </div><!-- /.col -->
                </div>
            </form>

            <a href="{{ url('reminder') }}">I forgot my password</a><br>
            <a href="{{ url('register') }}" class="text-center">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop
