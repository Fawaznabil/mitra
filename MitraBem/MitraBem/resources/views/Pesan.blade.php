@extends('layoutuser')
@section('content')

{{-- <div class="container" style="min-height: 60vh">
    <div class="row d-flex justify-content-center p-4"> --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <link href="{{ asset('css/pesan.css') }}" rel="stylesheet">
        <div class="container">
        <div class="row message-wrapper rounded shadow mb-20">
            <div class="col-md-4 message-sideleft">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5 class="panel-title">Conversations</h5>
                        </div>
                     
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-success">All Sources</button>
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#"><i class="fa fa-download"></i> Inbox</a></li>
                                    <li><a href="#"><i class="fa fa-upload"></i> Outbox</a></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-briefcase"></i> Other</a></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">
                        <div class="list-group no-margin list-message">
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Jeck Joko <small>Yesterday at 15:45</small></h4>
                                <p class="list-group-item-text">
                                    Ticket #78: <strong>Problems with custom CSS3</strong>
                                </p>
                                <span class="label label-success pull-right">SOLVED</span>
                                <div class="clearfix"></div>
                            </a>
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Toni Miring <small>Sunday at 12:33</small></h4>
                                <p class="list-group-item-text">Ticket #43: <strong>How do i use something</strong></p>
                                <span class="label label-success pull-right rounded">SOLVED</span>
                                <div class="clearfix"></div>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Bella Negoro <small>Sunday at 12:33</small></h4>
                                <p class="list-group-item-text">Ticket #15: <strong>Why doesn't my cheese work properly? :(</strong></p>
                                <span class="label label-default pull-right circle">OPEN</span>
                                <div class="clearfix"></div>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Daddy Botak <small>Sunday at 12:33</small></h4>
                                <p class="list-group-item-text">Can i have longer on my free trial please?</p>
                            </a>
                        </div><!-- /.list-group -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div><!-- /.message-sideleft -->
            <div class="col-md-8 message-sideright">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="media">
                            {{-- <a href="mail-compose.html" class="btn btn-danger pull-right rounded"><i class="fa fa-share"></i></a> --}}
                            <a class="pull-left" href="#">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Rebecca Cabean" class="img-circle avatar">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Rebecca Cabean <small>(Sales Manager)</small></h4>
                                <small>Thursday 5th July 2014-via Intercom</small>
                            </div>
                        </div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p class="lead">
                            RE : Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <br>
                        <p>
                            Thanks! <br>
                            Rebecca.
                        </p>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <div class="panel">
                    <div class="panel-heading">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="sarah tingting" class="img-circle avatar">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Sarah Tingting</h4>
                                <small>Thursday 5th July 2014-via Intercom</small>
                            </div>
                        </div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <p class="lead">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <hr>
                        <strong>Hi Tol Lee</strong>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div><!-- /.message-sideright -->
        </div>
        </div>

</div>
</div>
@endsection
