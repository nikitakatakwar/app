<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                
                <p  class="btn btn-danger ml-3">Courses List</p>

                <a class="btn btn-primary mt-3 mb-3 mr-3 float-end" href="
        {{route('list')}}" role="button">Back</a>

            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                {{$data->name}}
                {{$data->description}}
                <iframe src="/assets/{{$data->file}}"></iframe>

            </div>
        </div>
    </div>
    
    
</x-app-layout>
<h1>Teacher Dashboard</h1>