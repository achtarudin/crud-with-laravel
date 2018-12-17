<div class="card">
    <div class="card-header">
        Skill
    </div>
    <span id="counter" class="d-none">
        {{count($skills)}}
    </span>
    <div id="field-skill" class="card-body">
        @foreach ($skills as $key => $skill)
            @php
            $key+=1
            @endphp
            <div id="{{'skill-'.$key}}" class="input-group mb-3">
                {!! Form::text('skills[]', $skill->skill,
                    [
                        'class' => 'form-control form-control-sm',
                        'id'=> "text-skill-$key",
                        'placeholder' => "skill-$key"
                    ]) 
                !!}
                <div class="input-group-append">
                    {!! Form::button('Delete', 
                        [
                            'class' => 'btn btn-danger btn-sm',
                            'id' => "btn-remove-$key"
                        ])
                    !!}    
                </div>    
            </div>
        @endforeach
    </div>
    <div class="ml-auto mr-4" >
        {!! Form::button('New Skill', 
            [
                'class' => 'btn btn-info btn-sm',
                'id' => 'add'
            ])
        !!} 
    </div>
    <br>
</div>

<br>
<div class="float-right">
    {!! Form::submit('Save', 
        [
            'class' => 'btn btn-success btn-sm right',
            'id' => 'Save'
        ])
    !!} 
</div>
{!! Form::close() !!}