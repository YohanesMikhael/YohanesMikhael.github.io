@extends('backend.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a class="btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Profil Pertama</th>
                                    <th scope="col">Profil Kedua</th>
                                    <th scope="col">About Me</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($home as $home)
                                    <tr>
                                        <td>
                                            <img class="img" src=" {{ asset( 'storage/' . $home->Profil_1) }}" alt="">
                                        </td>
                                        <td>
                                            <img class="img" src=" {{ asset( 'storage/' . $home->Profil_2) }}" alt="">
                                        </td>
                                        <td>
                                            {{ $home -> About_me }}
                                        </td>
                                        <td>
                                            <a href=" {{ route('dashboard.edit', $home->id) }}" class="btn-edit">
                                                Edit Data
                                            </a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Modal Tambah Data -->
                <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action=" {{ route('dashboard.store') }} " method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div>
                                        <label class="mx-3 mb-1">Profile Pertama</label>
                                        <input type="file" class="form-control" name="Profil_1">
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Profile Kedua</label>
                                        <input type="file" class="form-control" name="Profil_2">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">About Me</label>
                                        <textarea name="About_me" class="form-control" id="About Me" cols="30" rows="5"></textarea>
                                    </div>

                                    <div class="modal-footer mx-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection