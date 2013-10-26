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

    $('#save').on('click', function() {
        $('#body').val($('#editor').cleanHtml());
    });
</script>
@stop

{{
Asset::queue('jqueryui', 'js/jquery-ui-1.10.3.custom.min.js', 'jquery');
Asset::queue('jqueryui-touchpunch', 'js/jquery.ui.touch-punch.min.js', 'jqueryui');
Asset::queue('markdown', 'js/markdown/markdown.min.js', 'jquery');
Asset::queue('markdown-bootstrap', 'js/markdown/bootstrap-markdown.min.js', 'markdown');
Asset::queue('jquery-hotkeys', 'js/jquery.hotkeys.min.js', 'jquery');
Asset::queue('bootstrap-wysiwyg', 'js/bootstrap-wysiwyg.min.js', 'bootstrap');
Asset::queue('bootbox', 'js/bootbox.min.js', 'bootstrap');
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

                <br/><br/>

                <a href="#" class="btn btn-sm btn-block btn-primary">
                    <span class="bigger-110">Edit Ticket</span>
                </a>

                <a href="#" class="btn btn-sm btn-block btn-danger">
                    <span class="bigger-110">Delete Ticket</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-9">

        <div class="widget-box">
            <div class="widget-header widget-header-flat">
                <h4>{{ $ticket->title }}</h4>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    {{ $ticket->body }}
                </div>
            </div>
        </div>

        <div class="dialogs" style="width: auto;">
            @foreach($ticket->responses as $response)
            <div class="itemdiv dialogdiv">
                <div class="user">
                    <img alt="" src="{{ $response->user->getGravatar() }}">
                </div>

                <div class="body">
                    <div class="time">
                        <i class="icon-time"></i>
                        <span class="blue">{{ $response->created_at }}</span>
                    </div>

                    <div class="name">
                        <a href="#">{{ $response->user->name() }}</a>
                    </div>
                    <div class="text">{{ $response->body }}</div>
                </div>
            </div>
            @endforeach

        </div>

        @if($errors->has())

        We encountered the following errors:

        <ul>
            @foreach($errors->all() as $message)

            <li>{{ $message }}</li>

            @endforeach
        </ul>

        @endif
        <div class="response">
            {{ Form::open(array('action' => 'Capisso\\CustomerService\\TicketController@store')) }}
            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}"/>
            <input type="hidden" name="type" value="response"/>
            <input type="hidden" id="body" name="body"/>


            <div id="editor" class="wysiwyg-editor">{{ Input::old('body') }}</div>

            <br>

            <div class="controls">
                <button type="submit" id="save" class="btn btn-primary input-medium pull-right">Respond</button>
            </div>
            {{ Form::close() }}
        </div>

    </div>
</div>




@foreach($ticket->responses as $response)

@endforeach

@stop
