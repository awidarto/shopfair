@layout('public')

@section('content')
<div class="row">
  
  <div class="span4">
    <img src="{{ URL::base().'/storage/products/'.$product['_id'].'/lar_pic0'.$product['defaultpic'].'.jpg' }}" alt="{{ $product['name']}}" class="mixmatch"  />
    
    <br/>
    <a href="#"><img src="{{ URL::base() }}/images/roll-on.png"><span class="titlesectionnormal">ROLL ON TO ZOOM IN</span></a>
    <a style="margin-left:30px;" href="#"><img src="{{ URL::base() }}/images/zoom.png"><span class="titlesectionnormal">VIEW LARGER</span></a>
    <br/>
    <br/>
    <p>
      <span class="titlesection" style="text-align:center;width:100%;margin:0 auto;display:block;">ADDITIONAL IMAGES</span>
      
      <div class="addimages">
        @foreach($product['productpic'] as $key=>$pic)
        <a href="#"><img src="{{ URL::base().'/storage/products/'.$product['_id'].'/sm_'.$key.'.jpg' }}" alt="{{ $product['name']}}" class="mixmatch"  /></a>
        @endforeach
      </div>
    </p>
  </div>
  <div class="span8 clearfix">
    <div class="detailproduct">
      <h2 class="product-title">{{$product['name']}}</h2>
      <a href="#" class="fblike"><img src="{{ URL::base() }}/images/fblike.gif"/></a>
      <a href="#" class="loves"><img src="{{ URL::base() }}/images/loves4.gif"/><br/><span>based on 196loves</span></a>
      <div class="availablecont">
        <p>Available in:</p>
        <a href="#" class="coloravailableselect red"></a>
        <a href="#" class="coloravailableselect black"></a>
        <a href="#" class="coloravailableselect blue"></a>
      </div>
      <p>Price: IDR 575,000</p>
      <h3>ABOUT THIS PRODUCT</h3>
      {{$product['bodycopy']}}
    </div>

    <div class="optionselectproduct detailproduct clearfix">
      <div class="selectsize">
        <span class="titleselectbox">SELECT SIZE</span><br/>        
        <select class="span2" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="-" selected="selected">-</option><option value="s">S</option><option value="m">M</option><option value="l">L</option></select>
      </div>

      <div class="selectsize">
        <span class="titleselectbox">SELECT QUANTITY</span><br/>        
        <select class="span2" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="1" selected="selected">1</option><option value="2">2</option><option value="3">3</option></select>
      </div>
      <div class="selectsize">
        <span class="titleselectbox">ADD TO CART</span><br/>        
        <a href="#"><img src="{{ URL::base() }}/images/trolly.png"/></a>
      </div>
  </div>
  <div class="clear"></div>
  <div class="detailproduct statcomment">
    <span>5 comments</span>
    <a href="#"><img src="{{ URL::base() }}/images/fbstat.gif"></a>
    <a href="#"><img src="{{ URL::base() }}/images/twittstat.gif"></a>
    <a href="#"><img src="{{ URL::base() }}/images/googlestat.gif"></a>
  </div>
  
    <div class="clear"></div>
    

  </div>
  <div class="clear"></div>
  <div class="commentlist span12">
    <h4 class="commentlisttitle">what other costumers saying about this product:</h4>
    <table>
      <tr class="span12">
        <td class="comment userinfo span3">
          <p class="name titlesection"> Maya Hasan</p>
          <p>DKI JAKARTA</p>
          <p>(23 Reviews)</p>
        </td>

        <td class="love span3">
          <img src="{{ URL::base() }}/images/love2.gif">
        </td>
        <td class="span5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec hendrerit odio. Nunc id aliquet elit. Ut ultrices luctus vestibulum. Suspendisse potenti. Sed ut faucibus magna. Donec semper congue placerat.
        </td>
      </tr>

      <tr class="span12">
        <td class="comment userinfo span3">
          <p class="name titlesection"> Maya Hasan</p>
          <p>DKI JAKARTA</p>
          <p>(23 Reviews)</p>
        </td>

        <td class="love span3">
          <img src="{{ URL::base() }}/images/love2.gif">
        </td>
        <td class="span5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec hendrerit odio. Nunc id aliquet elit. Ut ultrices luctus vestibulum. Suspendisse potenti. Sed ut faucibus magna. Donec semper congue placerat.
        </td>
      </tr>
      <tr class="span12">
        <td class="comment userinfo span3">
          <p class="name titlesection"> Maya Hasan</p>
          <p>DKI JAKARTA</p>
          <p>(23 Reviews)</p>
        </td>

        <td class="love span3">
          <img src="{{ URL::base() }}/images/love5.gif">
        </td>
        <td class="span5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec hendrerit odio. Nunc id aliquet elit. Ut ultrices luctus vestibulum. Suspendisse potenti. Sed ut faucibus magna. Donec semper congue placerat.
        </td>
      </tr>
    </table>
  </div>
  <div class="clear"></div>

  <div class="otherproducts span12">
    <h3>We also recomend</h3>
    <a href="#"><img src="{{ URL::base() }}/images/recomen1.jpg"></a>
    <a href="#"><img src="{{ URL::base() }}/images/recomen2.jpg"></a>
    <a href="#"><img src="{{ URL::base() }}/images/recomen3.jpg"></a>
    <a href="#"><img src="{{ URL::base() }}/images/recomen4.jpg"></a>
  </div>

</div>




@endsection