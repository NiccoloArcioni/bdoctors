@extends('layouts.app')

@section('content')
    <div class="dropdown dropdown-margin">
        <div class="dropdown-wrapper">
            <ul class="nav nav-pills">       
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Prestazioni</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>Visita in studio</li>
                                <li>Visita online</li>
                            </ul>
                        </div>
                </li>
            </ul>
        </div>        
    </div>
    <div class="title-search">
        <h2>Tutti gli specialisti</h2>
    </div>
   
    {{-- @dump($doctors)
    @foreach ($doctors as $doctor)
      <h2>{{ $doctor->firstname }}</h2>
      @dump($doctor)
      @dump($doctor->specializations)
    @endforeach --}}
    @foreach ($doctors as $doctor)
  <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body card-ms-doc">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('storage/' . $doctor->photo)}}" class="rounded-circle" width="150" height="150">
                    <div class="mt-3">
                      <h4>{{ $doctor->firstname }} {{ $doctor->lastname }}</h4>
                      
                      <div class="register-btn doctor-btn hide">
                        <a href="{{Route('doctor.detail', ['id' => $doctor->id])}}">Vai al profilo</a>   
                                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  @foreach ($doctor->specializations as $specialization)
                  <li class="list-group-item d-flex align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="icofont-patient-file"></i></h6>
                    <span class="text-secondary">
                      <span class="text-secondary mb-1">{{ $specialization->specialization }}</span> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                     @endforeach</span>
                  </li>                
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$doctor->firstname}} {{$doctor->lastname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$doctor->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Città</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$doctor->city}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Indirizzo</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$doctor->address}}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">                     
                      <h6 class="search-doc-name d-flex align-items-center mb-3"><i class="material-icons mr-2">Recensioni</i></h6>
                      <div class="testimonial-item">
                      <h4>{{$doctor->firstname}} {{$doctor->lastname}}</h4>
                      <p class="search-review">
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{Str::limit($doctor->cv, 346)}}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>                  
                    </div>                     
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
    @endforeach
    
@endsection
