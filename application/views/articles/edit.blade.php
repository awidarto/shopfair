@layout('master')


@section('content')
<div class="tableHeader">
<h3 class="formHead">{{$title}}</h3>
</div>

{{$form->open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

{{ $form->hidden('id',$formdata['_id'])}}

<div class="row-fluid formNewAttendee">
    <div class="span6">
        <fieldset>
            <legend>Main</legend>
                
                {{ $form->text('title','Title.req','',array('class'=>'text span11','id'=>'title')) }}
                
                {{ $form->text('slug','Slug.req','',array('class'=>'text span11','id'=>'slug')) }}
                {{ $form->textarea('shorts','Short.req','',array('class'=>'text span11','id'=>'shorts')) }}

                {{ Form::label('bodycopy','Body *') }}

                {{ View::make('partials.editortoolbar')->render() }}

                {{ $form->textarea('bodycopy','','',array('class'=>'text span11','id'=>'bodycopy','style'=>'height:250px;')) }}

        </fieldset>
        
    </div>

    <div class="span6">

        <fieldset>
            <legend>Publishing</legend>

                {{ $form->checkbox('setposter','Set As Home Poster','Yes',null)}}

                {{ $form->select('publishStatus','Publish Status',Config::get('kickstart.publishstatus'),'online',array('id'=>'publishStatus'))}}<br />

                {{ $form->text('publishFrom','','',array('class'=>'text codePhone date','id'=>'publishFrom','placeholder'=>'From')) }}
                {{ $form->text('publishUntil','','',array('class'=>'text codePhone date','id'=>'publishUntil','placeholder'=>'To')) }}

        </fieldset>
        <fieldset>
            <legend>Details</legend>
                {{ $form->select('section','Default Section',Config::get('content.articles.sections'),null,array('id'=>'section'))}}

                {{ $form->select('category','Category',Config::get('content.articles.categories'),null,array('id'=>'category'))}}<br />

                {{ $form->text('tags','Tags.req','',array('class'=>'text tag_keyword span6','id'=>'tags')) }}

        </fieldset>

        <fieldset>
            <legend>Pictures</legend>

              @for($i=1;$i<6;$i++)
                  <div class="row-fluid">


                    <div  class="span2">
                      {{ HTML::image(URL::base().'/storage/articles/'.$formdata['_id'].'/sm_pic0'.$i.'.jpg?'.time(), 'sm_pic0'.$i.'.jpg', array('id' => $formdata['_id'])) }}
                    </div>

                    <div class="span7">
                      {{ $form->file('pic0'.$i,'Picture #'.$i)}}
                   </div>
                    <div class="span3">
                      {{ $form->radio('defaultpic','Default',$i)}}<br />
                      {{ $form->radio('homeposterpic','Home Poster',$i)}}<br />
                      {{ $form->radio('wideproduct','Wide Product Image',$i)}}<br />
                      {{ $form->radio('squarethumb','Square Thumb',$i)}}<br />
                      {{ $form->radio('landthumb','Landscape Thumb',$i)}}<br />
                      {{ $form->radio('portthumb','Portrait Thumb',$i)}}
                    </div>

                  </div>
              @endfor

        </fieldset>

    </div>
</div>

<hr />

<div class="row right">
{{ Form::submit('Save',array('class'=>'btn primary'))}}&nbsp;&nbsp;
{{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
</div>
{{$form->close()}}

{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}   
{{ HTML::script('js/parser_rules/advanced.js') }}   

<script type="text/javascript">
$(document).ready(function() {

    $('select').select2({
      width : 'resolve'
    });

    $(":file").filestyle({
      classButton: 'uploader',
    });

    var editor = new wysihtml5.Editor('bodycopy', { // id of textarea element
      toolbar:      'wysihtml5-toolbar', // id of toolbar element
      parserRules:  wysihtml5ParserRules // defined in parser rules set 
    });

    $('#title').keyup(function(){
        var title = $('#title').val();
        var slug = string_to_slug(title);
        $('#slug').val(slug);
    });

  
});

</script>

@endsection