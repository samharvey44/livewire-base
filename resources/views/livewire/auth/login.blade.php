@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ mix('build/css/auth/login.css') }}">
@endpush

<div class="mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5 col-md-8 shadow p-3 rounded">
            <div class="d-flex justify-content-center">
                <div class="bg-primary rounded-circle d-flex justify-content-center align-items-center" id="login-icon-circle">
                    <i class="bi bi-person"></i>
                </div>
            </div>

            <h2 class="text-center mt-3">Login to {{ config('app.name') }}</h2>

            <form wire:submit="login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" placeholder="Enter your email..." id="email" name="email" wire:model="email">

                    @error('email')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" placeholder="Enter your password..." id="password" name="password" type="password" wire:model="password">

                    @error('password')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <input class="form-check-input" id="remember" name="remember" type="checkbox" wire:model="remember">
                    <label for="remember" class="form-check-label">Remember Me?</label>
                </div>

                <div class="mt-4 d-flex">
                    <button class="btn btn-primary ms-auto"><i class="bi bi-box-arrow-in-right"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
