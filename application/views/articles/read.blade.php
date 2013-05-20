@layout('inner')

@section('content')

<h3>{{$article['title']}}</h3>

<img src="{{ URL::base().'/storage/articles/'.$article['_id'].'/art_pic0'.$article['defaultpic'].'.jpg' }}" alt="{{ $article['title']}}" class=""  />
{{ $article['bodycopy']}}
	


@endsection
