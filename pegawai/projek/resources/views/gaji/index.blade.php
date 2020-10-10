@extends('template')

@section('main')
    <div id="gaji">
    <h2>Data Gaji</h2>
    
    @include('_partial.flash_message')

    @if (count($gaji_list) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gaji</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;?>
            <?php foreach($gaji_list as $gaji):?>
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $gaji->jumlah_gaji }}</td>
                <td>
                
    <div class="box-button">
        {{ link_to('gaji/' . $gaji->id .'/edit', 'Edit', ['class'=>'btn btn-warning btn-sm']) }}
    </div>
    <div class="box-button">
                    {!! Form::open(['method'=>'DELETE','action'=>['GajiController@destroy',$gaji->id]]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        </tbody>
        <?php endforeach ?>
       
    </table>
    @else
    <p>Tidak ada data gaji</p>
    @endif
    </div>

    <div class="tombol-nav">
                <div>
                    <a href="{{ url('gaji/create') }}" class="btn btn-primary">Tambah Data Gaji</a>
                </div>
    </div>

@stop

@section('footer')
    <div id="footer">
        <p>&copy; Data Pegawai 2020 </p>
    </div>
@stop