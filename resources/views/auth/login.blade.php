<html>

<head>
    <title>Login Admin Laracamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body style="background: #F8F9FD;">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="d-flex justify-content-center mt-5 mb-3">
                        <img src="{{ asset('images/logo.png') }}" width="300px" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-3">Login Admin</h3>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <label for="inputEmail3" class="col-form-label">Email</label>
                                    <input type="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail3" class="col-form-label">Password</label>
                                    <input type="password"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password"
                                        placeholder="Password" value="{{ old('password') }}">
                                    @if ($errors->has('password'))
                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
