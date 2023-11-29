<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengembalianRequest;
use App\Http\Requests\UpdatePengembalianRequest;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{

    public function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return view('pengembalian');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  
       try {
        // cek user apakah benar meminjam mobil ini

        // cek apakah nomor plat yang dimasukan sesuai
        $data = DB::table('peminjamen')
                ->join('mobils', 'peminjamen.nama_mobil', '=', 'mobils.model' )
                ->select('peminjamen.nama_mobil', 'peminjamen.tgl_mulai', 'peminjamen.tgl_selesai','mobils.no_plat', 'mobils.harga_sewa_per_hari')
                ->get();

        // dd($data);

        
        $data_plat = [];
        $date_mulai = [];
        foreach($data as $dt){
            $data_plat[] = $dt->no_plat;
            $date_mulai[] = $dt->tgl_mulai;
        }
        
        dd($diff);
        // $diff = now()->diffInDays();
        // dd($datas[0]->nama_mobil);

        if(in_array($request->no_plat, $data_plat)){
            DB::table('pengembalians')->insert([
                'id' => 'PEN'.$this->generateRandomString(7),
                'no_plat' => $request->no_plat,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);

            return redirect('/');
        }else{
            return redirect('/pengembalian-mobil');
        }
       } catch (\Throwable $th) {
        throw $th;
       } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengembalianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengembalianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengembalianRequest  $request
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengembalianRequest $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
