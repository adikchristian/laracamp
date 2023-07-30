@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Form Discount</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.discount.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                        placeholder="Name" value="{{ old('name') ?: $item->name  }}">
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" name="code"
                                        placeholder="Code" value="{{ old('code') ?: $item->code }}">
                                    @if ($errors->has('code'))
                                        <p class="text-danger">{{ $errors->first('code') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="2" class="form-control" name="description" placeholder="Description">{{ old('description') ?: $item->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Percentange</label>
                                <div class="col-sm-10">
                                    <input type="number"
                                        class="form-control {{ $errors->has('precentage') ? 'is-invalid' : '' }}" name="precentage"
                                        placeholder="Percentange" value="{{ old('precentage') ?: $item->precentage }}" min="1" max="100">
                                    @if ($errors->has('precentage'))
                                        <p class="text-danger">{{ $errors->first('precentage') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                    <a href="{{ $linkback }}" class="btn btn-danger">Kembali</a>
                                    <input type="hidden" name="id" value="{{ $item->id }}" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
