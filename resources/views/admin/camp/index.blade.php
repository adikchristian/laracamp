@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Camp</h4>
            <a href="#" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Title</td>
                                    <td>Slug</td>
                                    <td>Price</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($camps as $num => $item)
                                    <tr>
                                        <td>{{ $num + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>${{ $item->price }}k</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
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
    </section>
@endsection
