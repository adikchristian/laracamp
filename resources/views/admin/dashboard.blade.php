@extends('layouts.admin.app')

@section('content')
    <section class="row">
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="lead">Total Transaksi</div>
                    <h2 class="card-title mt-2 mb-2">{{ $countTransaction }}</h2>
                    <p class="small text-muted">{{ date('d M Y', $startDate) }} - {{ date('d M Y', $endDate) }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="lead">Total User</div>
                    <h2 class="card-title mt-2 mb-2">{{ $countUser }}</h2>
                    <p class="small text-muted">Per {{ date('d M Y') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="lead">Total Camp</div>
                    <h2 class="card-title mt-2 mb-2">{{ $countCamp }}</h2>
                    <p class="small text-muted">Per {{ date('d M Y') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
