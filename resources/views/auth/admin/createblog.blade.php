@extends('layouts.admin')

@section('content')
@auth
@if (Auth::user()->role === "admin")

<style>
    .form-group {
        margin-bottom: 1rem;
    }

    #additionalFields .form-group {
        margin-bottom: 1rem;
    }
</style>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    {{ __('Create New Blog') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createdblog') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Title --}}
                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>
                            <div class="col-md-7">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" required autofocus>
                                @error('title')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="form-group row">
                            <label for="categorySelect" class="col-md-3 col-form-label text-md-right">Category</label>
                            <div class="col-md-7">
                                <select name="myselect" id="categorySelect" class="form-control">
                                    @foreach ($category as $key => $value)
                                    <option value="{{ $key }}" @if ($key == old('myselect')) selected @endif>
                                        {{ $value->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Dynamic Fields --}}
                        <div id="additionalFields" class="row"></div>

                        {{-- Image Upload --}}
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label text-md-right">Image</label>
                            <div class="col-md-7">
                                <input type="file" name="image" id="image" class="form-control">
                                @error('image')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="form-group row">
                            <label for="textarea" class="col-md-3 col-form-label text-md-right">Description</label>
                            <div class="col-md-7">
                                <textarea name="textarea" id="textarea"
                                    class="form-control">{{ old('textarea') }}</textarea>
                                @error('textarea')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Tags --}}
                        <div class="form-group row">
                            <label for="tags" class="col-md-3 col-form-label text-md-right">Tags</label>
                            <div class="col-md-7">
                                <input id="tags" type="text"
                                    class="form-control @error('tags') is-invalid @enderror" name="tags"
                                    value="{{ old('tags') }}" required>
                                @error('tags')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Submit --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </div>

                    </form>
                </div> {{-- card-body --}}
            </div> {{-- card --}}
        </div> {{-- col --}}
    </div> {{-- row --}}
</div> {{-- container --}}

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#textarea'))
        .catch(error => {
            console.error(error);
        });
</script>

{{-- Dynamic Fields --}}
<script>
    const categorySelect = document.getElementById('categorySelect');
    const additionalFields = document.getElementById('additionalFields');

    categorySelect.addEventListener('change', () => {
        const selectedCategoryId = categorySelect.value;

        if (selectedCategoryId == 0) {
            additionalFields.innerHTML = `
                <div class="form-group col-md-6">
                    <label for="lowprice">Harga Terendah</label>
                    <input id="lowprice" type="text" class="form-control" name="lowprice">
                </div>
                <div class="form-group col-md-6">
                    <label for="highprice">Harga Tertinggi</label>
                    <input id="highprice" type="text" class="form-control" name="highprice">
                </div>
                <div class="form-group col-md-6">
                    <label for="penjelasan">Penjelasan</label>
                    <input id="penjelasan" type="text" class="form-control" name="penjelasan">
                </div>
                <div class="form-group col-md-6">
                    <label for="ukuran">Ukuran</label>
                    <input id="ukuran" type="text" class="form-control" name="ukuran">
                </div>
            `;
        } else {
            additionalFields.innerHTML = '';
        }
    });
</script>

@endif
@endauth
@endsection
