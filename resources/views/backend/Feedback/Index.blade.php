@extends('backend.main')
@section('content')
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Pengirim</th>
                                    <th scope="col">Email Pengirim</th>
                                    <th scope="col">Nomor Telpon</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($feedback as $feedback)
                                    <tr>
                                        <td>
                                            {{ $feedback -> Nama }}
                                        </td>
                                        <td>
                                            {{ $feedback -> Email }}
                                        </td>
                                        <td>
                                            {{ $feedback -> Telp }}
                                        </td>
                                        <td>
                                            {{ $feedback -> Pesan }}
                                        </td>
                                        <td>
                                            <form action="{{ route('feedback.destroy', $feedback->id) }}" method="post" class="d-inline">
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
            </div>
        </div>
    </div>
@endsection