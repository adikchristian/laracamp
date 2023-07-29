@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Form Content Benefit</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.content-benefit.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title"
                                        placeholder="Title" value="{{ old('title') ?: $item->title }}">
                                    @if ($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Sub Title</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control {{ $errors->has('subtitle') ? 'is-invalid' : '' }}"
                                        name="subtitle" placeholder="Sub Title" value="{{ old('subtitle') ?: $item->subtitle }}">
                                    @if ($errors->has('subtitle'))
                                        <p class="text-danger">{{ $errors->first('subtitle') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="file"
                                        class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}"
                                        name="icon">
                                    @if ($errors->has('icon'))
                                        <p class="text-danger">{{ $errors->first('icon') }}</p>
                                    @endif
                                    <img src="{{ asset('storage') . '/' .$item->icon }}" width="80px" height="80px" class="mt-2" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ $linkback }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
