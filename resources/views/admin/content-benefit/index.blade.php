@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Content Benefit</h4>
            <a href="{{ route('admin.content-benefit.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Title</td>
                                    <td>Sub Title</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contentBenefit as $num => $item)
                                    <tr>
                                        <td>{{ $num + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>
                                            <a href="{{ route('admin.content-benefit.edit', $item->id) }}"
                                                class="btn btn-sm btn-warning text-white">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.content-benefit.destroy', $item->id) }}" method="POST"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                        class="fas fa-trash text-white"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" align="center"><b>Tidak Ada Data</b></td>
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
