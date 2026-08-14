@extends('admin.layouts.admin')

@section('title', 'Kelola Layanan')

@section('content')
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Semua Layanan</h4>
                        <a href="javascript:void()" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#createServiceModal"><i class="fa fa-plus"></i> Tambah Data Layanan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Layanan"
                                                    class="img-thumbnail" style="width: 100px; height: auto;">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ Str::limit($item->description, 50) }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#editServiceModal{{ $item->id }}"><i class="fa fa-edit"></i>
                                                    Edit</button>

                                                <form action="{{ route('admin.services.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak ada layanan yang tersedia.</td>
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

    <!-- Create Service Modal -->
    <div class="modal fade" id="createServiceModal" tabindex="-1" role="dialog" aria-labelledby="createServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createServiceModalLabel">Tambah Data Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="serviceTitle">Judul Layanan</label>
                            <input type="text" class="form-control" id="serviceTitle" name="title"
                                placeholder="Masukkan judul layanan" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceImage">Gambar</label>
                            <input type="file" class="form-control-file" id="serviceImage" name="image" accept="image/*"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="serviceDescription">Deskripsi</label>
                            <textarea class="form-control" id="serviceDescription" name="description" rows="4"
                                placeholder="Masukkan deskripsi layanan"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Service Modal -->
    @forelse ($services as $item)
        <div class="modal fade" id="editServiceModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editServiceModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editServiceModalLabel">Edit Data Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.services.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="editServiceTitle{{ $item->id }}">Judul Layanan</label>
                                <input type="text" class="form-control" id="editServiceTitle{{ $item->id }}" name="title"
                                    placeholder="Masukkan judul layanan" value="{{ $item->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editServiceImage{{ $item->id }}">Gambar</label>
                                @if ($item->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Layanan" class="img-thumbnail"
                                            style="width: 150px; height: auto;">
                                    </div>
                                @endif
                                <input type="file" class="form-control-file" id="editServiceImage{{ $item->id }}" name="image"
                                    accept="image/*">
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            </div>
                            <div class="form-group">
                                <label for="editServiceDescription{{ $item->id }}">Deskripsi</label>
                                <textarea class="form-control" id="editServiceDescription{{ $item->id }}" name="description"
                                    rows="4" placeholder="Masukkan deskripsi layanan">{{ $item->description }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse

@endsection