<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('from_user_id') }}
            {{ Form::text('from_user_id', $mensaje->from_user_id, ['class' => 'form-control' . ($errors->has('from_user_id') ? ' is-invalid' : ''), 'placeholder' => 'From User Id']) }}
            {!! $errors->first('from_user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('to_user_id') }}
            {{ Form::text('to_user_id', $mensaje->to_user_id, ['class' => 'form-control' . ($errors->has('to_user_id') ? ' is-invalid' : ''), 'placeholder' => 'To User Id']) }}
            {!! $errors->first('to_user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contenido') }}
            {{ Form::text('contenido', $mensaje->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
            {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>