@section('accordion')
<?php $today = date('N',time()); ?>
<div id="accordion">
	<section id="item1" {{ ($today == 1)?'class="ac_hidden"':'' }} >
		<p class="pointer"><b class="gen-enclosed foundicon-right-arrow"></b></p>
		<h1><a href="#">AUCTION</a></h1>
	    <div class="content-details">
	        <h3>BLACKBERRY Z10</h3>
	        <div class="timeleftauction">
	        <span>00<span class="secondticking">:</span> 10 <span class="secondticking">:</span> 00 <span class="secondticking">:</span> 00 </span> <span class="timeleftpar">TIME LEFT</span>
	        </div>
	        <a class="joinauction button mainbuttonshopfair" href="#">JOIN AUCTION</a>
	        <p>This Item is :</br>
	            - Only 1 units available</br>
	            - Starting from IDR 1.000.000</br>
	        </p>
	    </div>
	</section>
	<section id="item2" {{ ($today == 1)?'':'class="ac_hidden"' }} >
		<p class="pointer"><i class="gen-enclosed foundicon-right-arrow"></i></p>
		<h1><a href="#">SHOPFAIR MONDAY</a></h1>

	    <div class="content-details">
	        <h3>THULE SLING BAG</h3>
	        <div class="timeleftauction">
	        <span>00<span class="secondticking">:</span> 10 <span class="secondticking">:</span> 00 <span class="secondticking">:</span> 00 </span> <span class="timeleftpar">TIME LEFT</span>
	        </div>
	        <a class="joinauction button mainbuttonshopfair" href="#">I WANT THIS !</a>
	        <p>This Item is :</br>
	            - Only 5 units available</br>
	            - Only IDR 650.000<br />
	            - 50% OFF RETAIL PRICE</br>
	        </p>
	    </div>

	</section>
</div>

<style type="text/css">
/*
#accordion h1, 
#accordion p,
*/
#accordion .pointer, 
#accordion section
{
	
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}

#accordion {
	margin-bottom:0px;
	font-family: proxima_nova_rgregular;
}

#accordion h1 {
	line-height:1.2em;
	font-size:16px;
	background-color:rgba(255,0,0,0.3);
	margin:0;
	padding: 10px 10px 10px 30px;
}



#accordion h1 a {
	color:#222;
	font-family: proxima_nova_rgregular;
}

#accordion h3 {
	color:#222;
	font-family: proxima_nova_rgregular;
}


#accordion section {
	overflow:hidden;
	height:282px;
	border:none;
}

#accordion p {
	padding:0 10px;
	color:black;
}

#accordion section.ac_hidden p:not(.pointer) {
	color:#fff;
}

#accordion section.ac_hidden {
	height:38px;
}

#accordion section.ac_hidden h1{
	background-color:rgba(128,128,128,0.3);	
}


#accordion .pointer {
	padding:0;
	margin:10px 0 0 6px;
	line-height:20px;
	width:13px;
	position:absolute;
}

#accordion .pointer i{
	color: maroon;
}

#accordion section:not(.ac_hidden) h1 {
	background-color:rgba(255,0,0,0.7);
}

#accordion section:not(.ac_hidden) .pointer {
	display:block;
	-webkit-transform:rotate(90deg);
	-moz-transform:rotate(90deg);
	-o-transform:rotate(90deg);
	transform:rotate(90deg);
	padding:0;
}

#accordion div.content-details{
	font-family: proxima_nova_rgregular;
	padding:8px;
	text-align: center;

}

.content-details h3{
	margin-bottom: 6px;
}

.timeleftauction{
	width: 100%;
	font-size: 16px;
	padding: 0px;
	padding-top:6px;
	padding-bottom: 8px;
	text-align: center;
}

.content-details p{
	text-align: justify;
}

</style>

<script type="text/javascript">
$(document).ready(function() {
  $("#accordion section h1").click(function(e) {
    $(this).parents().siblings("section").addClass("ac_hidden");
    $(this).parents("section").removeClass("ac_hidden");

    e.preventDefault();
  });
});

</script>

@endsection