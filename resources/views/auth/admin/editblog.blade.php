@extends('layouts.admin')

@section('content')
<style>
    #additionalFields .col-md-4,
    #additionalFields .col-md-6 {
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Blog') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('editedblog', $articles->id) }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Title --}}
                        <div class="form-group row mb-3">
                            <label for="title" class="col-md-3 col-form-label text-md-end">Judul</label>
                            <div class="col-md-7">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $articles->title) }}" required autofocus>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="form-group row mb-3">
                            <label for="categorySelect" class="col-md-3 col-form-label text-md-end">Kategori</label>
                            <div class="col-md-7">
                                <select name="category_id" id="categorySelect" class="form-control">
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $cat->id == old('category_id', $articles->category_id) ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Additional Fields (dinamis) --}}
                        <div class="form-group row" id="additionalFields"></div>

                        {{-- Image --}}
                        <div class="form-group row mb-3">
                            <label for="image" class="col-md-3 col-form-label text-md-end">Gambar</label>
                            <div class="col-md-7">
                                <input type="file" name="image" id="image" class="form-control">
                                @if ($articles->image)
                                    <small class="text-muted">Gambar saat ini: {{ $articles->image }}</small>
                                @endif
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="form-group row mb-3">
                            <label for="description" class="col-md-3 col-form-label text-md-end">Deskripsi</label>
                            <div class="col-md-7">
                                <textarea id="description" name="description" class="form-control" rows="5">{{ old('description', $articles->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Tags --}}
                        <div class="form-group row mb-3">
                            <label for="tags" class="col-md-3 col-form-label text-md-end">Tags</label>
                            <div class="col-md-7">
                                <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror"
                                    name="tags" value="{{ old('tags', $articles->tags) }}">
                                @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('/blog') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

{{-- Dynamic Fields Based on Category --}}
<script>
    const categorySelect = document.getElementById('categorySelect');
    const additionalFields = document.getElementById('additionalFields');

    categorySelect.addEventListener('change', () => {
        const selectedCategoryId = categorySelect.value;

        if (selectedCategoryId == 0) {
            additionalFields.innerHTML = `
                <div class="col-md-6 offset-md-3">
                    <label for="lowprice">Harga Terendah</label>
                    <input id="lowprice" type="text" class="form-control mb-2" name="lowprice">

                    <label for="highprice">Harga Tertinggi</label>
                    <input id="highprice" type="text" class="form-control mb-2" name="highprice">

                    <label for="penjelasan">Penjelasan</label>
                    <input id="penjelasan" type="text" class="form-control mb-2" name="penjelasan">

                    <label for="ukuran">Ukuran</label>
                    <input id="ukuran" type="text" class="form-control mb-2" name="ukuran">
                </div>
            `;
        } else {
            additionalFields.innerHTML = '';
        }
    });
</script>
@endsection
