@extends('Layout.sidebar_admin')

@section('dashboardContent')
  @if(Auth::check())
      <div class="row">
        <div class="col-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Flipbook Generator</h5>
              <div class="table-responsive">
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
                        <h6 class="fw-semibold mb-0">Action</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">Elite Admin</p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <button href="" class="ti ti-pencil fs-6" style="border: none; background-color:transparent;color:green;"></button>
                          <span> | </span>
                          <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button>
                        </div>
                      </td>
                    </tr> 
                    <tr>
                      <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <button href="" class="ti ti-pencil fs-6" style="border: none; background-color:transparent;color:green;"></button>
                          <span> | </span>
                          <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button>
                        </div>
                      </td>
                    </tr> 
                    <tr>
                      <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <button href="" class="ti ti-pencil fs-6" style="border: none; background-color:transparent;color:green;"></button>
                          <span> | </span>
                          <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button>
                        </div>
                      </td>
                    </tr>      
                    <tr>
                      <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">Hosting Press HTML</p>
                      </td>
                      <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                          <button href="" class="ti ti-pencil fs-6" style="border: none; background-color:transparent;color:green;"></button>
                          <span> | </span>
                          <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button>
                        </div>
                      </td>
                    </tr>                       
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endif
@endsection
        
