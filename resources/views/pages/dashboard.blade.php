@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')

    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    
    <div class="container-fluid py-4">
        <div class="carousel slide row" data-bs-ride="carousel" id="myCarousel">
            @foreach ($collection as $item)
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        <img src="{{$item['foto']}}"  alt="Alumno" class="">
                                    </p>
                                    <h5 class="font-weight-bolder">
                                        {{$item['nombreCompleto']}}
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">{{$item['matricula']}}</span>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                       @foreach (array_slice($grupos, 0, 1) as $grupo)
                        <div class="justify-content-between">
                            <h6 class="">Codigo: {{$grupos['id']}}</h6>
                            <h6 class="">Cuatrimestre: {{$grupos['cuatrimestre']}}</h6>
                            <h6 class="">Grupo: {{$grupos['grupo']}}</h6>
                            <h6 class="">Carrera: {{$grupos['descripcion']}}</h6>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    
@endpush
