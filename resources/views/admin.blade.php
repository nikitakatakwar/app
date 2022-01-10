<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
                <a class="btn btn-primary mt-3 mb-3 ml-3" href="
                {{url('add-teachers')}}" role="button">Add Teacher</a>
                <a class="btn btn-primary mt-3 mb-3 mr-3 float-end" href="
                {{url('add-teachers')}}" role="button">Back</a>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>How to Fetch data in Laravel 8</h4>
                </div>
                <div class="card-body">
        
                    <table class="table table-bordered table-striped">
                        <thead style="text-align:center;">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th colspan="2" >Operation</th>
                              
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr style="text-align:center;">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                               
                                <td>
                                    <a href="{{"edit/".$item->id }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{"delete/".$item->id }}" class="btn btn-danger btn-sm" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
                    @endif
                    
                    <div style="text-align:center;" class="pl-5">
                        {{ $users->links() }}
                    </div>
                   

                   
        
                </div>
            
            </div>
      
        </div>
      
    </div>

  


   



</x-app-layout>
<h1>Admin Dashboard</h1>