@extends('layouts.app')
@section('header')
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container d-flex justify-content-between">
            <div class="logo">
                <img src="{{ asset('images/syberry.pn') }}" alt="logo">
            </div>
            <div class="mobile">
                <a class="btn btn-outline-secondary">+1 11 111-1111</a>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <section class="menu-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="menu btn btn-outline-secondary" href="{{ route('login') }}">
                        Back
                    </button>
                </div>
            </div>
        </div>
    </section>
<section class="description-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid, animi at blanditiis dicta distinctio explicabo id laborum, modi quam quia quod repellat rerum saepe tempora totam ut voluptate voluptatum. Beatae dicta distinctio dolorem ea esse est fugit iusto labore natus similique. Aspernatur consectetur, eaque est illo laboriosam, modi mollitia nam officia quam quod quos repellat saepe tempora? Assumenda, eum.</p>
                <p>Ab cupiditate dolorem natus nihil obcaecati porro suscipit voluptate. Architecto assumenda consequatur culpa dolorum eligendi facere veniam? Doloremque eius fuga minus quod!</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="hint">
                        <span class="required">*</span> Required Fields
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('auth.firstName') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('auth.lastName') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('auth.phone') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('auth.dateOfBirth') }}</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" type="text" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Notify Me By Email') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Отправить' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    <script type="text/javascript">
        $("#dateOfBirth").datepicker({
            changeMonth: true,
            changeYear: true
        });
    </script>
@endsection
