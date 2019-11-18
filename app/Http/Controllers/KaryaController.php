<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Karya;
use Illuminate\Support\Facades\Auth;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userRole = Auth::user()->role;

        if($userRole == 'admin')
        {
            /*
             * This Will SHhow List Of Karya, that has been uploaded by Mahasiswa
             * */
            $listKarya = Karya::all();
            return view('karya.admin.main')->with('listKarya',$listKarya);
        }
        elseif ($userRole == 'user')
        {
            /*
             * This WIll Show Karya that has been Upload by the Mahasiswa and Seen by mahasiswa
             * if Mahasiswa/User has not upload yet, it will return create view, to make one
             * */
            $userId = Auth::id();
            $userNim = Mahasiswa::getNimFromId($userId);
            $userKarya = Karya::where('nim','=',$userNim)->first();

            if($userKarya != null)
            {
                return view('karya.user.main');
            }else {
                return view('karya.user.create');
            }
        }

    }


    /*
     * Create Method is response for form page that will make Karya / Skripsi
     * Admin & User has acces to this method.
     * Admin will be able to make new Karya, and input Mahasiswa Data
     * User is Mahasiswa, can fill out it data to the form
     * */
    public function create()
    {
        $userRole = Auth::user()->role;

        if($userRole == 'admin') {
            return view('karya.admin.create');
        }
        elseif($userRole == 'user') {
            return view('karya.user.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userRole = Auth::user()->role;
        $userId = Auth::id();
        $userData = $request->toArray();
        $userData['nim'] = $userRole=='admin'? $userData['nim']:Mahasiswa::getNimFromId($userId);
        $userData['directory_karya'] = "ISi Dengan Folder Karya";
        $userData['directory_trailer'] = "Diisi Dengan Folder Trailer";

        Karya::create($userData);

        return redirect()->route('karya.index');
    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($nim)
    {
        $userRole = Auth::id()->role;
        $dataKarya = Karya::where('nim','=',$nim)->first();

        if($userRole == 'admin'){
            return view('karya.admin.show')->with('dataKarya',$dataKarya);
        }
        elseif ($userRole == 'user')
        {
            return view()->with('dataKarya',$dataKarya);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $userRole = Auth::user()->role;
        $dataKarya = Karya::where('nim','=',$nim)->first();

        if($dataKarya == null) return view('404');

        if($userRole == 'admin'){
            return view('karya.admin.edit')->with('dataKarya',$dataKarya);
        }
        elseif ($userRole == 'user'){
            $dataKarya = Karya::where('nim','=',Mahasiswa::getNimFromId(Auth::id()))->first();

            if($dataKarya == null) return redirect()->route('karya.index');
            else return view('karya.user.edit')->with('dataKarya',$dataKarya);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userRole = Auth::user()->role;

        if($userRole == 'admin') {
            $nim = $request->nim;
        }
        if($userRole == 'user') {
            $nim = Mahasiswa::getNimFromId(Auth::id());
        }

        Karya::where('nim','=',$nim)->update([
            'judul'=>$request->judul,
            'directory_karya'=>$request->karya,
            'directory_trailer'=>$request->trailer,
            'jenis'=>$request->jenis,
            'haki'=>$request->haki,
            'do_haki'=>$request->do_haki,
            'publish'=>$request->publish
        ]);

        return redirect()->route('karya.index',['status'=>'succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nim
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        $userRole = Auth::user()->role;
        if($userRole=='user') $nim = Mahasiswa::getNimFromId(Auth::id());
        Karya::where('nim','=',$nim)->delete();

        return redirect()->route('karya.index',['status'=>'succes']);
    }
}
