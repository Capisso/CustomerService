@extends('templates/sidebar')

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

        <div class="dialogs" style="overflow: hidden; width: auto; height: 300px;">
            <div class="itemdiv dialogdiv">
                <div class="user">
                    <img alt="Alexa's Avatar" src="https://2.gravatar.com/avatar/5e6eeb2d2beeef0796a548e415a59c75">
                </div>

                <div class="body">
                    <div class="time">
                        <i class="icon-time"></i>
                        <span class="green">4 sec</span>
                    </div>

                    <div class="name">
                        <a href="#">Alexa</a>
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                    <div class="tools">
                        <a href="#" class="btn btn-minier btn-info">
                            <i class="icon-only icon-share-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="itemdiv dialogdiv">
                <div class="user">
                    <img alt="John's Avatar" src="https://2.gravatar.com/avatar/5e6eeb2d2beeef0796a548e415a59c75">
                </div>

                <div class="body">
                    <div class="time">
                        <i class="icon-time"></i>
                        <span class="blue">38 sec</span>
                    </div>

                    <div class="name">
                        <a href="#">John</a>
                    </div>
                    <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>

                    <div class="tools">
                        <a href="#" class="btn btn-minier btn-info">
                            <i class="icon-only icon-share-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="itemdiv dialogdiv">
                <div class="user">
                    <img alt="Bob's Avatar" src="https://2.gravatar.com/avatar/5e6eeb2d2beeef0796a548e415a59c75">
                </div>

                <div class="body">
                    <div class="time">
                        <i class="icon-time"></i>
                        <span class="orange">2 min</span>
                    </div>

                    <div class="name">
                        <a href="#">Bob</a>
                        <span class="label label-info arrowed arrowed-in-right">admin</span>
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                    <div class="tools">
                        <a href="#" class="btn btn-minier btn-info">
                            <i class="icon-only icon-share-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@foreach($ticket->responses as $response)

@endforeach

@stop
