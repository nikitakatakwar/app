<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <style>
                    [type='file'] {
    background: unset;
    border-color: black;
    border-width: thin;
    border-radius: 0;
    padding: 2  !important;
    font-size: unset;
    line-height: 2.3em;
}
                </style>
                
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-6  offset-md-3">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <form method="post" action="{{route('upload')}}" enctype="multipart/form-data" class="mb-5">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label>Course Name</label>
                                            <input type="text"  name="name" class="form-control">
                                        </div>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group mb-3">
                                            <label>Course Description</label>
                                            <input type="text"  name="description" class="form-control">
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-group mb-3">
                                            <label>File Upload</label>
                                            <input type="file" name="file" class="form-control" style="border 1px solid black">
                                        </div>
                                        @error('file')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        
                                       
                                       
                                        <div class="border border-light p-3 mb-4">
                                            <div class="text-center">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    

                                
                                        
                                    </form>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
<h1>Teacher Dashboard</h1>