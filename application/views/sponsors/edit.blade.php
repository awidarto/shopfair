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
                
                {{ $form->text('title','Title.req','',array('class'=>'text span12','id'=>'title')) }}
                
                {{ $form->text('slug','Slug.req','',array('class'=>'text span12','id'=>'slug')) }}
                {{ $form->textarea('shorts','Short.req','',array('class'=>'text span12','id'=>'shorts')) }}

                {{ Form::label('bodycopy','Body *') }}

                {{ View::make('partials.editortoolbar')->render() }}

                {{ $form->textarea('bodycopy','','',array('class'=>'text span12','id'=>'bodycopy','style'=>'height:250px;')) }}

        </fieldset>
        
    </div>

    <div class="span6">

        <fieldset>
            <legend>Sponsor Detail</legend>
              {{ $form->text('sponsorURL','Sponsor Website URL','',array('class'=>'text input-xxlarge','id'=>'sponsorURL','placeholder'=>'Sponsor Website URL')) }}

        </fieldset>

        <fieldset>
            <legend>Publishing</legend>

                {{ $form->select('publishStatus','Publish Status',Config::get('kickstart.publishstatus'),'online',array('id'=>'publishStatus'))}}<br />

                {{ $form->text('publishFrom','Scheduled','',array('class'=>'text codePhone date','id'=>'publishFrom','placeholder'=>'From')) }}
                {{ $form->text('publishUntil','','',array('class'=>'text codePhone date','id'=>'publishUntil','placeholder'=>'To')) }}

        </fieldset>
        <fieldset>
            <legend>Details</legend>
                {{ $form->select('section','Default Section',Config::get('content.sponsors.sections'),null,array('id'=>'section','class'=>'input-medium'))}}

                {{ $form->select('category','Category',Config::get('content.sponsors.categories'),null,array('id'=>'category','class'=>'input-medium'))}}<br />

                {{ $form->text('tags','Tags.req','',array('class'=>'text tag_keyword span6','id'=>'tags')) }}

        </fieldset>

        <fieldset>
            <legend>Pictures</legend>

              @for($i=1;$i<6;$i++)
                  <div class="row-fluid">


                    <div  class="span2">
                      {{ HTML::image(URL::base().'/storage/sponsors/'.$formdata['_id'].'/sm_pic0'.$i.'.jpg?'.time(), 'sm_pic0'.$i.'.jpg', array('id' => $formdata['_id'])) }}
                    </div>

                    <div class="span7">
                      {{ $form->file('pic0'.$i,'Picture #'.$i)}}
                   </div>
                    <div class="span3">
                      {{ $form->radio('defaultpic','Default',$i)}}
                    </div>

                  </div>
              @endfor

        </fieldset>

    </div>
</div>

<hr />

<div class="row right">
{{ Form::submit('Save',array('class'=>'button'))}}&nbsp;&nbsp;
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