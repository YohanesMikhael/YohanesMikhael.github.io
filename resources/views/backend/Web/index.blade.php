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
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Aplikasi</th>
                                    <th scope="col">Tanggal Pembuatan</th>
                                    <th scope="col">Penjelasan Aplikasi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($web as $web)
                                    <tr>

                                        <td>
                                            <img class="img" src=" {{ asset( 'storage/' . $web->Gambar) }}" alt="">
                                        </td>
                                        <td>
                                            {{ $web -> Nama_Aplikasi }}
                                        </td>
                                        <td>
                                            {{ $web -> getBulanTahunAttribute() }}
                                        </td>
                                        <td>
                                            {{ $web -> Text }}
                                        </td>
                                        <td>
                                            <a href=" {{ route('web.show', $web) }} " class="btn-edit">
                                                Detail Data
                                            </a>

                                            <form action="{{ route('web.destroy', $web->id) }}" method="post" class="d-inline">
                                                {!! method_field('delete') . csrf_field() !!}

                                                <button class="delete">
                                                    Delete
                                                </button>

                                            </form>
                                            
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
                                <form action=" {{ route('web.store') }} " method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div>
                                        <label class="mx-3 mb-1">Gambar</label>
                                        <input type="file" class="form-control" name="Gambar">
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mb-1">Video Demo </label>
                                        <input type="file" class="form-control" name="Demo">
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Nama Aplikasi</label>
                                        <input type="text" name="Nama_Aplikasi" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tanggal Pembuatan</label>
                                        <input type="text" name="Tanggal_Pembuatan" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Penjelasan Aplikasi</label>
                                        <input type="text" name="Text" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Role</label>
                                        <input type="text" name="Role" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 1</label>
                                        <input type="text" name="Tech_1" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 2</label>
                                        <input type="text" name="Tech_2" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 3</label>
                                        <input type="text" name="Tech_3" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 4</label>
                                        <input type="text" name="Tech_4" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 5</label>
                                        <input type="text" name="Tech_5" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 5</label>
                                        <input type="text" name="Tech_5" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Tech 6</label>
                                        <input type="text" name="Tech_6" class="input">
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