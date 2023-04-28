@extends('backend.main')
@section('content')

    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="container">
                        <div class="image-container">
                            <img src="{{ asset( 'storage/' . $web->Gambar) }}" alt="Deskripsi Gambar">
                        </div>
                        <div class="text-container">
                            <h2 class="title"> {{ $web -> Nama_Aplikasi }} </h2>
                                <hr class="line">
                            <p class="content"> {{ $web -> Text }} </p>
                            <p class="content"> Tanggal Pembuatan Aplikasi --- {{ $web -> Tanggal_Pembuatan }} </p>
                            <p class="content"> Role --- {{ $web -> Role }} </p>

                            <h2 class="skillset-title">Skills</h2>
                                <hr class="line">
                            <div class="skillset-container">
                                <div class="skill"> {{ $web -> Tech_1 }} </div>
                                <div class="skill"> {{ $web -> Tech_2 }} </div>
                                <div class="skill"> {{ $web -> Tech_3 }} </div>
                                <div class="skill"> {{ $web -> Tech_4 }} </div>
                                <div class="skill"> {{ $web -> Tech_5 }} </div>
                            </div>
                        </div>
                    </div>

                    <div class="video-container">
                            <h2 class="title"> <span class="greater-than">>></span> Demo Aplikasi </h2>
                                <hr class="line">
                            <video controls>
                                <source src="{{ asset('storage/'.$web->Demo) }}" type="video/mp4">
                            </video>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection