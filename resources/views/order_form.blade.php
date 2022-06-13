@extends('layouts.master')
@section('content')
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">New Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Order Lists</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <form action="{{ route('order.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                            @foreach($dishes as $dish)
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ url('/images/'. $dish->image) }}" width="220" height="220" class="img-rounded">
                                                <h5 class="card-title mt-3 mb-3">{{ $dish->name }}</h5>
                                                <input type="number" name="{{ $dish->id }}" class="form-control mt-3 mb-3">
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            </div>
                            <div class="form-group">
                                <label>Tables</label>
                                <select class="form-control select2" style="width: 100%;" name="table">
                                    @foreach($tables as $table)
                                        <option value="{{ $table->id }}" selected="selected" data-select2-id="3">{{ $table->number }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success" value="Submit">
                        </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Dish Name</th>
                            <th>Table Number</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->dish->name }}</td>
                                <td>{{ $order->table_id }}</td>
                                <td>{{ $status[$order->status] }}</td>
                                <td>
                                    <div>
                                        <a href="/order/{{ $order->id }}/serve" class="btn btn-warning">Serve</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

