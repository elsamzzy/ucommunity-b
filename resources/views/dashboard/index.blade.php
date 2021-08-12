@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-6 mb-4 mb-xl-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                                <h6 class="font-weight-normal mb-2">Last login was {{$user->created_at->diffForHumans()}}.</h6>
                            </div>
                            <!--
                            <div class="ml-lg-5 d-lg-flex d-none">
                                <button type="button" class="btn bg-white btn-icon">
                                    <i class="mdi mdi-view-grid text-success"></i>
                                </button>
                                <button type="button" class="btn bg-white btn-icon ml-2">
                                    <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                                </button>
                            </div>
                            -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-md-end">
                            <div>
                                <h3 class="text-dark font-weight-bold mb-2">Your routing number</h3>
                                <h6 class="font-weight-normal mb-2">#887{{$user->id}}53</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-md-center">
                    <div class="col-lg-4 d-flex grid-margin stretch-card">
                        <div class="card sale-diffrence-border">
                            <div class="card-body text-center">
                                <h2 class="text-dark mb-2 font-weight-bold">${{$user->balance}}</h2>
                                <h4 class="card-title mb-1"> Balance
                                    <small class="text-muted">@ {{date("F")}} {{date("Y")}}</small>
                                </h4> <br>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Request Withdrawal
                                </button>
                                <button class="d-none" id="request" data-toggle="modal" data-target="#exampleModal2"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Last 5 Transactions</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transactions as $trans)
                                            <tr>
                                                <td>${{$trans->amount}}</td>
                                                @if($trans->incoming == 'D')
                                                    <td class="text-danger">
                                                        <label class="badge badge-danger">Debited</label>
                                                    </td>
                                                    <td class="text-danger"><i class="mdi mdi-arrow-down"></i></td>
                                                @elseif($trans->incoming == 'C')
                                                    <td class="text-success">
                                                        <label class="badge badge-success">Credited</label>
                                                    </td>
                                                    <td class="text-success"><i class="mdi mdi-arrow-up"></i></td>
                                                @elseif($trans->incoming == 'P')
                                                    <td class="text-warning">
                                                        <label class="badge badge-warning">Pending</label>
                                                    </td>
                                                    <td class="text-warning"><i class="mdi mdi-arrow-left"></i><i class="mdi mdi-arrow-right"></i></td>
                                                @endif
                                                <td>{{$trans->created_at->diffForHumans()}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" onclick='window.location.href = "{{route('dashboard.transactions')}}"'>View All</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="footer-wrap">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © U-Community B 2020</span>
                        <!--
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Request Withdrawal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" >
                    @csrf
                    <div class="modal-body">
                        <label for="amount">Amount in dollars($)</label>
                        <input type="number" id="amount" class="form-control" name="amount" placeholder="Input amount" />
                    </div>
                    <div class="modal-footer text-center">
                        <!--
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        -->
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="move()">Withdraw</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Requesting Withdrawal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="myProgress">
                        <div id="myBar">10%</div>
                        <div class="text-center mt-3">
                            <h5 id="progmess" class="d-none text-danger">Withdrawal failed, Contact your account officer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
