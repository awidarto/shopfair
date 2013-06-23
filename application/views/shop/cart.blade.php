@layout('publiccommon')

@section('content')
<div class="row">
  
  {{-- print_r($cart['items'])}}
{{ $form->open('shop/checkout','POST',array('id'=>'shoppingcartform','class'=>'horizontal'))}}
  <div class="small-12 columns cart-box">
    <h1>shopping cart</h1>
    {{ $form->hidden('cartId',$cart['_id'])}}
    <table class='dataTable' id="shoppingcart">
      <thead>
        <tr class="headshoppingcart">
          <th class="small-1"></th>
          <th class="small-3">ITEM DESCRIPTION</th>
          <th class="small-1">SIZE</th>
          <th class="small-1">COLOR</th>
          <th class="small-1">QTY</th>
          <th class="small-2">UNIT PRICE</th>
          <th class="small-2">PRICE TOTAL</th>
          <th class="small-1">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
      @foreach($cart['items'] as $key=>$val)

          <?php
            $i = $products[$key]['defaultpic'];
            $product_prefix = $key;
          ?>

          @foreach($val as $k=>$v)
            <?php
              $kx = str_replace('#', '', $k);
            ?>
            <tr id="{{$product_prefix.'_'.$kx.'_del_row'}}">
              <td class="small-1 image">
                  @if(file_exists(realpath('public/storage/products/'.$key).'/sm_pic0'.$i.'.jpg'))
                      {{ HTML::image(URL::base().'/storage/products/'.$key.'/sm_pic0'.$i.'.jpg?'.time(), 'sm_pic0'.$i.'.jpg', array('id' => $key)) }}
                  @endif
              </td>
              <td class="small-3"><h5>{{ $products[$key]['name'];}}</h5>{{ $products[$key]['description'];}}</td>
                <?php
                    $qty = 0;
                    $vx = explode('_',$k);
                    $size = $vx[0];
                    $color = $vx[1];
                ?>
              <td class="small-1 central" >
                {{ $size }}
              </td>
              <td class="small-1 central" >
                <span class="color-chip" style="background-color: {{ $color }}; ">&nbsp;</span>
              </td>
              <td class="small-2 central">
                <?php $qty += $v['ordered'];?>
                {{ Form::text($product_prefix.'_'.$k.'_qty',$v['actual'],array('class'=>'qty-box', 'style'=>'width:35px;margin:0px' ,'id'=>$product_prefix.'_'.$k.'_qty')) }}&nbsp;&nbsp;<i class="icon-reload-CW refresh-qty" style="font-size:20px;font-weight:bold;" data-toggle="tooltip" title="update quantity" ></i>
              </td>
              <td class="small-2 price">{{ $products[$key]['priceCurrency'].' '.number_format($products[$key]['retailPrice'],2,',','.') ;}}</td>
              <td class="small-2 subtotal" id="{{$product_prefix.'_'.$kx.'_sub'}}">{{ $products[$key]['priceCurrency'].' '.number_format($qty * $products[$key]['retailPrice'],2,',','.') ;}}</td>
              <td class="small-1 removebox"><i class="icon-remove remove-item" id="{{$product_prefix.'_'.$k.'_del'}}" ></i></td>
            </tr>

        @endforeach
      @endforeach

      </tbody>
    </table>
    <div class="clear"></div>
    <div class="paymentmethod span12">
      <div class="method1 small-3 columns">
        <h4>payment method</p>  
        <input id="field_daterange" checked="checked" type="radio" name="paymentmethod" value="bca">&nbsp;&nbsp;<img src="{{ URL::base() }}/images/bca.png"><br/><br/>
        <input id="field_daterange"  type="radio" name="paymentmethod" value="mandiri">&nbsp;&nbsp;<img src="{{ URL::base() }}/images/mandiri.png"><br/>
      </div>

      <div class="method2 small-3 columns">
        <h4>shipping method</p>  
        <input id="field_daterange" checked="checked" type="radio" name="shippingmethod" value="jex">&nbsp;&nbsp;<img src="{{ URL::base() }}/images/jexcod.png"><br/><br/>
        <input id="field_daterange"  type="radio" name="shippingmethod" value="jne">&nbsp;&nbsp;<img src="{{ URL::base() }}/images/jne.png"><br/><br/>
        <input id="field_daterange"  type="radio" name="shippingmethod" value="gojek">&nbsp;&nbsp;<img src="{{ URL::base() }}/images/gojek.png"><br/><br/>
      </div>

      <div class="method3 small-5 columns">
        <!--
          <a class="btn primary" href="{{ URL::to('shop/cart')}}" ><i class="icon-cart"></i> Update Cart</a>
        -->

        <p><h4 class="titleselectbox">sub-total</h4>&nbsp;&nbsp; <input class="total-prices" disabled="disabled" id="total_due" type="text" name="fromDate" value="{{ $prices['total_due_fmt'] }}"></p>
        <p><h4 class="titleselectbox">shipping</h4>&nbsp;&nbsp; <input class="total-prices" disabled="disabled" id="shipping" type="text" name="fromDate" value="{{ $prices['shipping_fmt'] }}"></p>
        <p><h4 class="titleselectbox">total</h4>&nbsp;&nbsp; <input class="total-prices" disabled="disabled" id="total_billing" type="text" name="fromDate" value="{{ $prices['total_billing_fmt'] }}"></p>

          <a class="btn primary" id="checkoutnow" href="{{ URL::to('shop/checkout')}}" ><i class="icon-checkmark"></i> Go To Check Out</a><br /><br />

          <a class="btn primary" href="{{ URL::base()}}"><i class="icon-shopping"></i> Continue Shopping</a></p>
      </div>
      
    </div>
  
  </div>
{{ $form->close() }}  
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#checkoutnow').click(function(){
      $('#shoppingcartform').submit();
      return false;
  });

  $('.remove-item').click(function(){
      var answer = confirm("Are you sure you want to delete this item ?");
      if (answer){

        var _id = this.id;
        $.post('{{ URL::to('shop/removeitem') }}',{'id':_id}, function(data) {
          if(data.result == 'OK'){
            alert("Item deleted");
            $('#'+data.row).remove();
            //$('#'+data.row).parent().parent().remove();
            console.log($('#'+data.row));
            console.log($('#'+data.row).parent().parent());    
          }
        },'json');

      }else{
        alert("Deletion cancelled");
      }
  });

  $('.refresh-qty').click(function(){
        var prev = $(this).prev();
        var _id = prev[0].id;
        var qty = prev.val();

        $.post('{{ URL::to('shop/updateqty') }}',{'id':_id,'qty':qty}, function(data) {
          if(data.result == 'OK:ITEMADDED' || data.result == 'OK:ITEMREMOVED'){
              alert(data.message);


              $('.subtotal').each(function(i){
                  //console.log(this.id);
                  var si = this.id;
                  var subt = data.prices[si];
                  console.log(subt.sub_total_price_fmt);
                  $(this).html(subt.sub_total_price_fmt);
              });


              $('#total_due').val(data.prices.total_due_fmt);
              $('#shipping').val(data.prices.shipping_fmt);
              $('#total_billing').val(data.prices.total_billing_fmt);
          }
        },'json');

  });


});

</script>


@endsection