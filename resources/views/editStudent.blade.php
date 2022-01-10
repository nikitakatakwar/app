

 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
                <h2 class="mt-3 mb-3 ml-3" 
               >Add Teacher</h2>
                <a class="btn btn-primary mt-3 mb-3 mr-3 float-end" href="
                {{route('index')}}" role="button">Back</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6  offset-md-3">
                <div class="card mb-5">
                    <div class="card-body">
                        <form method="post" action="{{route('update')}} " enctype="multipart/form-data" class="mb-5">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="form-group mb-3">
                                <label>Teacher Name</label>
                                <input type="text"  name="name" class="form-control"  value="{{$data['name']}}"  >
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text"  name="email" class="form-control"   value="{{$data['email']}}" >
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                           
                            <div class="border border-light p-3 mb-4">
                                <div class="text-center">
                                  <button type="submit" class="btn btn-primary">UPDATE</button>
                                </div>
                            </div>
                            <a class="btn btn-primary mt-3 mb-3 mr-3 float-end" href="
                    {{url('add-teachers')}}" role="button">Back</a>
                            
                        </form>
                        @if(Session::has('successMsg'))
                       <div style="margin-top: 100px;">
                        <div class="alert alert-success"> {{ Session::get('successMsg') }}</div>
                       </div>
                      @endif

                
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    </div>
    
</x-app-layout>


