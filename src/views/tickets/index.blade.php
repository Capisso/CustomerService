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
            <span class="blue bigger-150">Active Tickets</span>
            <span class="grey bigger-110">(3 unread tickets)</span>
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

<div id="id-message-item-navbar" class="hide message-navbar align-center clearfix">
    <div class="message-bar">
        <div class="message-toolbar">
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
            <a href="#" class="btn-back-message-list">
                <i class="icon-arrow-left blue bigger-110 middle"></i>
                <b class="bigger-110 middle">Back</b>
            </a>
        </div>

        <div class="messagebar-item-right">
            <i class="icon-time bigger-110 orange middle"></i>
            <span class="time grey">Today, 7:15 pm</span>
        </div>
    </div>
</div>

<div id="id-message-new-navbar" class="hide message-navbar align-center clearfix">
    <div class="message-bar">
        <div class="message-toolbar">
            <a href="#" class="btn btn-xs btn-message">
                <i class="icon-save bigger-125"></i>
                <span class="bigger-110">Save Draft</span>
            </a>

            <a href="#" class="btn btn-xs btn-message">
                <i class="icon-remove bigger-125"></i>
                <span class="bigger-110">Discard</span>
            </a>
        </div>
    </div>

    <div class="message-item-bar">
        <div class="messagebar-item-left">
            <a href="#" class="btn-back-message-list no-hover-underline">
                <i class="icon-arrow-left blue bigger-110 middle"></i>
                <b class="middle bigger-110">Back</b>
            </a>
        </div>

        <div class="messagebar-item-right">
																	<span class="inline btn-send-message">
																		<button type="button" class="btn btn-sm btn-primary no-border">
                                                                            <span class="bigger-110">Send</span>

                                                                            <i class="icon-arrow-right icon-on-right"></i>
                                                                        </button>
																	</span>
        </div>
    </div>
</div>

<div class="message-list-container">
<div class="message-list" id="message-list">
<div class="message-item message-unread">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star orange2"></i>
    <span class="sender" title="Alex John Red Smith">Alex John Red Smith </span>
    <span class="time">1:33 pm</span>

																	<span class="summary">
																		<span class="text">
																			Click to open this message
																		</span>
																	</span>
</div>

<div class="message-item message-unread">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>

																	<span class="sender" title="John Doe">
																		John Doe
																		<span class="light-grey">(4)</span>
																	</span>
    <span class="time">7:15 pm</span>

																	<span class="attachment">
																		<i class="icon-paper-clip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-pink mail-tag"></span>
																		<span class="text">
																			Clik to open this message right here
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Philip Markov">Philip Markov </span>
    <span class="time">10:15 am</span>

																	<span class="attachment">
																		<i class="icon-paper-clip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="icon-reply light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star orange2"></i>
    <span class="sender" title="Sabrina">Sabrina </span>
    <span class="time">Yesterday</span>

																	<span class="summary">
																		<span class="text">
																			Nullam quis risus eget urna mollis ornare
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Philip Markov">Philip Markov </span>
    <span class="time">Yesterday</span>

																	<span class="attachment">
																		<i class="icon-paper-clip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-success mail-tag"></span>
																		<span class="text">
																			Vestibulum id ligula porta felis euismod
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Doctor Gomenz">Doctor Gomenz </span>
    <span class="time">April 5</span>

																	<span class="summary">
																		<span class="text">
																			Vim te vivendo convenire, summo fuisset
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Robin Hood">Robin Hood </span>
    <span class="time">April 4</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="icon-reply light-grey"></i>
																		</span>
																		<span class="text">
																			No eos veniam equidem mentitum, his porro
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Google Inc">Google Inc </span>
    <span class="time">April 3</span>

																	<span class="summary">
																		<span class="badge badge-grey mail-tag"></span>
																		<span class="text">
																			Convallis facilisis euismod urna sodales
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Shrek">Shrek </span>
    <span class="time">March 28</span>

																	<span class="attachment">
																		<i class="icon-paper-clip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="icon-flag icon-flip-horizontal light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan messenger
																		</span>
																	</span>
</div>

<div class="message-item">
    <label class="inline">
        <input type="checkbox" class="ace">
        <span class="lbl"></span>
    </label>

    <i class="message-star icon-star-empty light-grey"></i>
    <span class="sender" title="Yahoo!">Yahoo! </span>
    <span class="time">March 27</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="icon-mail-forward light-grey"></i>
																		</span>
																		<span class="text">
																			Tofu biodiesel williamsburg marfa, four loko mcsweeney
																		</span>
																	</span>
</div>
</div>
</div><!-- /.message-list-container -->

<div class="message-footer clearfix">
    <div class="pull-left"> 151 messages total </div>

    <div class="pull-right">
        <div class="inline middle"> page 1 of 16 </div>

        &nbsp; &nbsp;
        <ul class="pagination middle">
            <li class="disabled">
																		<span>
																			<i class="icon-step-backward middle"></i>
																		</span>
            </li>

            <li class="disabled">
																		<span>
																			<i class="icon-caret-left bigger-140 middle"></i>
																		</span>
            </li>

            <li>
																		<span>
																			<input value="1" maxlength="3" type="text">
																		</span>
            </li>

            <li>
                <a href="#">
                    <i class="icon-caret-right bigger-140 middle"></i>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="icon-step-forward middle"></i>
                </a>
            </li>
        </ul>
    </div>
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
