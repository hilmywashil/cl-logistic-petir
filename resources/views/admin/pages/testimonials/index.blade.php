@extends('admin.layouts.admin')

@section('title', 'Kelola Testimonial')

@section('content')
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Semua Testimonial</h4>
                        <a href="javascript:void()" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#createTestimonialModal"><i class="fa fa-plus"></i> Tambah Data Testimonial</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Perusahaan</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Rating</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($testimonials as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Testimonial"
                                                    class="img-thumbnail" style="width: 100px; height: auto;">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->company }}</td>
                                            <td>{{ $item->job }}</td>
                                            <td>{{ $item->star }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#editTestimonialModal{{ $item->id }}"><i
                                                        class="fa fa-edit"></i>
                                                    Edit</button>

                                                <form action="{{ route('admin.testimonials.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus testimonial ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada testimonial yang tersedia.</td>
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

    <!-- Create Testimonial Modal -->
    <div class="modal fade" id="createTestimonialModal" tabindex="-1" role="dialog"
        aria-labelledby="createTestimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createTestimonialModalLabel">Tambah Data Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="testimonialName">Nama</label>
                            <input type="text" class="form-control" id="testimonialName" name="name"
                                placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="testimonialCompany">Perusahaan</label>
                            <input type="text" class="form-control" id="testimonialCompany" name="company"
                                placeholder="Masukkan nama perusahaan">
                        </div>
                        <div class="form-group">
                            <label for="testimonialJob">Jabatan</label>
                            <input type="text" class="form-control" id="testimonialJob" name="job"
                                placeholder="Masukkan jabatan">
                        </div>
                        <div class="form-group">
                            <label for="testimonialStar">Rating</label>
                            <select class="form-control" id="testimonialStar" name="star">
                                <option value="5">5 / 5</option>
                                <option value="4">4 / 5</option>
                                <option value="3">3 / 5</option>
                                <option value="2">2 / 5</option>
                                <option value="1">1 / 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="testimonialImage">Gambar</label>
                            <input type="file" class="form-control-file" id="testimonialImage" name="image" accept="image/*"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="testimonialMessage">Pesan</label>
                            <textarea class="form-control" id="testimonialMessage" name="message" rows="4"
                                placeholder="Masukkan pesan testimonial"></textarea>
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

    <!-- Edit Testimonial Modal -->
    @forelse ($testimonials as $item)
        <div class="modal fade" id="editTestimonialModal{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editTestimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editTestimonialModalLabel">Edit Data Testimonial</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.testimonials.update', $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="editTestimonialName{{ $item->id }}">Nama</label>
                                <input type="text" class="form-control" id="editTestimonialName{{ $item->id }}" name="name"
                                    placeholder="Masukkan nama" value="{{ $item->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialCompany{{ $item->id }}">Perusahaan</label>
                                <input type="text" class="form-control" id="editTestimonialCompany{{ $item->id }}"
                                    name="company" placeholder="Masukkan nama perusahaan" value="{{ $item->company }}">
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialJob{{ $item->id }}">Jabatan</label>
                                <input type="text" class="form-control" id="editTestimonialJob{{ $item->id }}" name="job"
                                    placeholder="Masukkan jabatan" value="{{ $item->job }}">
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialStar{{ $item->id }}">Rating</label>
                                <select class="form-control" id="editTestimonialStar{{ $item->id }}" name="star">
                                    @foreach (range(5, 1) as $rating)
                                        <option value="{{ $rating }}" {{ $item->star == $rating ? 'selected' : '' }}>{{ $rating }} / 5
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialImage{{ $item->id }}">Gambar</label>
                                @if ($item->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Testimonial"
                                            class="img-thumbnail" style="width: 150px; height: auto;">
                                    </div>
                                @endif
                                <input type="file" class="form-control-file" id="editTestimonialImage{{ $item->id }}"
                                    name="image" accept="image/*">
                                <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            </div>
                            <div class="form-group">
                                <label for="editTestimonialMessage{{ $item->id }}">Pesan</label>
                                <textarea class="form-control" id="editTestimonialMessage{{ $item->id }}" name="message"
                                    rows="4" placeholder="Masukkan pesan testimonial">{{ $item->message }}</textarea>
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