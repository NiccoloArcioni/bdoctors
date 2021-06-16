<div class="profile-settings">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                <form style="padding-bottom: 1rem"  action="{{route('update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img style="margin: 16px" src="{{asset('storage/' . $user->photo)}}" alt="avatar" class="avatar-img rounded-circle" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">{{$firstname . ' ' . $lastname}}</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">{{ucfirst($user->city)}}</span></p>
                                    {{-- <div>
                                        <button style="width:110px; margin-top: 16px" type="submit" class="btn btn-primary">Carica foto</button>
                                        <button style="width:110px; margin-top: 16px" type="submit" class="btn btn-danger">Carica cv</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-group">
                        <label for="city">Città</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="{{$user->city}}" />
                    </div>
                    <div class="form-group">
                        <label for="address">Indirizzo</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="{{$user->address}}" />
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telephone">Numero di telefono</label>
                            <input type="number" minlength="10" maxlength="10" class="form-control" name="telephone" id="telephone" placeholder="{{$user->telephone ? $user->telephone : '+39'}}"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="select-multiple">Aggiungi specializzazione</label>
                            <select id="select-multiple" class="form-control" name="specializations[]" multiple="multiple">
                                @foreach ($specializations as $specialization)
                                    <option value="{{$specialization->id}}" {{$user->specializations->contains($specialization) ? 'selected' : ''}}>{{$specialization->specialization}}</option>
                                @endforeach
                                {{-- <option>Urologo</option>
                                <option>Chirurgo</option>
                                <option>Odontoiatra</option>
                                <option>Dottore</option> --}}
                            </select>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <button type="submit" class="btn btn-primary">Aggiorna</button>
                </form>
            </div>
        </div>
    </div>
</div>