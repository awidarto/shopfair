@layout('master')

@section('content')


<div class="row-fluid">
	<div class="span4">
		<div class="tableHeader">
			<h3 class="formHead">Tweets</h3>
		</div>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="span4">
		<div class="tableHeader">
			<h3 class="formHead">Bid Stream</h3>
		</div>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<span class="title">title</span>
						<p>
							Accessing the Twitter streaming API with Node.js is a breeze with the nTwitter.
						</p>
					</td>
				</tr>
			</tbody>
		</table>


	</div>
	<div class="span4">
		<div class="tableHeader">
			<h3 class="formHead">{{ $auction['title'] }}</h3>
		</div>
		<div>
			<p>
				{{ $auction['bodycopy']}}
			</p>
		</div>
		<div>
			<h3>Auction Date</h3>
			<div >{{ date( 'd-m-Y', $auction['auctionDate']->sec )  }}</div>
		</div>
		<div>
			<h3>Start</h3>
			<div >{{ date( 'H:m', $auction['auctionStart']->sec )  }}</div>
		</div>
		<div>
			<h3>End</h3>
			<div >{{ date( 'H:m', $auction['auctionEnd']->sec )  }}</div>
		</div>
		<h3>Thresholds</h3>
		<div>
			<div class="bidtitle">Threshold 1</div>
			<div id="bidthreshhold-1">{{ $auction['bidValue_1']}}</div>
		</div>
		<div>
			<div class="bidtitle">Threshold 1</div>
			<div id="bidthreshhold-2">{{ $auction['bidValue_2']}}</div>
		</div>
		<div>
			<div class="bidtitle">Threshold 1</div>
			<div id="bidthreshhold-3">{{ $auction['bidValue_3']}}</div>
		</div>
	</div>
</div>

@endsection