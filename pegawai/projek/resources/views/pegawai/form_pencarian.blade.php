<div id="pencarian">
{!! Form::open(['url'=>'pegawai/cari', 'method'=>'GET', 'id'=>'form-pencarian']) !!}
<div class="row">
    <div class="col-md-2">
        {!! Form::select('id_jabatan',$list_jabatan,(!empty($id_jabatan)?$id_jabatan:null),
        ['id'=>'id_jabatan','class'=>'form-control','placeholder'=>'Jabatan']) !!}
    </div>
    <div class=col-md-2>
    {!! Form::select('jenis_kelamin', 
    ['L'=>'Laki-laki', 'P'=>'Perempuan'],
    (!empty($jenis_kelamin)?$jenis_kelamin:null),
    ['id'=>'jenis_kelamin','class'=>'form-control','placeholder'=>'Jenis Kelamin']) !!}
    </div>
    <div class=col-md-8>
<div class="input-group">
{!! Form::text('kata_kunci', (! empty($kata_kunci))?$kata_kunci:null, ['class'=>'form-control',
        'placeholder'=>'Masukkan Nama Pegawai']) !!}
    <span class="input-group-btn">
    {!! Form::button('Cari',['class'=>'btn btn-default', 'type'=>'submit']) !!}
    </span>
</div>
</div>
</div>
{!! Form::close() !!}
</div>