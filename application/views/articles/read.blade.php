@layout('inner')

@section('content')

<h3>{{$article['title']}}</h3>
<?php
$newdir = realpath(Config::get('kickstart.storage')).'/articles/'.$article["_id"];
if(file_exists($newdir)){?>
<img src="{{ URL::base().'/storage/articles/'.$article['_id'].'/art_pic0'.$article['defaultpic'].'.jpg' }}" alt="{{ $article['title']}}" class=""  />			
<?php
}
?>

{{ $article['bodycopy']}}
	


@endsection
