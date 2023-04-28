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
                                    <th scope="col">Logo Pertama</th>
                                    <th scope="col">Logo Kedua</th>
                                    <th scope="col">Nama Language & Database</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($language as $language)
                                    <tr>
                                        <td>
                                            <img class="img" src=" {{ asset( 'storage/' . $language->Logo_1) }}" alt="">
                                        </td>

                                        <td>
                                            <img class="img" src=" {{ asset( 'storage/' . $language->Logo_2) }}" alt="">
                                        </td>

                                        <td>
                                            {{ $language -> Nama }}
                                        </td>
                                        <td>
                                            <form action="{{ route('language.destroy', $language->id) }}" method="post" class="d-inline">
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
                                <form action=" {{ route('language.store') }} " method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div>
                                        <label class="mx-3 mb-1">Logo Pertama</label>
                                        <input type="file" class="form-control" name="Logo_1">
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Logo Kedua</label>
                                        <input type="file" class="form-control" name="Logo_2">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Nama Language</label>
                                        <input type="text" name="Nama" class="input">
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