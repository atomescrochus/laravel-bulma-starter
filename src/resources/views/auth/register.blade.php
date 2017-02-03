@extends('laravel-bulma-starter::layouts.bulma')

@section('content')
<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="card ">
          <header class="card-header">
            <p class="card-header-title">
              Register
            </p>
          </header>
          <div class="card-content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="content">
                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">Name</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="name" class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" value="{{ old('name') }}" required autofocus>
                      </div>
                    </div>
                    @include('laravel-bulma-starter::components.forms-errors', ['field' => 'name', 'type' => 'horizontal'])

                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">E-mail</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" value="{{ old('email') }}" required>
                      </div>
                    </div>
                    @include('laravel-bulma-starter::components.forms-errors', ['field' => 'email', 'type' => 'horizontal'])

                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">Password</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" value="{{ old('password') }}" required>
                      </div>
                    </div>
                    @include('laravel-bulma-starter::components.forms-errors', ['field' => 'password', 'type' => 'horizontal'])

                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">Confirm password</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="password_confirmation" class="input{{ $errors->has('password-confirm') ? ' is-danger' : '' }}" type="password" value="{{ old('password-confirm') }}" required>
                      </div>
                    </div>
                    @include('laravel-bulma-starter::components.forms-errors', ['field' => 'password-confirm', 'type' => 'horizontal'])

                    <div class="control is-horizontal">
                      <div class="control-label">
                        <!-- spacer -->
                      </div>
                      <div class="control is-fullwidth">
                        <button class="button is-primary">Register</button>
                      </div>
                    </div>               

                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection