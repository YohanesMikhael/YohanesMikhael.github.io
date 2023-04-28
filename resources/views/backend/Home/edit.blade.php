@extends('backend.main')
@section('content')

    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <form action="{{ route('dashboard.update', $home->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label class="mx-3 mb-1">Profile Pertama</label>
                            <input type="file" class="form-control" name="Profil_1" value="{{ old('Profil_1') ?? $home->Profil_1 }}">
                        </div>

                        <div>
                            <label class="mx-3 mt-3 mb-1">Profile Kedua</label>
                            <input type="file" class="form-control" name="Profil_2" value="{{ old('Profil_2') ?? $home->Profil_2 }}">
                        </div>

                        <div>
                            <label class="mx-3 mt-3 mb-1">About Me</label>
                            <textarea name="About_me" class="form-control" id="About Me" cols="30" rows="5"> {{ old('About_me') ?? $home->About_me  }} </textarea>
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