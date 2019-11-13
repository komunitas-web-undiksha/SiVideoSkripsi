@extends('master')

@section('title', 'Upload Karya')

@section('content')

    <div class="container">
        <div class="c-header">
            <h2>Form Elements</h2>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Upload Karya <small>Text Inputs with different sizes by height and column.</small></h2>
            </div>

            <div class="card-body card-padding">
                <p class="c-black f-500">Basic Text Feilds with different sizes by height and column.</p>

                <form action="{{route('karya.store')}}" method="post">
                    @csrf
                <div class="form-group">
                    <div class="fg-line">
                        <input type="text" name="judul" class="form-control input-lg" placeholder="Judul Karya">
                    </div>
                </div>


                <div class="form-group">
                    <p class="c-black f-500 m-b-20 m-t-20">Jenis Karya</p>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="jenis" value="game">
                        <i class="input-helper"></i>
                        Game
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="jenis" value="video">
                        <i class="input-helper"></i>
                        Video
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="jenis" value="aplikasi">
                        <i class="input-helper"></i>
                        Aplikasi
                    </label>

                </div>

                <div class="form-group">
                    <div class="fg-line">
                        <label for="files">Select Karya</label>
                        <input type="file" name="karya" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="fg-line">
                        <label for="files">Select Trailer</label>
                        <input type="file" name="trailer" class="form-control">
                    </div>

                </div>

                <div class="form-group">
                    <p class="c-black f-500 m-b-20 m-t-20">HAKI</p>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="haki" value="ya">
                        <i class="input-helper"></i>
                        Ya
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="haki" value="tidak">
                        <i class="input-helper"></i>
                        Tidak
                    </label>

                </div>

                <div class="form-group">
                    <p class="c-black f-500 m-b-20 m-t-20">DO HAKI</p>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="do_haki" value="ya">
                        <i class="input-helper"></i>
                        Ya
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="do_haki" value="tidak">
                        <i class="input-helper"></i>
                        Tidak
                    </label>

                </div>

                <div class="form-group">
                    <p class="c-black f-500 m-b-20 m-t-20">Apakah Karya Anda Ingin di Publikasikan ?</p>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="publish" value="ya">
                        <i class="input-helper"></i>
                        Ya
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="publish" value="hanya_trailer">
                        <i class="input-helper"></i>
                        Hanya Trailer
                    </label>

                    <label class="radio radio-inline m-r-20">
                        <input type="radio" name="publish" value="tidak">
                        <i class="input-helper"></i>
                        Tidak
                    </label>

                </div>



                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Submit</button>
                </div>

            </div>
        </div>

    </div>






@stop
