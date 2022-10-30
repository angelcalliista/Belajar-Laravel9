@extends('layouts.dashboard')
@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($user as $key)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $key->name }}</strong></td>
                    <td>{{ $key->username }}</td>
                    
                    <td>{{ $key->email }}</td>
                   
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                           
                            <a class="dropdown-item" href="{{ route('dashboard.edit', $key->id) }}"
                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="{{ route('dashboard.show', $key->id) }}"
                                ><i class="bx bx-detail me-1"></i> Detail</a
                            > 
                            <form action="{{ route('dashboard.destroy', $key->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="dropdown-item bg-transparent border-none"><i class="bx bx-trash me-1"></i> Delete</button>
                              
                            
                            </form>
                          
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

   

    <div class="content-backdrop fade"></div>
  </div>
@endsection