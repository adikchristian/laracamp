<!doctype html>
<html lang="en">

<head>
    @include('components.global.head')

    <title>Laracamp by BuildWith Angga</title>
</head>

<body>

    <section class="login-user">
        <div class="left">
            <img src="{{ asset('/images/ill_login_new.png') }}" alt="">
        </div>
        <div class="right">
            <a href="{{ route('welcome') }}"><img src="{{ asset('/images/logo.png') }}" class="logo" alt=""></a>
            <h1 class="header-third">
                Sign Up
            </h1>
            <p class="subheader">
                Because tomorrow become never
            </p>
            <p>
            @include('components.alert')
            <form action="{{ route('register.store') }}" class="basic-form" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Email Address</label>
                    <input type="text" name="email"
                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        value="{{ old('email') }}" required />
                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password"
                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        value="" required />
                    @if ($errors->has('password'))
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}" required />
                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="form-label">Occupation</label>
                    <input type="text" name="occupation"
                        class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}"
                        value="{{ old('occupation') }}" required />
                    @if ($errors->has('occupation'))
                        <p class="text-danger">{{ $errors->first('occupation') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone"
                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                        value="{{ old('phone') }}" required />
                    @if ($errors->has('phone'))
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <div class="mb-4">
                    <label class="form-label">Address</label>
                    <input type="text" name="address"
                        class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                        value="{{ old('address') }}" required />
                    @if ($errors->has('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <button type="submit" class="w-100 btn btn-primary">Daftar</button>
            </form>
            </p>
        </div>
    </section>

    @include('components.global.jslib')

</body>

</html>
