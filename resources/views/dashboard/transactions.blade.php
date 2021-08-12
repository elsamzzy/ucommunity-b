@extends('layouts.dashboard.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row mt-4">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Transactions</h4>
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
@endsection
