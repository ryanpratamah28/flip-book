@extends('Layout.sidebar_admin')

@section('dashboardContent')
@if(Auth::check())
<div class="card">
    <div class="card-body">
        <h1 class="card-title fw-semibold mb-4">Admin Guide</h1>

        <div class="guide">
            <h5 class="card-text fw-bold mb-2">
                My Profile
            </h5>
            <p class="mb-4">Admin can edit the information contained in it.
            </p>

            <h5 class="card-text fw-bold mb-2">
                Change Password
            </h5>
            <p class="mb-4">Admin can change the password if needed.
            </p>

            <h5 class="card-text fw-bold mb-2">
                Flipbook Generator
            </h5>
            <p class="mb-4">Admin can create flipbook page which contains title, description and
                pictures (if necessary). Every 1 page created contains a maximum of 5 content, and every page
                and the content contained in the page can be
                edited and deleted.
            </p>

            <h5 class="card-text fw-bold mb-2">
                Account Management
            </h5>
            <p class="mb-4">Admins can add and remove admin accounts that are no longer in use.
            </p>
        </div>

    </div>
</div>
@endif
@endsection
