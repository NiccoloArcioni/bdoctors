@extends('layouts.app')

@section('content')
    @php
    $user = Auth::user();
    $firstname = $user->firstname;
    $lastname = $user->lastname;
    $firstname = ucfirst($firstname);
    $lastname = ucfirst($lastname);
    @endphp
    <div class="dashboard">
        <div class="hor-nav-dash">
            <div class="profile">
                <img class="profile-pic" src="{{asset('storage/' . $user->photo)}}" alt="Card image cap">
                <h6>{{$firstname . ' ' . $lastname}}</h6>
            </div>
            <ul id="col-1-dashboard">
                <li><i class="icofont-ui-settings"></i><span> Modifica profilo</span></li>
                <li><i class="icofont-ui-message"></i><span> Messaggi ricevuti</span></li>
                <li><i class="icofont-comment"></i><span> Recensioni</span></li>
                <li><i class="icofont-shopping-cart"></i><span> Sponsorizza il tuo profilo</span></li>
                <li><i class="icofont-chart-bar-graph"></i><span> Statistiche</span></li>
            </ul>
        </div>
        <div class="active-section">
            <div class="section-heading">
                <h6>Impostazioni del profilo</h6>
            </div>
            <div id="col-2-dashboard" class="section-body">
                <div class="profile-settings">
                    {{-- <img src="{{asset('storage/' . $user->photo)}}" alt="profile picture">
                    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <label for="profile_picture">Seleziona una nuova immagine del profilo :</label><br>
                        <input type="file" id="profile_picture" name="profile_picture"><br>
                        <input type="submit">
                      </form> --}}
                      <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                                    <form>
                                        <div class="row mt-5 align-items-center">
                                            <div class="col-md-3 text-center mb-5">
                                                <div class="avatar avatar-xl">
                                                    <img style="margin: 16px" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                                                    <button type="submit" class="btn btn-primary">Carica foto</button>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row align-items-center">
                                                    <div class="col-md-7">
                                                        <h4 class="mb-1">Brown, Asher</h4>
                                                        <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                                    </div>
                                                </div>
                                                {{-- <div class="row mb-4">
                                                    <div class="col-md-7">
                                                        <p class="text-muted">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at,
                                                            pretium blandit sapien.
                                                        </p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                                        <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                                        <p class="small mb-0 text-muted">(537) 315-1481</p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <hr class="my-4" />
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="firstname">Firstname</label>
                                                <input type="text" id="firstname" class="form-control" placeholder="Brown" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lastname">Lastname</label>
                                                <input type="text" id="lastname" class="form-control" placeholder="Asher" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress5">Address</label>
                                            <input type="text" class="form-control" id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue" />
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCompany5">Company</label>
                                                <input type="text" class="form-control" id="inputCompany5" placeholder="Nec Urna Suscipit Ltd" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState5">State</label>
                                                <select id="inputState5" class="form-control">
                                                    <option selected="">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip5">Zip</label>
                                                <input type="text" class="form-control" id="inputZip5" placeholder="98232" />
                                            </div>
                                        </div>
                                        <hr class="my-4" />
                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        </div>   
                </div>             
            </div>
        </div>
    </div>
@endsection
