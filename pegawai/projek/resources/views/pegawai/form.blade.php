@if (isset($pegawai))
        {!! Form::hidden('id', $pegawai->id) !!}
    @endif
    @if ($errors->any())
        <div class="form-group {{ $errors->has('nip')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('nip', 'Nomor Pegawai: ', ['class'=> 'control-label']) !!}
        {!! Form::text('nip', null, ['class' => 'form-control']) !!} 
        @if ($errors->has('nip'))
            <span class="help-block">{{ $errors->first('nip') }}</span>   
        @endif
    </div>
    @if ($errors->any())
        <div class="form-group {{ $errors->has('nama')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif   
        {!! Form::label('nama', 'Nama Lengkap : ', ['class' => 'control-label'])!!}
        {!! Form::text('nama', null, ['class' => 'form-control'])!!}
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>   
        @endif
    </div>
    @if ($errors->any())
    <div class="form-group {{ $errors->has('id_jabatan')?'has-error' : 'has-succes' }}">
    @else
    <div class="form-group">
    @endif
        {!! Form::label('id_jabatan', 'Jabatan :', ['class'=> 'control-label']) !!}
        @if(count($list_jabatan) >0)
            {!! Form::select('id_jabatan', $list_jabatan, null,['class'=> 'form-control', 'id'=>'id_jabatan', 'placeholder'=>'Pilih Jabatan'])!!}
        @else
            <p>Tidak ada pilihan jabatan, buat terlebih dahulu...</p>
        @endif
        @if ($errors->has('id_jabatan'))
        <span class="help-block">{{ $errors->first('id_jabatan') }}</span>   
        @endif
        </div>
    @if ($errors->any())
        <div class="form-group {{ $errors->has('tanggal_lahir')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('tanggal_lahir', 'Tanggal Lahir:', ['class'=> 'control-label'])!!}
        {!! Form::date('tanggal_lahir', !empty($pegawai)?
        $pegawai->tanggal_lahir->format('Y-m-d'):null,
        ['class' => 'form-control', 'id' => 'tanggal_lahir']) !!}
        @if ($errors->has('tanggal_lahir'))
            <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>   
        @endif
    </div>
    @if ($errors->any())
        <div class="form-group {{ $errors->has('jenis_kelamin')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin:', ['class'=> 'control-label'])!!}
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','L')!!}Laki-laki</label>
        </div>
        <div class="radio">
            <label>{!! Form::radio('jenis_kelamin','P')!!}Perempuan</label>
        </div>
        @if ($errors->has('jenis_kelamin'))
            <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>   
        @endif
    </div>
    @if ($errors->any())
        <div class="form-group {{ $errors->has('alamat')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif   
        {!! Form::label('alamat', 'Alamat : ', ['class' => 'control-label'])!!}
        {!! Form::text('alamat', null, ['class' => 'form-control'])!!}
        @if ($errors->has('alamat'))
            <span class="help-block">{{ $errors->first('alamat') }}</span>   
        @endif
    @if ($errors->any())
        <div class="form-group {{ $errors->has('nomor_telepon')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('nomor_telepon', 'Nomor Telepon:', ['class'=> 'control-label']) !!}
        {!! Form::text('nomor_telepon', null, ['class'=> 'form-control']) !!} 
        @if ($errors->has('nomor_telepon'))
            <span class="help-block">{{ $errors->first('nomor_telepon') }}</span>   
        @endif
            </div>
        @if ($errors->any())
        <div class="form-group {{ $errors->has('foto')?'has-error' : 'has-succes' }}">
    @else
        <div class="form-group">
    @endif
        {!! Form::label('foto', 'Foto : ')!!}
        {!! Form::file('foto') !!} 
        @if($errors->has('foto'))
            <span class="help-block">{{ $errors->first('foto') }}</span>   
        @endif
        @if(isset($pegawai))
        @if($pegawai->foto)
                                <img src=" {{ asset('/public/fotoupload/'.$pegawai->foto) }}">    
                        @else 
                                @if($pegawai->jenis_kelamin == 'L')
                                        <img src="{{ asset('/public/fotoupload/male.png') }}">
                                @else
                                        <img src="{{ asset('/public/fotoupload/female.png') }}">
                                @endif
                                @endif
                                @endif
    </div>
            <div class="form-group">
           {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
        