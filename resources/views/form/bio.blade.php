
{{-- Field Imange Upload --}}
    <div class="card">
        <div class="card-header">Foto</div>
    </div>
    <div class="form-group card-body">
        {!! Form::file('image', null) !!}
    </div>

{{-- Field Bio Data --}}
    <div class="card bg-light">
        <div class="card-header text-center">
            Personal Data
        </div>
        <div class="card-body">

            {{-- Field Name --}}
            <div class="input-group input-group-sm">
                <div class="input-group-append">
                    <span class="input-group-text">Name</span>
                </div>
                {!! Form::text('name', null,
                    [
                        'class' => 'form-control',
                    ]) 
                !!}
            </div>
            <br>

            {{-- Field Phone --}}
            <div class="input-group input-group-sm ">
                <div class="input-group-append">
                    <span class="input-group-text">Phone</span>
                </div>
                {!! Form::text('phone', null,
                    [
                        'class' => 'form-control form-control-sm',
                    ]) 
                !!}
            </div>
            <br>

            {{-- Field Github --}}
            <div class="input-group input-group-sm">
                <div class="input-group-append">
                    <span class="input-group-text">Github</span>
                </div>
                {!! Form::text('github_account', null,
                    [
                        'class' => 'form-control form-control-sm',
                    ]) 
                !!}
            </div>
            <br>

            {{-- Field Email --}}
            <div class="input-group input-group-sm">
                <div class="input-group-append">
                    <span class="input-group-text">Email</span>
                </div>
                {!! Form::text('github_account', null,
                    [
                        'class' => 'form-control form-control-sm',
                    ]) 
                !!}
            </div>
        </div>
    </div>

   