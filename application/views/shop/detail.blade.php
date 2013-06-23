@layout('publiccommon')

@section('content')

<div class="row">
  <div class="todaysauction">
    <div class="row">

      <div class="large-6 columns">
        <div class="dealsitem">
          <h2>{{ $product['name']}}<br/><span class="price">IDR {{ $product['salePrice']}} </span>
            <br />
              @if($product['affiliateMerchant'] == '')
                <span class="merchant">by ShopFair</span>
              @else
                <span class="merchant">by {{ $product['affiliateMerchant'] }}</span>
              @endif
          </h2>

          <img src="{{ URL::base().'/storage/products/'.$product['_id'].'/wide_pic0'.$product['defaultpic'].'.jpg' }}" alt="{{ $product['name']}}" id="mainimageproduct" data-zoom-image="{{ URL::base().'/storage/products/'.$product['_id'].'/lar_pic0'.$product['defaultpic'].'.jpg' }}"  />

        </div>

        <div class="addimages" id="gal1">
          @for($i = 1;$i < 6;$i++)
            @if(file_exists(realpath('public/storage/products/'.$product['_id']).'/sm_pic0'.$i.'.jpg'))
                <a href="#"  data-image="{{ URL::base().'/storage/products/'.$product['_id'].'/sm_pic0'.$i.'.jpg' }}" data-zoom-image="{{ URL::base().'/storage/products/'.$product['_id'].'/lar_pic0'.$i.'.jpg' }}" id="{{ '0'.$i}}">
                  <img src="{{ URL::base().'/storage/products/'.$product['_id'].'/sm_pic0'.$i.'.jpg' }}" alt="{{ $product['name']}}" class="mixmatch addimage" id="{{ '0'.$i}}"/>
                </a>
            @endif
          @endfor
        </div>

      </div>

      <div class="large-6 columns">

        <div class="auctiondetails">
          <h1>{{$product['name']}}</h1>
              <a href="#" class="fblike"><img src="{{ URL::base() }}/images/fblike.gif"/></a>
              <a href="#" class="loves"><img src="{{ URL::base() }}/images/loves4.gif"/><br/><span>based on 196loves</span></a>
              <div class="availablecont">
                <p>Available in:</p>
                @foreach($colors as $ac)
                  <div class="coloravailableselect" style="background-color:{{$ac}}"></div>
                @endforeach
              </div>
              <p>Price: {{ $product['priceCurrency'].' '.number_format($product['retailPrice'],2,',','.')}}</p>
          <h2>ABOUT THIS PRODUCT</h2>
            <p>
              {{$product['bodycopy']}}
            </p>
        </div>


            <div class="optionselectproduct detailproduct clearfix row-fluid">
              <div class="small-3 columns">
                <span class="titleselectbox">TYPE / SIZE</span><br/>        
                <select name="size" class="span12" >
                  <option value="-" selected="selected">-</option>
                  @foreach($sizes as $size)
                    <option value="{{$size}}">{{$size}}</option>
                  @endforeach
                </select>
              </div>

              <div class="small-4 columns">
                <span class="titleselectbox">COLOR</span><br/>       
                <select name="color" disable="disable" >
                </select>
              </div>

              {{ Form::hidden('pid',$product['_id'],array('id'=>'product_id'))}} 
              <script type="text/javascript">
              $(document).ready(function(){

                <?php

                  $acart = '';
                  if(Auth::guest()){
                    $acart = '';            
                  }else{
                    if(isset(Auth::shopper()->activeCart)){
                      $acart = Auth::shopper()->activeCart;
                    }else{
                      $acart = '';
                    }
                  } 

                ?>

                var cart_id = '{{ $acart }}';

                var product_id = '{{ $product['_id']}}';

                $('select[name="size"]').on('change',function(){
                  $.post('{{ URL::to('shop/color')}}',{ size: this.value, _id:product_id },function(data){
                      $('select[name="color"]').html(data.html)
                        .simplecolorpicker('destroy')
                        .simplecolorpicker();

                      $.post('{{ URL::to('shop/qty')}}',{ color: data.defsel, size: $('select[name="size"]').val(), _id:product_id },function(data){
                          $('select[name="qty"]').html(data.html);
                      },'json');

                  },'json');
                });

                $('select[name="color"]').simplecolorpicker().on('change',function(){  
                    $.post('{{ URL::to('shop/qty')}}',{ color: $(this).val(), size: $('select[name="size"]').val(), _id:product_id },function(data){
                        $('select[name="qty"]').html(data.html);
                    },'json');
                });


              @if(Auth::shoppercheck() == false)

                $('#addtocart').click(function(){
                  $('#signInModal').foundation('reveal', 'open');
                  //$('#signInModal').modal();
                })

                $('#signInNow').on('click',function(){
                    var color = $('select[name="color"]').val();
                    var size = $('select[name="size"]').val();
                    var qty = $('select[name="qty"]').val();
                    var username = $('#signInUsername').val();
                    var password = $('#signInPassword').val();

                    $.post('{{ URL::to('shop/signin')}}',{ username: username, password: password, color: color, size: size, qty: qty, _id:product_id, cart_id: '' },
                      function(data){
                        console.log(data);
                        if(data.result == 'NOTSIGNEDIN'){
                          alert(data.message);
                          $('#signInModal').foundation('reveal','close');
                        }

                        if(data.result == 'PRODUCTADDED'){
                          alert(data.message);
                        }

                    },'json');          

                });

              @else

                $('#addtocart').click(function(){
                    var color = $('select[name="color"]').val();
                    var size = $('select[name="size"]').val();
                    var qty = $('select[name="qty"]').val();

                    console.log(color);
                    console.log(size);
                    console.log(qty);



                    if(color != '' && size != '-' && qty >= 0){

                        $.post('{{ URL::to('shop/addtocart')}}',{ color: color, size: size, qty: qty, _id:product_id, cart_id: cart_id },function(data){
                            console.log(data);
                            if(data.result == 'NOTSIGNEDIN'){
                              alert(data.message);
                            }

                            if(data.result == 'PRODUCTADDED'){
                              var remaining = data.data.remaining;
                              var qtyopt = '';

                              for(i = 1; i <= remaining; i++){
                                qtyopt += '<option value="' + i + '" >' + i + '</option>';
                              }

                              console.log(qtyopt);

                              $('select[name="qty"]').html(qtyopt);

                              alert(data.message);
                            }


                        },'json');          



                    }else{
                      alert('Please specify size, color and quantity');
                    }

                })

              @endif

              });
              </script>

              <div class="small-3 columns">
                <span class="titleselectbox">QUANTITY</span><br/>        
                <select class="span12" name="qty">
                  <option value="-" selected="selected">-</option>
                </select>
              </div>

              <div class="small-2 columns">
                <span class="titleselectbox">ADD TO CART</span><br/>        
                
                <!-- Button to trigger modal -->
                <img src="{{ URL::base() }}/images/trolly.png" id="addtocart" />

              </div>
          </div>

      </div>

    </div>  
  </div>
</div>


<script type="text/javascript">

  $("#mainimageproduct").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active'}); 

  $("#mainimageproduct").bind("click", function(e) {  
    //var ez =   $('#img_01').data('elevateZoom'); 
    //$.fancybox(ez.getGalleryList());
    return false;
  });

  $('#close-modal').bind('click',function(e){
    $('#signInModal').foundation('reveal','close');
    return false;
  });

  $('.addimage').on({
    'click': function(e){
        //find rel
        var idimage = $(this).attr("id");
        var zoomimage = $(this).attr("data-zoom-image");
        var imagesource = "{{ URL::base().'/storage/products/'.$product['_id'] }}";
        var imageLoad = imagesource+'/wide_pic'+idimage+'.jpg';
        
        $('#mainimageproduct').attr('src',imageLoad);
        return false;
    }
  });
</script>

<!--
<div id="unsignInModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="signInLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="signInLabel">Sign In</h3>
  </div>
  <div class="modal-body">
    <p>Please sign in before making order, thank you.</p>
    <p>{{ Form::label('username', 'Email') }}</p>
    <p>{{ Form::text('username','',array('id'=>'signInUsername')) }}</p>
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password',array('id'=>'signInPassword')) }}</p>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">No Thanks !</button>
    <button class="btn btn-primary" id="signInNow">Sign In Now !</button>
  </div>
</div>
-->

<div id="signInModal" class="reveal-modal row" style="width:40%;">

    <div class="row">
        <div class="small-12 columns">

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

  <a class="close-reveal-modal">&#215;</a>
</div>


@endsection