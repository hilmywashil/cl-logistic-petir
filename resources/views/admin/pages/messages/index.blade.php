@extends('admin.layouts.admin')

@section('title', 'Kelola Pesan Masuk')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Semua Pesan Masuk</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subjek</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($messages as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-info mr-2" data-toggle="modal"
                                                    data-target="#showMessageModal{{ $item->id }}">
                                                    <i class="fa fa-eye"></i> Lihat
                                                </button>

                                                <form action="{{ route('admin.messages.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada pesan yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($messages as $item)
        <div class="modal fade" id="showMessageModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="showMessageModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showMessageModalLabel{{ $item->id }}">Detail Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <strong>Nama:</strong>
                            <div>{{ $item->name }}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong>
                            <div>{{ $item->email }}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Subjek:</strong>
                            <div>{{ $item->subject }}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Pesan:</strong>
                            <div class="border rounded p-3 bg-light mt-2">{{ $item->message }}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <form action="{{ route('admin.messages.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection