@extends('layouts.admin_layout')
@section('admin_content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('adminaka/css/pochta.css')}}">
    @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">

            {!! \Session::get('success') !!}

        </div>
    @endif
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
                                        <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>{{$pochta_count}} Unread emails</h3>
                                    </div>
                                </div>
                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <form action="{{route('pochta.destroy',$count)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                        <tbody>
                                        @foreach($pochta as $value)
                                        <tr>
                                                <td><input type="checkbox" name="id{{$value->id}}" value="{{$value->id}}" id="chk2"></td>
                                                <td><i class="fa fa-star text-warning"></i></td>
                                                <td>
                                                    <span class="mb-0 text-muted">{{$value->name}}</span>
                                                </td>
                                                <td>
                                                    <?php $id=$value->id;?>
                                            <a class="link" href="{{route('pochta.show',$id)}}">
                                                       @if($value->watched == 0)  <span class="badge badge-sm badge-pill text-white badge-danger mr-2">New</span>@endif
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
                                        <div class="col-md-12">

                                            {{$pochta->links('vendor.pagination.bootstrap-4')}}
                                        </div>
                                    <div class="col-sm-12 col-md-6 d-flex">
                                        <ul class="list-inline dl mb-0 float-left float-md-right">
                                            <li class="list-inline-item text-danger">
                                                    <button type="submit" class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                            </li>
                                        </ul>
                                    </div>
                                    </form>
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
