@extends("layouts.app")

@section("page-title")
Crea un nuovo fumetto
@endsection


@section("content")

<h1>Crea nuovo fumetto:</h1>

<form method="POST" action="{{route("comics.store")}}">

    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{old("title")}}">

      @error("title")
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea type="text" class="form-control @error("description") is-invalid @enderror" id="description" name="description">{{old("title")}}</textarea>

      @error("description")
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control @error("thumb") is-invalid @enderror" id="thumb" name="thumb" value="{{old("thumb")}}">

        @error("thumb")
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error("price") is-invalid @enderror" id="price" name="price" value="{{old("price")}}">

        @error("price")
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error("series") is-invalid @enderror" id="series" name="series" value="{{old("series")}}">

        @error("series")
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input placeholder="0000-00-00" type="text" class="form-control @error("sale_date") is-invalid @enderror" id="sale_date" name="sale_date" value="{{old("sale_date")}}">

        @error("sale_date")
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control @error("type") is-invalid @enderror" id="type" name="type" value="{{old("type")}}">

        @error("type")
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection