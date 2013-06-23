@layout('publiccommon')

@section('content')

@if (Session::has('login_errors'))
    <div class="alert alert-error">
         {{Session::get('notify_result')}}
    </div>
@endif

{{ $form->open('shop/confirm','POST',array('class'=>'horizontal','id'=>'shoppingcartform'))}}

<div class="row">
    <div class="small-4 small-offset-4 columns">

        <fieldset>
            <legend>Confirm Payment</legend>

                {{ $form->text('confirmationCode','Confirmation Code','')}}<br />

                {{ $form->text('confirmationBankName','Bank','')}}<br />

                {{ $form->text('confirmationAccountName','Account Name','')}}<br />
      
                <button type="submit" class="btn btn-primary">Confirm Payment</button>
        </fieldset>

    </div>
</div>


{{ $form->close() }}  

@endsection