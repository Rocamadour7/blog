@extends('main')

@section('title', '| New Post')

@section('stylesheets')
  <link rel="stylesheet" href="/css/form.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-raised">
        <div class="header header-primary text-center">
          <h4>Editar Publicación</h4>
        </div>
        <div class="content">
          <form method="POST" action="{{ route('posts.update', $post->id) }}" data-toggle="validator" role="form">
            <div class="form-group label-floating">
              <label for="title" class="control-label">Título:</label>
              <input type="text" id="title" name="title" class="form-control input-lg" required maxlength="255" value="{{ $post->title }}">
            </div>
            <div class="form-group label-floating">
              <label for="body" class="control-label">Contenido:</label>
              <textarea id="body" name="body" rows="10" class="form-control" required>{{ $post->body }}</textarea>
            </div>
          <div class="row">
            <div class="col-md-6">
              <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-lg btn-block btn-simple">Cancelar</a>
            </div>
            <div class="col-md-6">
              <input type="submit" value="Guardar Cambios" class="btn btn-success btn-lg btn-block btn-simple">
            </div>
          </div>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          </form>
        </div>
      </div>
    </div>
  </div>﻿
@endsection

@section('scripts')
  <script src="/js/validator.min.js"></script>
@endsection