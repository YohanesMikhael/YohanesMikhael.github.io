@extends('backend.main')
@section('content')

    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <form action="{{ route('account.update', $account->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div>
                            <label class="mx-3 mt-3 mb-1">Nama Aplikasi</label>
                            <input type="text" name="Nama_Aplikasi" class="input-edit" value="{{ old('Nama_Aplikasi') ?? $account->Nama_Aplikasi  }}">
                        </div>

                        <div>
                            <label class="mx-3 mt-3 mb-1">Username</label>
                            <input type="text" name="Username" class="input-edit" value="{{ old('Username') ?? $account->Username  }}">
                        </div>

                        <div>
                            <label class="mx-3 mt-3 mb-1">Password</label>
                            <input type="text" name="Password" class="input-edit" value="{{ old('Password') ?? $account->Password  }}">
                        </div>

                        <div class="modal-footer mx-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection