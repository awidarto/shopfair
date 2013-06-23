@layout('publiccommon')

@section('content')
<div class="row">
  
  {{-- print_r($cart['items'])}}
{{ $form->open('shop/commit','POST',array('id'=>'shoppingcartform'))}}
  <div class="small-12 columns cart-box">
    <h1>check out</h1>
    {{ $form->hidden('cartId',$cart['_id'])}}
    <table class='dataTable' id="shoppingcart">
      <thead>
        <tr class="headshoppingcart">
          <th class="small-1"></th>
          <th class="small-4">ITEM DESCRIPTION</th>
          <th class="small-1">SIZE</th>
          <th class="small-1">COLOR</th>
          <th class="small-1">QTY</th>
          <th class="small-2">UNIT PRICE</th>
          <th class="small-2">PRICE TOTAL</th>
        </tr>
      </thead>
      <tbody>

      <?php

      $totalPrice = 0;

      //print_r($cart);

      ?>
      @foreach($cart['items'] as $key=>$val)

          <?php
            $i = $products[$key]['defaultpic'];
            $product_prefix = $key;
          ?>

          @foreach($val as $k=>$v)
            <?php
              $kx = str_replace('#', '', $k);
            ?>
          <tr>
            <td class="small-1 image">
                @if(file_exists(realpath('public/storage/products/'.$key).'/sm_pic0'.$i.'.jpg'))
                    {{ HTML::image(URL::base().'/storage/products/'.$key.'/sm_pic0'.$i.'.jpg?'.time(), 'sm_pic0'.$i.'.jpg', array('id' => $key)) }}
                @endif
            </td>
            <td class="small-4"><h5>{{ $products[$key]['name'];}}</h5>{{ $products[$key]['description'];}}</td>

            <?php $qty = 0;?>
              <?php

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
            <td class="small-1 central">
              {{  $cart['items'][$product_prefix][$k]['actual'] }}
              {{ Form::hidden($product_prefix.'_'.$k.'_qty',$cart['items'][$product_prefix][$k]['actual'],array('class'=>'qty-box')) }}<br />
            </td>

            <td class="small-2 price">
              {{ $cart['prices'][$product_prefix][$k]['unit_price_fmt'] ;}}
              <input type="hidden" name="{{$key}}_retailPrice" value="{{$cart['prices'][$product_prefix][$k]['unit_price']}}" />
            </td>
            <td class="small-2 price">
              {{ $cart['prices'][$product_prefix][$k]['sub_total_price_fmt'] ;}}
              <input type="hidden" name="{{$key}}_subTotalPrice" value="{{ $cart['prices'][$product_prefix][$k]['sub_total_price'] }}" />
          </tr>



          @endforeach


          <?php
            $totalPrice += $qty * (double) $products[$key]['retailPrice'];
          ?>
      @endforeach
          <tr>
            <td colspan="5"></td>
            <td class="small-2 price">
              <h4 class="titleselectbox">sub-total</h4>
            </td>
            <td class="small-2 price">
              {{ $cart['prices']['total_due_fmt'] }}
              <input name="totalPrice" type="hidden" value="{{ $cart['prices']['total_due'] }}" />
            </td>
          </tr>

          <tr>
            <td colspan="5"></td>
            <td class="small-2 price">
              <h4 class="titleselectbox">shipping</h4>
            </td>
            <td class="small-2 price">
              {{ $cart['prices']['shipping_fmt'] }}
              <input name="shippingFee" type="hidden" value="{{ $cart['prices']['shipping'] }}" />
            </td>
          </tr>

          <tr>
            <td colspan="5"></td>
            <td class="small-2 price">
              <h4 class="titleselectbox">total</h4>
            </td>
            <td class="small-2 price">
              {{ $cart['prices']['total_due_fmt'] }}
              <input name="totalDue" type="hidden" value="{{ $cart['prices']['total_billing'] }}" />
            </td>
          </tr>

      </tbody>
    </table>
    <div class="clear"></div>
    <div class="paymentmethod row">
      <div class="method1 small-3 columns">
        <h4>payment method</p>  
        @if($postdata['paymentmethod'] == 'mandiri')
          <img src="{{ URL::base() }}/images/mandiri.png">
        @elseif($postdata['paymentmethod'] == 'bca')
          <img src="{{ URL::base() }}/images/bca.png">
        @endif
        <input type="hidden" value="{{$postdata['paymentmethod']}}" name="paymentmethod">
      </div>

      <div class="method2 small-3 columns">
        <h4>shipping method</p>
        @if($postdata['shippingmethod'] == 'jex')
          <img src="{{ URL::base() }}/images/jexcod.png">
        @elseif( $postdata['shippingmethod'] == 'jne')
          <img src="{{ URL::base() }}/images/jne.png">
        @elseif($postdata['shippingmethod'] == 'gojek')
          <img src="{{ URL::base() }}/images/gojek.png">
        @endif
        <input type="hidden" value="{{$postdata['shippingmethod']}}" name="shippingmethod">
      </div>

      <div class="method3 small-5 columns">
        
        <p class="buttonshopcart">
          <a class="btn primary" id="commitnow" href="{{ URL::to('shop/commit')}}" ><i class="icon-checkmark"></i> Check Out Now</a><br /><br />
          <a class="btn primary" href="{{ URL::to('shop/cart')}}" ><i class="icon-cart"></i> Go Back & Update Cart</a><br /><br />
          <a class="btn primary" href="{{ URL::base();}}"><i class="icon-shopping"></i> Continue Shopping</a></p>
      </div>
      
    </div>
  
  </div>
{{ $form->close() }}  
</div>

<style type="text/css">
input.currency-display{
  text-align: right;

}
</style>

<script type="text/javascript">
$(document).ready(function(){
  $('#commitnow').click(function(){
      $('#shoppingcartform').submit();
      return false;
  });
});

</script>


@endsection