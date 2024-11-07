<x-guest>

@session('exito')
    <script>
        Swal.fire({
        text: "Se guardo el libro: {{$value}}",
        icon: "success"
    });
    </script>
@endsession

    <div class="container">
        <div class="">
            <h1 class="text-3xl font-semibold">{{ __('Registro de Libros') }}</h1>
        </div>
        <div class="mt-8">
            <form action="{{route('registro.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="" class="form-control" id="isbn" name="isbn" placeholder="">
                    <small>{{ $errors->first('isbn') }}</small>
                  </div>
                  <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="" class="form-control" id="titulo" name="titulo" placeholder="">
                    <small>{{$errors->first('titulo')}}</small>
                  </div>
                  <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="" class="form-control" id="autor" name="autor" placeholder="">
                    <small>{{$errors->first('autor')}}</small>
                  </div>
                  <div class="mb-3">
                    <label for="paginas" class="form-label">Páginas</label>
                    <input type="" class="form-control" id="paginas" name="paginas" placeholder="">
                    <small>{{$errors->first('paginas')}}</small>
                  </div>
                  <div class="mb-3">
                    <label for="año" class="form-label">Año</label>
                    <input type="" class="form-control" id="año" name="año" placeholder="">
                    <small>{{$errors->first('año')}}</small>
                  </div>
                  <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="" class="form-control" id="editorial" name="editorial" placeholder="">
                    <small>{{$errors->first('editorial')}}</small>
                  </div>
                  <div class="mb-3">
                    <label for="emailEditorial" class="form-label">Email Editorial</label>
                    <input type="" class="form-control" id="emailEditorial" name="emailEditorial" placeholder="">
                    <small>{{$errors->first('emailEditorial')}}</small>
                  </div>
                  <button type="submit" class="btn btn-primary">Registrar Libro</button>
            </form>
        </div>
    </div>
</x-guest>
