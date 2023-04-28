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
                                    <th scope="col">Icon</th>
                                    <th scope="col">Link Sosial Media</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($sosmed as $sosmed)
                                    <tr>
                                        <td>
                                            {{ $sosmed -> Icon }}
                                        </td>
                                        <td>
                                            {{ $sosmed -> Link }}
                                        </td>
                                        <td>
                                            <a href=" {{ route('sosmed.edit', $sosmed->id) }}" class="btn-edit">
                                                Edit Data
                                            </a>

                                            <form action="{{ route('sosmed.destroy', $sosmed->id) }}" method="post" class="d-inline">
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
                                <form action=" {{ route('sosmed.store') }} " method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Icon</label>
                                        <input type="text" name="Icon" class="input">
                                        <p class="text">*Diisi dengan icon Boxicon</p>
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Link Sosial Media</label>
                                        <input type="text" name="Link" class="input">
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