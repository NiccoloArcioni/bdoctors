@extends('layouts.app')

@section('content')
    <h2>Tutti gli specialisti</h2>
    {{-- @dump($doctors)
    @foreach ($doctors as $doctor)
      <h2>{{ $doctor->firstname }}</h2>
      @dump($doctor)
      @dump($doctor->specializations)
    @endforeach --}}
    @foreach ($doctors as $doctor)
    <div class="page-content page-container" id="page-content">
      <div class="padding">
          <div class="row container d-flex justify-content-center">
              <div class="col-xl-12 col-md-12">
                  <div class="card user-card-full">
                      <div class="row m-l-0 m-r-0">
                          <div class="col-sm-4 bg-c-lite-green user-profile">
                              <div class="card-block text-center text-white">
                                  <div class="m-b-25"> <img src="{{asset('storage/' . $doctor->photo)}}" class="img-radius" alt="User-Profile-Image"> </div>
                                  <h6 class="f-w-600">{{ $doctor->firstname }}{{ $doctor->lastname }}</h6>
                                  @foreach ($doctor->specializations as $specialization)
                                    <p>{{ $specialization->specialization }}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                  @endforeach
                                  
                              </div>
                          </div>
                          <div class="col-sm-8">
                              <div class="card-block">
                                  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Email</p>
                                          <h6 class="text-muted f-w-400">{{ $doctor->email }}</h6>
                                      </div>
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Indirizzo</p>
                                          <h6 class="text-muted f-w-400">{{ $doctor->address }}</h6>
                                      </div>
                                  </div>
                                  <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                  <div class="row">
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">City</p>
                                          <h6 class="text-muted f-w-400">{{ $doctor->city }}</h6>
                                      </div>
                                      <div class="col-sm-6">
                                          <p class="m-b-10 f-w-600">Prestazioni</p> 
                                          <h6 class="text-muted f-w-400">{{ $doctor->performance }}</h6>
                                      </div>
                                  </div>
                                  <div class="button-container">
                                    <div class="register-btn doctor-btn hide">
                                        <a href="#">Vai al profilo <i class="icofont-arrow-right"></i></a>
                                        
                                      
                                      </div>
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