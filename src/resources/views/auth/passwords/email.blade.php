@extends('laravel-bulma-starter::layouts.bulma')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="card ">
          <header class="card-header">
            <p class="card-header-title">
              Reset password
            </p>
          </header>
          <div class="card-content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <div class="content">
                  <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">E-mail</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" value="{{ old('email') }}" required autofocus>
                      </div>
                    </div>
                    @include('laravel-bulma-starter::components.forms-errors', ['field' => 'email', 'type' => 'horizontal'])

                    <div class="control is-horizontal">
                      <div class="control-label">
                        <!-- spacer -->
                      </div>
                      <div class="control is-fullwidth">
                        <button class="button is-primary">Send Password Reset Link</button>
                      </div>
                    </div>   

                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
