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
                                    <th scope="col">Nama Aplikasi</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($account as $account)
                                    <tr>
                                        <td>
                                            {{ $account -> Nama_Aplikasi }}
                                        </td>
                                        <td>
                                            {{ $account -> Username }}
                                        </td>
                                        <td>
                                            {{ $account -> Password }}
                                        </td>
                                        <td>
                                            <a href=" {{ route('account.edit', $account->id) }}" class="btn-edit">
                                                Edit Data
                                            </a>

                                            <form action="{{ route('account.destroy', $account->id) }}" method="post" class="d-inline">
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
                                <form action=" {{ route('account.store') }} " method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Nama Aplikasi</label>
                                        <input type="text" name="Nama_Aplikasi" class="input">
                                        
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Username</label>
                                        <input type="text" name="Username" class="input">
                                    </div>

                                    <div>
                                        <label class="mx-3 mt-3 mb-1">Password</label>
                                        <input type="text" name="Password" class="input">
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