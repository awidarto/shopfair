@layout('publiccommon')

@section('content')

@if (Session::has('login_errors'))
    <div class="alert alert-error">
         {{Session::get('notify_result')}}
    </div>
@endif
{{$form->open('signin','POST')}}

<div class="row">
    <div class="small-4 small-offset-4 columns">

        <fieldset>
            <legend>Login</legend>

                {{ $form->text('username','Email.req','',array('class'=>'text','id'=>'username')) }}

                {{ $form->password('password','Password.req','',array('class'=>'text')) }}
      
                <button type="submit" class="btn btn-primary">Sign In</button>
        </fieldset>

        <div class="form-actions" style="text-align:right">
          Yet to have an account ? {{ HTML::link('signup','Sign Up Here') }}.
        </div>

    </div>
</div>

 @endsection