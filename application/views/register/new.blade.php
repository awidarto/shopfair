@layout('publiccommon')


@section('content')
@if (Session::has('notify_result'))
    <div class="alert alert-error">
         {{Session::get('notify_result')}}
    </div>
@endif
{{$form->open('register','POST')}}

<div class="row">
    <div class="small-6 columns">

        <fieldset>
            <legend>Shopper's Information</legend>


                <div class="row">
                    <div class="small-6 columns">
                      Salutation
                    </div>
                    <div class="small-2 columns">
                      {{ $form->radio('salutation','Mr','Mr',true)}}
                    </div>
                    <div class="small-2 columns">
                      {{ $form->radio('salutation','Mrs','Mrs')}}
                    </div>
                    <div class="small-2 columns">
                      {{ $form->radio('salutation','Ms','Ms')}}
                    </div>
                </div>


                {{ $form->text('firstname','First Name.req','',array('class'=>'text','id'=>'firstname')) }}
                {{ $form->text('lastname','Last Name.req','',array('class'=>'text','id'=>'lastname')) }}
                {{ $form->text('email','Email.req','',array('class'=>'text','id'=>'email')) }}

                {{ $form->password('pass','Password.req','',array('class'=>'text')) }}
                {{ $form->password('repass','Repeat Password.req','',array('class'=>'text')) }}

                {{ $form->text('address_1','Address.req','',array('class'=>'text','id'=>'address_1','placeholder'=>'Address line 1')) }}
                {{ $form->text('address_2','','',array('class'=>'text','id'=>'address_2','placeholder'=>'Address line 2')) }}
                {{ $form->text('city','City','',array('class'=>'text','id'=>'city')) }}
                {{ $form->text('zip','ZIP','',array('class'=>'text','id'=>'zip')) }}

                {{$form->select('country','Country',Config::get('country.countries'),array('class'=>'four'))}}

                {{ $form->text('shippingphone','Phone Number','',array('class'=>'text','id'=>'mobile')) }}

                {{ $form->text('mobile','Mobile Number','',array('class'=>'text','id'=>'mobile')) }}

        </fieldset>
    </div>

    <div class="small-6 columns">

        <fieldset>
            <legend>Transfer Payment Information</legend>
                {{ $form->text('fullname','Full Name','',array('class'=>'text','id'=>'fullname')) }}
                {{ $form->text('bankname','Bank Name','',array('class'=>'text','id'=>'bankname')) }}
                {{ $form->text('branch','Branch','',array('class'=>'text','id'=>'branch')) }}
                {{ $form->text('cardnumber','Card Number','',array('class'=>'text','id'=>'cardnumber')) }}
        </fieldset>

        <fieldset>
            <legend>Credit Card</legend>

                {{ $form->text('ccname','Name on Card','',array('class'=>'text','id'=>'ccname')) }}
                {{ $form->text('cardnumber','Card Number','',array('class'=>'text','id'=>'cardnumber')) }}
                {{ $form->text('branch','CVS / CVC','',array('class'=>'text','id'=>'branch')) }}
                {{ $form->text('expiremonth','Expiration date','',array('class'=>'text','id'=>'cardnumber','placeholder'=>'mm')) }}

                {{ $form->text('expireyear','','',array('class'=>'text','id'=>'cardnumber','placeholder'=>'yyyy')) }}


        </fieldset>

        <fieldset>
            <legend>Terms & Conditions</legend>
          {{ $form->checkbox('agreetnc','I Agree to the '.Config::get('site.title').' terms and conditions ','Yes',false,array('id'=>'agreetnc'))}}

          {{ $form->checkbox('saveinfo','Save my payment info and preference for future purchase','Yes',false,array('id'=>'agreetnc'))}}


        </fieldset>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Sign Up</button>
          <button type="button" class="btn">Cancel</button>
        </div>

    </div>
</div>

{{$form->close()}}

<script type="text/javascript">
  $( document ).ready(function() {
    $('select').select2({
        width : 'resolve'
      });
  });
</script>

<script type="text/javascript">

<?php 
  $dateA = date('Y-m-d G:i'); 
  $earlybirddate = Config::get('eventreg.earlybirdconventiondate'); 
?>
$(function() {

  $("#s2id_field_countryInvoice").select2("val", "Indonesia");
  $("#s2id_field_country").select2("val", "Indonesia");

  function fillsame(){
    var shippingName = $("#shippingName").val();
    var shippingNPWP = $("#shippingNPWP").val();
    var shippingPhoneCountry = $("#shippingPhoneCountry").val();
    var shippingPhoneArea = $("#shippingPhoneArea").val();
    var shippingPhone = $("#shippingPhone").val();


    var shippingFaxCountry = $("#shippingFaxCountry").val();
    var shippingFaxArea = $("#shippingFaxArea").val();
    var shippingFax = $("#shippingFax").val();
    var shippingAddress_1 = $("#address_1").val();
    var shippingAddress_2 = $("#address_2").val();
    var shippingCity = $("#city").val();
    var shippingZip = $("#zip").val();
    var shippingCountry = $("#s2id_field_country").select2("val");

    $("#shippingNameInv").val(shippingName);
    $("#shippingNPWPInv").val(shippingNPWP);

    $("#shippingPhoneInvCountry").val(shippingPhoneCountry);
    $("#shippingPhoneInvArea").val(shippingPhoneArea);
    $("#shippingPhoneInv").val(shippingPhone);


    $("#shippingFaxInvCountry").val(shippingFaxCountry);
    $("#shippingFaxInvArea").val(shippingFaxArea);
    $("#shippingFaxInv").val(shippingFax);

    $("#addressInv_1").val(shippingAddress_1);
    $("#addressInv_2").val(shippingAddress_2);
    $("#cityInv").val(shippingCity);
    $("#zipInv").val(shippingZip);
    $("#s2id_field_countryInvoice").select2("val", shippingCountry);
  }

  function resetinput(){
    $('.invAdress')
     .not(':button, :submit, :reset, :hidden')
     .val('')
     .removeAttr('checked')
     .removeAttr('selected');
      $("#s2id_field_countryInvoice").select2("val", "");
  }

  $("#invoiceSame").live("click", function(){
    if($('#invoiceSame').hasClass('checked')){
      fillsame();

    }else{
      resetinput();
    }
  });
  $(".disableRadio").next('span').addClass('radioDisable');

  $(".radioDisable").live("click", function(){
    $(this).removeClass('checked');
  });


});

</script>

@endsection