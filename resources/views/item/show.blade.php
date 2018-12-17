@extends('layout.style')
@section('data')
<br>
    <example-component></example-component>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/'.$data->filename)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->name }}</h5>
                        <p class="card-text">
                            {{\Illuminate\Foundation\Inspiring::quote()}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-0">
                <div class="card">
                    <div class="card-header text-center text-info">
                        Skills
                    </div>
                    <div class="card-body">
                       <ul class="list-group list-group-flush">
                            @forelse ($data->skills as $item)
                                <li class="list-group-item text-dark text-center">{{ $item->skill }}</li> 
                            @empty
                                <li class="list-group-item text-center"> I am don't have any skill</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <div class="card-header text-center text-info"> Contact </div>
                            <li class="list-group-item text-dark text-center">Phone : @{{ $data->phone }}</li>
                            <li class="list-group-item text-dark text-center">Github : {{ $data->github_account }}</li> 
                            <li class="list-group-item text-dark text-center">Email : {{ $data->email }}</li>  
                        </ul>
                    </div>
                </div>
                <br>
                <div class="float-right">
                    <a href="{{route('item.edit', $data->slug)}}" class="btn btn-info btn-sm">Edit</a>
                </div>
            </div>
        </div>  
    </div>    
@endsection