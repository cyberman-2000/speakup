@extends('layouts.admin_layout')
@section('admin_content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminaka/css/pochta.css')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart">
                    <div class="cart-body bg-primary text-white mailbox-widget pb-0">
                        <h2 class="text-white pb-3">Your Mailbox</h2>
                        <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                                    <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                    <span class="d-none d-md-block"> INBOX</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                            <div>
                                <div class="row p-4 no-gutters align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                        <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>350 Unread emails</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <ul class="list-inline dl mb-0 float-left float-md-right">
                                            <li class="list-inline-item text-info mr-3">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Compose</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item text-danger">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                        <tbody>
                                        <!-- row -->
                                        @foreach($pochta as $value)
                                        <tr>
                                            <!-- star -->
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <td>
                                                    <span class="mb-0 text-muted">{{$value->name}}</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                            <a class="link" href="{{$value->id}}">
                                                       @if($value->watched == 0)  <span class="badge badge-pill text-white font-medium badge-danger mr-2">New</span>@endif
                                                        <span class="text-dark">{{$value->subject}}-</span>
                                            </a>
                                                </td>
                                                <!-- Attachment -->
                                                <td><i class="fa fa-phone text-muted"> +998{{$value->phone_number}}</i></td>
                                                <!-- Time -->
                                                <td class="text-muted">{{$value->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        <!-- row -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
@endsection
