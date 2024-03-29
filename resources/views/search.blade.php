@extends('layouts.app')

@section('content')
    <div class="form-wrapper form-wrapper-search">
      <form action="{{ Route('guest.search') }}" method="get">
        {{-- value='{{$specialization->id}}' {{$searched_specialization->id == $specialization->id ? 'selected' : ''}} --}}
          <select name="search" id="search">
          @foreach ($specializations as $specialization)
              <option value="{{$specialization->id}}">{{$specialization->specialization}}</option>
          @endforeach
          </select>
          <select name="filter" id="filter">
            <option value="all">Visualizzi tutti i profili</option>
            <option value="reviews">Ordina per numero di recensioni</option>
            <option value="votes">dottori con media voti maggiore di 3</option>
            </select>
            <style>
              #filterBtn:hover{
                cursor: pointer;
              }
            </style>
            <span id="filterBtn" style=" padding: 8px 0;
            color: #00C3A5;
            width: 20%;
            background: #fff;text-align: center;
            border: 0.5px solid #00C3A5;">Cerca</span>
      </form>
  </div>
      {{-- <div class="dropdown dropdown-margin">
        <div class="dropdown-wrapper">
            <ul class="nav nav-pills">       
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Prestazioni</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>Filtra per voti</li>
                                <li>Filtra per numero di recensioni</li>
                            </ul>
                        </div>
                </li>
            </ul>
        </div>        
    </div> --}}
    <div class="title-search">
        <h2>Tutti gli specialisti</h2>
    </div>
    <div id="search-doctors-wrap">
      @foreach ($doctors as $doctor)
      <div class="container" data-aos="fade-up">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('guest')}}">Home</a></li>
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
                          <h6 class="search-doc-name d-flex align-items-center mb-3"><i class="material-icons mr-2">Curriculum Vitae</i></h6>
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
    </div>
    
@endsection
