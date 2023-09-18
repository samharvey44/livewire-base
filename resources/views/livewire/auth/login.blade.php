@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ mix('build/css/auth/login.css') }}">
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
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" placeholder="Enter your username..." id="username" name="username" wire:model="username">
                </div>

                <div>
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" placeholder="Enter your password..." id="password" name="password" wire:model="password">
                </div>

                <div class="mt-4 d-flex">
                    <button class="btn btn-primary ms-auto">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
