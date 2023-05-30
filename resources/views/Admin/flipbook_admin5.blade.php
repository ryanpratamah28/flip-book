@extends('Layout.sidebar_admin')

@section('dashboardContent')
@if(Auth::check())
<style>
    td {
        word-break: break-all;
    }

    td .mb-0.fw-normal.link {
        word-break: break-all;
    }

</style>
<div class="row">
    <div><a class="btn btn-success mb-3" href="{{ route('create5') }}">Create</a></div>
    <div class="col-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-2">Flipbook Generator</h5>
                <div class="table-responsive">
                    <form id="formId" action="{{ route('delete5') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Description</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Image</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Link</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($book5 as $book5s)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $book5s->id }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        @if(!empty($book5s->subject))
                                        <h6 class="fw-semibold mb-1" style="white-space: pre-wrap;">
                                            {{ $book5s->subject }}</h6>
                                        @else
                                        <h6 class="fw-semibold mb-1">--</h6>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        @if(!empty($book5s->text))
                                        <p class="mb-0 fw-normal" style="white-space: pre-wrap; width: 250px;">
                                            {{ $book5s->text }}</p>
                                        @else
                                        <p class="mb-0 fw-normal">--</p>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        @if(!empty($book5s->image))
                                        <img src="{{ asset('storage/images/' . $book5s->image) }}"
                                            class="mb-0 fw-normal" style="width: 100px;">
                                        @else
                                        <p class="mb-0 fw-normal">--</p>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        @if(!empty($book5s->link))
                                        <p class="mb-0 fw-normal link" style="white-space: pre-wrap; width: 250px;">
                                            {{ $book5s->link }}</p>
                                        @else
                                        <p class="mb-0 fw-normal">--</p>
                                        @endif
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="{{ route('edit5',$book5s->id) }}" class="ti ti-pencil fs-6"
                                                style="border: none; background-color:transparent;color:green;"></a>
                                            <span> | </span>
                                            <input type="checkbox" name="items[]" value="{{ $book5s->id }}">
                                            <!-- <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button> -->
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-danger" id="delete-button" style="float: right;"><i
                                class="ti ti-trash fs-6"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
