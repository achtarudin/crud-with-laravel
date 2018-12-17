@extends('layout.style')
@section('data')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1">
                @if (isset($item->id))
                    {!! Form::model($item, 
                        [
                            'route' => ['item.update', $item],
                            'class' => 'form',
                            'files' => true,
                            'method' => 'put'
                        ])
                    !!}
                    @include('form.bio')
                @else
                    {!! Form::open(
                        [
                            'route' => 'item.store',
                            'class' => 'form',
                            'files' => true,
                            'method' => 'post'
                        ])
                    !!}
                    @include('form.bio')
                @endif
                <br>
                
                @if (isset($skills))
                    @include('form.skilledit')
                @else
                    @include('form.skillcreate')
                @endif
            </div>
        </div>
    </div>
@endsection