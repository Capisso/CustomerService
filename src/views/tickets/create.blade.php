@extends('templates/sidebar')

@section('scripts')
<script>

    function showErrorAlert (reason, detail) {
        var msg='';
        if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
        else {
            console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>'+
        '<strong>File upload error</strong> '+msg+'</div>').prependTo('#alerts');
    }

    $('#editor').ace_wysiwyg({
        toolbar:
            [
                'font',
                null,
                'fontSize',
                null,
                {name:'bold', className:'btn-info'},
                {name:'italic', className:'btn-info'},
                {name:'strikethrough', className:'btn-info'},
                {name:'underline', className:'btn-info'},
                null,
                {name:'insertunorderedlist', className:'btn-success'},
                {name:'insertorderedlist', className:'btn-success'},
                {name:'outdent', className:'btn-purple'},
                {name:'indent', className:'btn-purple'},
                null,
                {name:'justifyleft', className:'btn-primary'},
                {name:'justifycenter', className:'btn-primary'},
                {name:'justifyright', className:'btn-primary'},
                {name:'justifyfull', className:'btn-inverse'},
                null,
                {name:'createLink', className:'btn-pink'},
                {name:'unlink', className:'btn-pink'},
                null,
                {name:'insertImage', className:'btn-success'},
                null,
                'foreColor',
                null,
                {name:'undo', className:'btn-grey'},
                {name:'redo', className:'btn-grey'}
            ],
        'wysiwyg': {
            fileUploadError: showErrorAlert
        }
    }).prev().addClass('wysiwyg-style2');

    $(".chosen-select").chosen();
    $('#chosen-multiple-style').on('click', function(e){
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
        else $('#form-field-select-4').removeClass('tag-input-style');
    });

    $('[data-rel=tooltip]').tooltip({container:'body'});
    $('[data-rel=popover]').popover({container:'body'});

    $('#save').on('click', function() {
        $('#body').val($('#editor').cleanHtml());
    });
</script>
@stop

{{
Asset::queue('chosen', 'css/chosen.css');

Asset::queue('jqueryui', 'js/jquery-ui-1.10.3.custom.min.js', 'jquery');
Asset::queue('jqueryui-touchpunch', 'js/jquery.ui.touch-punch.min.js', 'jqueryui');
Asset::queue('markdown', 'js/markdown/markdown.min.js', 'jquery');
Asset::queue('markdown-bootstrap', 'js/markdown/bootstrap-markdown.min.js', 'markdown');
Asset::queue('jquery-hotkeys', 'js/jquery.hotkeys.min.js', 'jquery');
Asset::queue('bootstrap-wysiwyg', 'js/bootstrap-wysiwyg.min.js', 'bootstrap');
Asset::queue('bootbox', 'js/bootbox.min.js', 'bootstrap');
Asset::queue('chosen', 'js/chosen.jquery.min.js', 'jquery');
}}

@section('content')

<div class="row">
    <div class="col-lg-3">
        <div class=" center">
            <div>
                <span class="profile-picture">
                    <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar"
                         src="https://2.gravatar.com/avatar/5e6eeb2d2beeef0796a548e415a59c75?d=https%3A%2F%2Fidenticons.github.com%2F239e8ae0a22e0a03bd652c87fb04f0cb.png&s=440">
                </span>

                <div class="space-4"></div>

                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a href="#" class="user-title-label" data-toggle="dropdown">
                            <span class="white">Luke Strickland</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        @if($errors->has())

        We encountered the following errors:

        <ul>
            @foreach($errors->all() as $message)

            <li>{{ $message }}</li>

            @endforeach
        </ul>

        @endif

        {{ Form::open(array('action' => 'Capisso\\CustomerService\\TicketController@store')) }}
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-4">
                        {{ Form::label('to', 'To') }}<br>
                        {{ Form::select('to', $customers, null, array('id' => 'priority', 'class' => 'width-90 chosen-select')) }}
                    </div>
                    <div class="col-lg-4">
                        {{ Form::label('priority', 'Priority') }}<br>
                        {{ Form::select('priority', Ticket::getPriorities(), 'normal', array('id' => 'priority', 'class' => 'width-100')) }}
                    </div>
                    <div class="col-lg-4">
                        {{ Form::label('status', 'Status') }}<br>
                        {{ Form::select('status', Ticket::getStatuses(), 'new', array('id' => 'status', 'class' => 'width-100')) }}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {{ Form::text('title', null, array('placeholder' => 'Ticket Title', 'id' => 'title', 'class' => 'form-control'))  }}
            </div>

            <input type="hidden" id="body" name="body"/>


            <div id="editor" class="wysiwyg-editor">{{ Input::old('body') }}</div>

            <br>

            <div class="controls">
                <button type="submit" id="save" class="btn btn-primary input-medium pull-right">Send</button>
            </div>
        {{ Form::close() }}
    </div>
</div>


@stop
