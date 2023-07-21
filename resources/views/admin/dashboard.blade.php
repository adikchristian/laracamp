@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Dashboard Admin
                        </div>
                        <div class="card-body">
                            @include('components.alert')
                            <table class="table table-striped">
                                <thead>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($checkouts as $checkout)
                                        <tr>
                                            <td>{{$checkout->User->name}}</td>
                                            <td>{{$checkout->Camp->title}}</td>
                                            <td>${{$checkout->Camp->price}}k</td>
                                            <td>{{$checkout->created_at->format('M d Y')}}</td>
                                            <td>
                                                @if ($checkout->id_paid)
                                                    <span class="badge bg-success">Paid</span>
                                                @else
                                                    <span class="badge bg-warning">Waiting</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!$checkout->id_paid)
                                                <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary btn-sm">Set To Paid</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
