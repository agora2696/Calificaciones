@foreach (array_slice($fotos, 0, 0) as $foto)
    <img src="{{$foto}}" class="rounded-circle w-100" alt="Alumno" class="">
@endforeach  

@foreach ($estudiantes as $estudiante)

<div class="justify-content-between">
    <h6 class="">{{$estudiante}}</h6>
</div>
@endforeach     

   
