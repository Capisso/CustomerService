@extends('templates/sidebar')

@section('content')
<div class="row">
<div class="col-xs-12">
<div class="tabbable">
<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16">

    <li class="active">
        <a data-toggle="tab" href="#inbox" data-target="inbox">
            <i class="blue icon-inbox bigger-130"></i>
            <span class="bigger-110">Active</span>
        </a>
    </li>

    <li>
        <a data-toggle="tab" href="#sent" data-target="sent">
            <i class="orange icon-folder-close bigger-130 "></i>
            <span class="bigger-110">Archived</span>
        </a>
    </li>
</ul>

<div class="tab-content no-border no-padding">
<div class="tab-pane in active">
<div class="message-container">
<div id="id-message-list-navbar" class="message-navbar align-center clearfix">
    <div class="message-bar">
        <div class="message-infobar" id="id-message-infobar">
            <span class="blue bigger-150">{{ count($activeTickets) }} Active Tickets</span>
        </div>

        <div class="message-toolbar hide">
            <div class="inline position-relative align-left">
                <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                    <span class="bigger-110">Action</span>

                    <i class="icon-caret-down icon-on-right"></i>
                </a>

                <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                    <li>
                        <a href="#">
                            <i class="icon-mail-reply blue"></i>
                            &nbsp; Reply
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-mail-forward green"></i>
                            &nbsp; Forward
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-folder-open orange"></i>
                            &nbsp; Archive
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="icon-eye-open blue"></i>
                            &nbsp; Mark as read
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-eye-close green"></i>
                            &nbsp; Mark unread
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-flag-alt red"></i>
                            &nbsp; Flag
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="icon-trash red bigger-110"></i>
                            &nbsp; Delete
                        </a>
                    </li>
                </ul>
            </div>

            <div class="inline position-relative align-left">
                <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-folder-close-alt bigger-110"></i>
                    <span class="bigger-110">Move to</span>

                    <i class="icon-caret-down icon-on-right"></i>
                </a>

                <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                    <li>
                        <a href="#">
                            <i class="icon-stop pink2"></i>
                            &nbsp; Tag#1
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-stop blue"></i>
                            &nbsp; Family
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-stop green"></i>
                            &nbsp; Friends
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-stop grey"></i>
                            &nbsp; Work
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#" class="btn btn-xs btn-message">
                <i class="icon-trash bigger-125"></i>
                <span class="bigger-110">Delete</span>
            </a>
        </div>
    </div>

    <div>
        <div class="messagebar-item-left">
            <label class="inline middle">
                <input type="checkbox" id="id-toggle-all" class="ace">
                <span class="lbl"></span>
            </label>
        </div>

        <div class="messagebar-item-right">
            <div class="inline position-relative">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Sort &nbsp;
                    <i class="icon-caret-down bigger-125"></i>
                </a>

                <ul class="dropdown-menu dropdown-lighter pull-right dropdown-100">
                    <li>
                        <a href="#">
                            <i class="icon-ok green"></i>
                            Date
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-ok invisible"></i>
                            From
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-ok invisible"></i>
                            Subject
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="nav-search minimized">
            <form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ...">
																			<i class="icon-search nav-search-icon"></i>
																		</span>
            </form>
        </div>
    </div>
</div>



<div class="message-list-container">
    <div class="message-list" id="message-list">
        @foreach($activeTickets as $ticket)
        <div class="message-item message-unread">
            <label class="inline">
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
            </label>
            <span class="sender" title="Alex John Red Smith">{{{ $ticket->customer->name() }}} </span>
            <span class="time">{{ date('g:i a', $ticket->updated_at->timestamp) }}</span>
            <span class="summary">
                <span class="text">
                    <a href="{{ URL::action('Capisso\\CustomerService\\TicketController@show', array($ticket->id)) }}">{{{ $ticket->title }}}</a>
                </span>
            </span>
        </div>
        @endforeach
    </div>
</div>
<!-- /.message-list-container -->

<div class="message-footer clearfix">

</div>

<div class="hide message-footer message-footer-style2 clearfix">
    <div class="pull-left"> simpler footer </div>

    <div class="pull-right">
        <div class="inline middle"> message 1 of 151 </div>

        &nbsp; &nbsp;
        <ul class="pagination middle">
            <li class="disabled">
																		<span>
																			<i class="icon-angle-left bigger-150"></i>
																		</span>
            </li>

            <li>
                <a href="#">
                    <i class="icon-angle-right bigger-150"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
</div><!-- /.message-container -->
</div><!-- /.tab-pane -->
</div><!-- /.tab-content -->
</div><!-- /.tabbable -->
</div><!-- /.col -->
</div>
@stop
