@if (isset($gaji))
        {!! Form::hidden('id', $gaji->id) !!}
    @endif

    @if ($errors->any())
        <div class="form-group {{ $errors->has('jumlah_gaji')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('jumlah_gaji', 'Jumlah Gaji : ', ['class'=> 'control-label']) !!}
        {!! Form::text('jumlah_gaji', null, ['class' => 'form-control']) !!} 
        @if ($errors->has('jumlah_gaji'))
            <span class="help-block">{{ $errors->first('jumlah_gaji') }}</span>   
        @endif
    </div>
            <div class="form-group">
           {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
        