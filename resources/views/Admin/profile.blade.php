@extends('Layout.sidebar_admin')

@section('dashboardContent')
@if(Auth::check())
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <h5 class="card-title fw-semibold mb-4">Profile Admin Information</h5>
                <div class="card">
                    @if(is_null(auth()->user()->image_profile))
                        <img src="{{asset('images/profile/user-1.jpg')}}" class="card-img-top" alt="..." style="width: 100%;">
                    @else
                        <img src="{{asset('images/profile/'. auth()->user()->image_profile)}}" class="card-img-top" alt="..." style="width: 100%;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title mb-0">{{ old('bio', Auth::user()->nama)}}</h5>
                        <p class="card-text"><span>@</span>{{ old('bio', Auth::user()->username)}}</p>
                        <p class="card-text">{{ old('bio', Auth::user()->bio)}}</p>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <h5 class="card-title fw-semibold mb-4">Change Profile Information</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-4 row">
                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username', Auth::user()->username)}}">
                                </div>
                                @error('username')
                                <div class="col-sm-3">
                                    <label class="col-sm-3 col-form-label"></label> 
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-text text-danger">{{ $message }}</div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ old('nama', Auth::user()->nama)}}">
                                </div>
                                @error('nama')
                                <div class="col-sm-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-text text-danger">{{ $message }}</div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email', Auth::user()->email)}}">
                                </div>
                                @error('email')
                                <div class="col-sm-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-text text-danger">{{ $message }}</div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 row">
                                <label for="bio" class="col-sm-3 col-form-label">Bio</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control"
                                        name="bio">{{ old('bio', Auth::user()->bio)}}</textarea>
                                </div>
                                @error('bio')
                                <div class="col-sm-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-text text-danger">{{ $message }}</div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 row">
                                <label for="image_profile" class="col-sm-3 col-form-label">Image Profile</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="image_profile" name="image_profile" value="{{old('image_profile', Auth::user()->image_profile)}}">
                                </div>
                                @error('image_profile')
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
                                        <button type="submit" class="btn btn-primary d-flex align-items-center">Save
                                            Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
