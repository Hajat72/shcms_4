@extends('backend.layouts.app')
@section('main')

<div class="card shadow-lg border-0 bg-light rounded me-3">
    <!-- Header & Table Section Combined -->
    <div class="card-body px-4 py-3">
        <div class="d-flex justify-content-between align-items-center bg-primary text-white rounded-top px-4 py-3 mb-3">
            <h5 class="mb-0 fw-bold">Department Index</h5>
            <a href="#" class="btn btn-light btn-sm fw-bold">
                <i class="fas fa-plus"></i> Create</a>
        </div>
        <div class="table-responsive w-100">
            <table class="table table-bordered table-hover text-center align-middle w-100">
                <thead class="table-dark">
                    <tr>
                        <th class="text-white">S#</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Code</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($models as $model)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $model->name ?? 'NA' }}</td>
                        <td>{{ $model->description ?? 'NA' }}</td>
                        <td>{{ $model->status ?? 'NA' }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="#" class="btn btn-warning btn-sm mx-1">
                                <i class="fas fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-danger btn-sm mx-1">
                                <i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center"><strong>No records found...</strong></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
