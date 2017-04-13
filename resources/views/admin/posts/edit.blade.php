@extends('dashboard')

@section('title', 'Publicaciones')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="purple">
          <h4>Modificar Publicación</h4>
        </div>
        <div class="card-content">
          <form method="POST" action="{{ route('posts.store') }}" data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label for="title" class="control-label">Título:</label>
              <input type="text" id="title" name="title" class="form-control input-lg" required maxlength="255" value="{{ $post->title }}" autofocus>
            </div>
            <div class="form-group">
              <label for="category_id" class="control-label">Categoría:</label>
              <select id="category_id" class="form-control" name="category_id" required>
                <option value=""></option>
                @foreach ($categories as $category)
                  <option {{ ($category->id == $post->category_id) ? 'selected' : '' }} value="{{ $category->id }}">
                    {{ $category->name }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="form-group label-floating">
              <label for="body" class="control-label">Contenido:</label>
              <textarea id="body" name="body" rows="10" class="form-control" required>{{ $post->body }}</textarea>
            </div>
            <div class="col-md-6">
              <a href="{{ route('posts.index') }}" class="btn btn-danger btn-lg btn-block btn-simple">Cancel</a>
            </div>
            <div class="col-md-6">
              <input type="submit" value="Guardar Cambios" class="btn btn-success btn-lg btn-block btn-simple">
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>﻿
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection