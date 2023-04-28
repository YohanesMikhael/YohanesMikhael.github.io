@extends('backend.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <form action="{{ route('process-authenticate-with-password')  }}" method="POST">
                        @csrf

                        <div>
                            <label class="mx-3 mt-3 mb-1">Masukkan Password</label>
                            <input type="password" name="password" class="input-edit" id="password">
                        </div>

                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="modal-footer mx-2">
                            <button type="submit" class="btn btn-primary">GO</button>
                        </div>
                </form>
            

            </div>
        </div>
    </div>
@endsection