@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Camp Benefit</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('components.alert')
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td colspan="2">Camp</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $camp->title }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>${{ $camp->price }}k</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Form Benefit</div>
                    <div class="card-body">
                        <form action="{{ route('admin.camp-benefit.store').'?q='.$camp->id }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    placeholder="Nama">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                <a href="{{ route('admin.camp.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    @include('admin.camp-benefit.list')
                </div>
            </div>
        </div>
    </section>
@endsection
