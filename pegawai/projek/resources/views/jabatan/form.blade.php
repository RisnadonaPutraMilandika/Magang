@if (isset($jabatan))
        {!! Form::hidden('id', $jabatan->id) !!}
    @endif

    @if ($errors->any())
        <div class="form-group {{ $errors->has('nama_jabatan')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('nama_jabatan', 'Nama Jabatan: ', ['class'=> 'control-label']) !!}
        {!! Form::text('nama_jabatan', null, ['class' => 'form-control']) !!} 
        @if ($errors->has('nama_jabatan'))
            <span class="help-block">{{ $errors->first('nama_jabatan') }}</span>   
            @endif

        
    @if ($errors->any())
        <div class="form-group {{ $errors->has('jabatan_gaji')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('jabatan_gaji', 'Gaji: ', ['class'=> 'control-label']) !!}
        {!! Form::text('jabatan_gaji', null, ['class' => 'form-control']) !!} 
        @if ($errors->has('jabatan_gaji'))
            <span class="help-block">{{ $errors->first('jabatan_gaji') }}</span>   
        @endif
        
    </div>
            <div class="form-group">
           {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
        