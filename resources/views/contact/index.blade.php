@extends('layout.style')
@section('data')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-header text-center"> Contact </div>
                            
                    {!! Form::open(['route' => 'contact.send']) !!}
                        <div class="card-body">


                            {{-- Field Name --}}
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Your Name</span>
                                </div>
                                {!! Form::text('name', null,
                                    [
                                        'class' => 'form-control',
                                    ]) 
                                !!}
                            </div>
                            <br>

                            {{-- Field Email --}}
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">Email</span>
                                </div>
                                {!! Form::email('email', null,
                                    [
                                        'class' => 'form-control',
                                    ]) 
                                !!}
                            </div>
                            <br>

                            {{-- Field Message --}}
                            <div class="input-group">
                                {!! Form::textarea('msg', null,
                                    [
                                        'class' => 'form-control',
                                    ]) 
                                !!}
                            </div>
                        </div>
                        <div class="float-right mr-4 mb-4">
                            {!! Form::submit('Send Mail', 
                                [
                                    'class' => 'btn btn-info btn-md'
                                ]) 
                            !!}
                        </div>
                        <br>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
