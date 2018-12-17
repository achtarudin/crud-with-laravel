<div class="card">
    <div class="card-header">
        Skill
    </div>
    <span id="counter" class="d-none">1</span>
    <div id="field-skill" class="card-body">
        <div id="skill-1" class="input-group mb-3">
            {!! Form::text('skills[]', null,
                [
                    'class' => 'form-control form-control-sm',
                    'id'=> 'text-skill-1',
                    'placeholder' => 'skill-1'
                ]) 
            !!}
            <div class="input-group-append">
                {!! Form::button('Delete', 
                    [
                        'class' => 'btn btn-danger btn-sm',
                        'id' => 'btn-remove-1'
                    ])
                !!}    
            </div>    
        </div>
    </div>
    <div class="ml-auto mr-4">
        {!! Form::button('New Skill', 
            [
                'class' => 'btn btn-info btn-sm right',
                'id' => 'add'
            ])
        !!} 
    </div>
    <br>
</div>
<br>
<div class="float-right">
    {!! Form::submit('submit', 
        [
            'class' => 'btn btn-success btn-sm right',
            'id' => 'Save'
        ])
    !!} 
</div>
{!! Form::close() !!}