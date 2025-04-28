@extends('backend.layouts.app')
@section('main')

<div class="content-wrapper">
    <section class="section container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- Full-Width Background for Header -->
                <div class="bg-primary text-white px-3 py-3 d-flex justify-content-between align-items-center rounded-top">
                    <h5 class="mb-0">Department Create</h5>
                    <a href="#" class="btn btn-light btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                

                                <div class="col-md-6">
                                    <label for="read_more" class="form-label">Code</label>
                                    <input type="number" class="form-control" id="code" name="code">
                                    @error('code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </form>
                    </div> 
                </div>

            </div>
        </div>
    </section>
</div>

@endsection
