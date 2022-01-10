<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                
                <a href="{{url('/uploadpage')}}" class="btn btn-danger ml-3">Add Courses</a>

            </div>
        </div>
    </div>
    <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                        
                        <table class="table table-striped" style="margin-top: -250px;">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>File</th>
                              </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($data as $data)
                                <tr>
                                  
                                  <td>{{$data['id']}}</td>
                                  <td>{{$data['name']}}e</td>
                                  <td>{{$data['description']}}</td><br>
                                  <td><a href="{{url('/view',$data->id)}}" class="btn btn-danger ml-3 mt-2">view</a></td>
                                  <td><a href="{{url('/download',$data['file'])}}" class="btn btn-danger ml-3 mt-2">Download</a></td>
                                 
                                </tr>
                                @endforeach
                            </tbody>
                          </table>

                             
                   
        
                    </div>
                </div>
            </div>
    
</x-app-layout>
<h1>Teacher Dashboard</h1>