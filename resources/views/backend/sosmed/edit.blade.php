@extends('backend.main')
@section('content')

    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <form action="{{ route('sosmed.update', $sosmed->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div>
                            <label class="mx-3 mt-3 mb-1">Icon</label>
                            <input type="text" name="Icon" class="input-edit" value="{{ old('Icon') ?? $sosmed->Icon  }}">
                        </div>

                        <div>
                            <label class="mx-3 mt-3 mb-1">Link Sosial Media</label>
                            <input type="text" name="Link" class="input-edit" value="{{ old('Link') ?? $sosmed->Link  }}">
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