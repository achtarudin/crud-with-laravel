@extends('layout.style')
@section('data')
    <div class="container">
       <div class="row">
           <div class="col-md-6 offset-md-3">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col"></th>
                           <th scope="col">Name</th>
                           <th scope="col">Contact</th>
                           <th scope="col"></th>
                       </tr>
                   </thead>
                   <tbody>
                       @forelse ($data  as $item)
                           <tr>
                                <td scope="row">
                                    <img src="{{ asset('storage/'.$item->filename)}}" 
                                    alt="{{$item->name}}" class="avatar float-left">
                                </td>
                                <td>
                                    <a href={{ route('item.show', $item->slug) }}>{{ $item->name }} </a>
                                </td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    {!! Form::open(
                                         [
                                         'route' => ['item.destroy', $item],
                                         'method' => 'delete'
                                         ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                       @empty
                            <tr> Data Not Found</tr>
                       @endforelse
                   </tbody>
               </table>
               {!! $data->links() !!}
           </div>
       </div>
       <div class="row">
           <div class="col-md-7 offset-md-3 text-right">
                <a href="{{route('item.create')}}" class="btn btn-info btn-sm"> Create New User </a>
           </div>
       </div>
    </div>
@endsection