@extends('Layout.sidebar_admin')

@section('dashboardContent')

@if(Auth::check())

<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Change Password</h5>

        <form method="POST" action="{{route('change-password.update')}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if(session()->has('success'))
                <div class="text-success mb-3">{{ session()->get('sucesss')}} </div>
            @endif

            <div class="mb-4 row">
                <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>
                <div class="col-sm-9">
                    <input id="current_password" name="current_password" type="password" class="form-control">
                    <span toggle="#current_password" class="ti ti-eye toggle-password"
                        style="float: right; margin-top:-25px; margin-right: 10px;"></span>
                </div>
                @error('current_password')
                <div class="col-sm-3">
                    <label class="col-sm-3 col-form-label"></label>
                </div>

                <div class="col-sm-9">
                    <div class="form-text text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-4 row">
                <label for="password" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                    <input id="password" name="password" type="password" class="form-control" value="">
                    <span toggle="#password" class="ti ti-eye toggle-password"
                        style="float: right; margin-top:-25px; margin-right: 10px;"></span>
                </div>
                @error('password')
                <div class="col-sm-3">
                    <label class="col-sm-3 col-form-label"></label>
                </div>

                <div class="col-sm-9">
                    <div class="form-text text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-4 row">
                <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                        value="">
                    <span toggle="#password_confirmation" class="ti ti-eye toggle-password"
                        style="float: right; margin-top:-25px; margin-right: 10px;"></span>
                </div>
                @error('password_confirmation')
                <div class="col-sm-3">
                    <label class="col-sm-3 col-form-label"></label>
                </div>

                <div class="col-sm-9">
                    <div class="form-text text-danger">{{ $message }}</div>
                </div>
                @enderror
            </div>

            <div class="mb-0 row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <div class="d-flex gap-2">
                        <a href="/dashboard/admin/home"
                            class="btn btn-danger d-flex align-items-center">Cancel</a>
                        <button type="submit" class="btn btn-primary d-flex align-items-center">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endif
@endsection
