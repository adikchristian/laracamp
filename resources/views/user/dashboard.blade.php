@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @foreach ($checkout as $item)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{ $item->Camp->title }}</strong>
                                    </p>
                                    <p>
                                        {{ $item->created_at->format('M d y') }}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{ $item->Camp->price }}k</strong>
                                </td>
                                <td>
                                    <strong>{{ $item->payment_status }}</strong>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
