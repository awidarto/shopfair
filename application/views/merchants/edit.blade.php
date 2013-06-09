@layout('master')


@section('content')
<div class="tableHeader">
<h3>{{$title}}</h3>
</div>

{{$form->open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}
{{ $form->hidden('id',$formdata['_id'])}}

<div class="row-fluid">
  <div class="span6 left">

        <fieldset>
            <legend>Merchant Information</legend>
                {{ $form->text('name','Merchant Name','',array('class'=>'text span8','id'=>'fullname')) }}
                {{ $form->text('affiliateCode','Affiliate Code','',array('class'=>'text span8','id'=>'affiliateCode')) }}
        </fieldset>


        <fieldset>
            <legend>Merchant Address</legend>

                {{ $form->text('address_1','Address.req','',array('class'=>'text span8','id'=>'address_1','placeholder'=>'Address line 1')) }}
                {{ $form->text('address_2','','',array('class'=>'text span8','id'=>'address_2','placeholder'=>'Address line 2')) }}
                {{ $form->text('city','City','',array('class'=>'text span8','id'=>'city')) }}
                {{ $form->text('zip','ZIP','',array('class'=>'text span8','id'=>'zip')) }}

                {{$form->select('country','Country',Config::get('country.countries'),array('class'=>'four'))}}

                {{ $form->text('phone','Phone Number','',array('class'=>'text span8','id'=>'mobile')) }}

                {{ $form->text('mobile','Mobile Number','',array('class'=>'text span8','id'=>'mobile')) }}

                {{ $form->text('url','URL','',array('class'=>'text span8','id'=>'url')) }}
        </fieldset>


  </div>
  <div class="span5 right">

        <fieldset>
            <legend>Merchant Person In Charge</legend>

              <div class="row-fluid">
                  <div class="span2">
                    Salutation
                  </div>
                  <div class="span2">
                    {{ $form->radio('salutation','Mr','Mr')}}
                  </div>
                  <div class="span2">
                    {{ $form->radio('salutation','Mrs','Mrs')}}
                  </div>
                  <div class="span6">
                    {{ $form->radio('salutation','Ms','Ms')}}
                  </div>
              </div>


              {{ $form->text('firstname','First Name.req','',array('class'=>'text span8','id'=>'firstname')) }}
              {{ $form->text('lastname','Last Name.req','',array('class'=>'text span8','id'=>'lastname')) }}
              {{ $form->text('email','Email.req','',array('class'=>'text span8','id'=>'email')) }}

        </fieldset>

        <fieldset>
            <legend>Transfer Payment Information</legend>
                {{ $form->text('fullname','Full Name','',array('class'=>'text span8','id'=>'fullname')) }}
                {{ $form->text('bankname','Bank Name','',array('class'=>'text span8','id'=>'bankname')) }}
                {{ $form->text('branch','Branch','',array('class'=>'text span8','id'=>'branch')) }}
                {{ $form->text('cardnumber','Card Number','',array('class'=>'text span8','id'=>'cardnumber')) }}
        </fieldset>


        <fieldset>
            <legend>Terms & Conditions</legend>
          {{ $form->checkbox('agreetnc','I Agree to the '.Config::get('site.title').' merchant terms and conditions ',null,null,array('id'=>'agreetnc'))}}

        </fieldset>


  </div>
</div>
<div class="row right">
{{ Form::submit('Save',array('class'=>'button'))}}&nbsp;&nbsp;
{{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
</div>
{{$form->close()}}
<script type="text/javascript">
  $('select').select2();

  $('#field_role').change(function(){
      //alert($('#field_role').val());
      // load default permission here
  });
</script>

@endsection