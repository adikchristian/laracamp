@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Report Checkout</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Filter Checkout</div>
                    <div class="card-body">
                        <form action="{{ route('admin.report.checkout.filter') }}" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Periode</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <input type="date" class="form-control form-control-sm" name="start"
                                                placeholder="Ex: Mastering Javascript" value="{{ $startDate }}">
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <input type="date" class="form-control form-control-sm" name="end"
                                                placeholder="Ex: Mastering Javascript" value="{{ $endDate }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Payment Status</label>
                                <div class="col-sm-4">
                                    <select class="form-select form-select-sm" name="status">
                                        @if ($status == 'paid')
                                            <option value="">Semua Status</option>
                                            <option value="paid" selected>Paid</option>
                                            <option value="waiting">Waiting</option>
                                            <option value="pending">Pending</option>
                                            <option value="failed">Failed</option>
                                        @elseif($status == 'waiting')
                                            <option value="">Semua Status</option>
                                            <option value="paid">Paid</option>
                                            <option value="waiting" selected>Waiting</option>
                                            <option value="pending">Pending</option>
                                            <option value="failed">Failed</option>
                                        @elseif($status == 'pending')
                                            <option value="">Semua Status</option>
                                            <option value="paid">Paid</option>
                                            <option value="waiting">Waiting</option>
                                            <option value="pending" selected>Pending</option>
                                            <option value="failed">Failed</option>
                                        @elseif($status == 'failed')
                                            <option value="">Semua Status</option>
                                            <option value="paid">Paid</option>
                                            <option value="waiting">Waiting</option>
                                            <option value="pending">Pending</option>
                                            <option value="failed" selected>Failed</option>
                                        @else
                                            <option value="">Semua Status</option>
                                            <option value="paid">Paid</option>
                                            <option value="waiting">Waiting</option>
                                            <option value="pending">Pending</option>
                                            <option value="failed">Failed</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-sm btn-success">Tampilkan</button>
                                    <a href="{{ route('admin.report.checkout.export-pdf').'?start='.$startDate.'&end='.$endDate.'&status='.$status }}" class="btn btn-sm btn-primary">Export PDF</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Data Checkout</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->Camp->title }}</td>
                                        <td>Rp. {{ number_format($checkout->Camp->price * 1000) }}</td>
                                        <td>{{ $checkout->created_at->format('d M Y') }}</td>
                                        <td>{{ $checkout->payment_status }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" align="center"><b>Data Kosong</b></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
