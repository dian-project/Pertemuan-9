
@extends('admin.layouts.app')

@section('title', 'Edit Project')

@push('styles')
<style>
    .edit-card {
        background: #fff;
        padding: 24px 20px 36px;
        border-radius: 12px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
        width: 100%;
    }

    .edit-card h2 {
        font-size: 30px;
        margin-bottom: 10px;
    }

    .edit-form {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px 28px;
    }

    .form-group {
        min-width: 0;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 400;
        font-size: 17px;
    }

    .form-group .form-control,
    .form-group .form-select {
        width: 100%;
        min-height: 43px;
        border-radius: 7px;
        padding: 9px 13px;
    }

    .form-group textarea.form-control {
        min-height: 98px;
        resize: vertical;
    }

    .current-image {
        display: block;
        width: 150px;
        height: 100px;
        object-fit: cover;
        border-radius: 7px;
        margin-bottom: 10px;
    }

    .form-actions {
        grid-column: 1 / -1;
        display: flex;
        gap: 7px;
        margin-top: -3px;
    }

    .btn-update,
    .btn-cancel {
        padding: 9px 16px;
        border-radius: 6px;
        color: #fff;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .btn-update {
        background: #0d6efd;
    }

    .btn-update:hover {
        background: #0b5ed7;
        color: #fff;
    }

    .btn-cancel {
        background: #dc3545;
    }

    .btn-cancel:hover {
        background: #bb2d3b;
        color: #fff;
    }

    @media (max-width: 768px) {
        .edit-form {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .form-group.full-width,
        .form-actions {
            grid-column: auto;
        }

        .edit-card {
            padding: 20px 15px;
        }
    }
</style>
@endpush

@section('content')
<div class="edit-card">
    <h2>Edit Project</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('admin.projects.update', $project->id) }}"
        method="POST"
        enctype="multipart/form-data"
        class="edit-form"
    >
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Project</label>
            <input
                type="text"
                name="nama"
                id="nama"
                class="form-control"
                value="{{ old('nama', $project->nama) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="kategori">Teknologi</label>
            <input
                type="text"
                name="kategori"
                id="kategori"
                class="form-control"
                value="{{ old('kategori', $project->kategori) }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="Active"
                    {{ old('status', $project->status ?? 'Active') == 'Active' ? 'selected' : '' }}>
                    Active
                </option>
                <option value="Inactive"
                    {{ old('status', $project->status ?? 'Active') == 'Inactive' ? 'selected' : '' }}>
                    Inactive
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="gambar">Image</label>

            @if($project->gambar)
                <img
                    src="{{ asset('images/projects/' . $project->gambar) }}"
                    alt="{{ $project->nama }}"
                    class="current-image"
                >
            @endif

            <input
                type="file"
                name="gambar"
                id="gambar"
                class="form-control"
                accept="image/*"
            >

            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti gambar.
            </small>
        </div>

        <div class="form-group full-width">
            <label for="deskripsi">Description</label>
            <textarea
                name="deskripsi"
                id="deskripsi"
                class="form-control"
                rows="3"
                required
            >{{ old('deskripsi', $project->deskripsi) }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-update">Ubah</button>

            <a href="{{ route('admin.projects.index') }}" class="btn-cancel">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection
