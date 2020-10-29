<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;
use App\Telepon;
use App\Jabatan;
use App\Gaji;

use Session;
use PDF;
use Storage;

use App\Http\Requests\PegawaiRequest;

use App\Mail\sistem_akademik_email;
use Illuminate\Support\Facades\Mail;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    public function __construct(Request $req)
{
    $this->request = $req;

    $this->middleware('auth', ['except' => [
        'index',
        'show',
        'lihat_data_pegawai',
        'cari',
    ]]);
}
    public function data_pegawai(){
        $halaman = 'data_pegawai';
        return view('pegawai/data_pegawai', compact('halaman'));
    }

public function lihat_data_pegawai(){
    $halaman = 'lihat_data_pegawai';
    $pegawai_list = Pegawai::orderBy('created_at', 'desc')->simplePaginate(10);
    $jumlah_pegawai = $pegawai_list->count();
    return view('pegawai/lihat_data_pegawai', compact('halaman','pegawai_list','jumlah_pegawai'));
    }
    public function lihat_data_pegawai2(){
        $halaman = 'data_pegawai';
        $pegawai = ['Risna',
                        'Dona',
                        'Putra',
                        'Milandika'
                    ];
        return view('pegawai/lihat_data_pegawai2')->with('pegawai',$pegawai);
        }
        public function input_pegawai(){
            $halaman = 'input_pegawai';
            return view('pegawai/input_pegawai', compact('halaman'));
        }
        public function store(PegawaiRequest $request){
            $input = $request->all();
            
            //foto
            if($request->hasFile('foto')){
                $foto = $request->file('foto');
                $ext = $foto->getClientOriginalExtension();
                if($request->file('foto')->isValid()){
                    $foto_name = date('YmdHis'). ".$ext";
                    $upload_path = 'public/fotoupload';
                    $request->file('foto')->move($upload_path, $foto_name);
                    $input['foto'] = $foto_name;
                }
            }

            $pegawai = Pegawai::create($input);

            $telepon = new Telepon;
            $telepon->nomor_telepon = $request->input('nomor_telepon');
            $pegawai->telepon()->save($telepon);

            $pegawai->gaji()->attach($request->input('gaji_pegawai'));

            Session::flash('flash_message', 'Data Pegawai berhasil disimpan');

            return redirect('lihat_data_pegawai');
            
        }
        public function show(Pegawai $pegawai){
            return view('pegawai/show', compact('pegawai'));
        }
        public function create(){
            return view('pegawai/create');
        }
        public function edit(Pegawai $pegawai){
            if(!empty($pegawai->telepon->nomor_telepon)){
                $pegawai->nomor_telepon = $pegawai->telepon->nomor_telepon;
            }

            return view('pegawai/edit',compact('pegawai'));
        }
        public function update(Pegawai $pegawai, PegawaiRequest $request){
            $input = $request->all();

            if($request->hasFile('foto')){
                $exist = Storage::disk('foto')->exists($pegawai->foto);
                if(isset($pegawai->foto) && $exist){
                    $delete = Storage::disk('foto')->delete($pegawai->foto);
                }
                
                $foto = $request->file('foto');
                $ext = $foto->getClientOriginalExtension();
                if($request->file('foto')->isValid()){
                    $foto_name = date('YmdHis'). ".$ext";
                    $upload_path = 'public/fotoupload';
                    $request->file('foto')->move($upload_path, $foto_name);
                    $input['foto'] = $foto_name;
                }
            }
            
            $pegawai->update($input);

            if($pegawai->telepon){
                if($request->filled('nomor_telepon')){
                    $telepon = $pegawai->telepon;
                    $telepon->nomor_telepon = $request->input('nomor_telepon');
                    $pegawai->telepon()->save($telepon);
            }
           else{
               $pegawai->telepon()->delete();
           }
        }

        else{
            if($request->filled('nomor_telepon')){
                $telepon = $pegawai->telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $pegawai->telepon()->save($telepon);
            }
        }
            $pegawai->gaji()->sync($request->input('gaji_pegawai'));

            Session::flash('flash_message', 'Data pegawai berhasil diupdate');

            return redirect('lihat_data_pegawai');
        }
        public function destroy(Pegawai $pegawai){
            $pegawai->delete();
            Session::flash('flash_message', 'Data pegawai berhasil dihapus');
            Session::flash('penting', true);
            return redirect('lihat_data_pegawai');
        }
        public function cobaCollection(){
            $daftar = ['Risna',
                            'Dona',
                            'Putra',
                            'Milandika'
                        ];
            $collection = collect($daftar)->map(function($nama){
                return ucwords($nama);
            });
            return $collection;
}
public function collection_first(){
    $collection = Pegawai::all()->first();
    return $collection;
}
public function collection_last(){
    $collection = Pegawai::all()->last();
    return $collection;
}
public function collection_count(){
    $collection = Pegawai::all();
    $jumlah = $collection->count();
    return 'Jumlah pegawai : '. $jumlah;
}
public function collection_take(){
    $collection = Pegawai::all()->take(3);
    return $collection;
}
public function collection_pluck(){
    $collection = Pegawai::all()->pluck('nama');
    return $collection;
}
public function collection_where(){
    $collection = Pegawai::all()->where('nip', '1');
    return $collection;
}
public function collection_wherein(){
    $collection = Pegawai::all()->wherein('nip', ['1','2','3']);
    return $collection;
}
public function collection_toarray(){
    $collection = Pegawai::select('nip', 'nama')->take(4)->get();
    $koleksi = $collection->toArray();
    foreach($koleksi as $pegawai){
        echo $pegawai['nip'].' - '.$pegawai['nama'].'<br>';
    }
}
public function collection_tojson(){
   $data = [
       ['nip' => '8121', 'nama' => 'Risna'],
       ['nip' => '8122', 'nama' => 'Dona'],
       ['nip' => '8123', 'nama' => 'Putra'],
       ['nip' => '2003', 'nama' => 'Wawan'],
   ];
   $collection = collect($data)->toJson();
    return $collection;
}
public function date_mutator(){
    $pegawai = Pegawai::findOrFail(8);
    $nama = $pegawai->nama;
    $tanggal_lahir = $pegawai->tanggal_lahir->format('d-m-Y');
    $ulang_tahun = $pegawai->tanggal_lahir->addYears(25)->format('d-m-Y');
    return "Pegawai ($nama} lahir pada {$tanggal_lahir}.<br>Ulang tahun ke-25 akan jatuh pada {$ulang_tahun}.";
}

public function cari(Request $request){
    $kata_kunci = trim($request->input('kata_kunci'));

    if(!empty($kata_kunci)){
        $jenis_kelamin = $request->input('jenis_kelamin');
        $id_jabatan = $request->input('id_jabatan');

        $query = Pegawai::where('nama', 'LIKE', '%' . $kata_kunci . '%');
        (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin): '';
        (!empty($id_jabatan)) ? $query->Jabatan($id_jabatan): '';
        $pegawai_list = $query->paginate(2);

        $pagination = (!empty($jenis_kelamin)) ? $pegawai_list->appends(['jenis_kelamin'=>$jenis_kelamin]) : '';
        $pagination = (!empty($id_jabatan)) ? $pagination = $pegawai_list->appends(['id_jabatan'=>$id_jabatan]) : '';
        $pagination = $pegawai_list->appends(['kata_kunci'=>$kata_kunci]);
       
        $jumlah_pegawai = $pegawai_list->total();
        return view('pegawai/lihat_data_pegawai', compact('pegawai_list','kata_kunci','pagination','jumlah_pegawai',
                        'id_jabatan','jenis_kelamin'));
}
    return redirect('pegawai');
}

public function email(){
    Mail::to("risna_penerima@polines.ac.id")->send(new sistem_akademik_email());

    return "Email telah dikirim";
}
public function cetak_pdf()
{
    $pegawai_list = Pegawai::all();

    $pdf = PDF::loadview('pegawai/pegawai_pdf',['pegawai_list'=>$pegawai_list]);
    return $pdf->download('laporan-pegawai.pdf');
}
public function export_excel()
{
    return Excel::download(new PegawaiExport, 'datapegawai.xlsx');
}

public function cetak_pdf_absensi()
{
    $pegawai_list = Pegawai::all();
    $pdf = PDF::loadview('pegawai/absensi_pdf',['pegawai_list'=>$pegawai_list]);   
    return $pdf->download('laporan-absensi.pdf'); 

}
}