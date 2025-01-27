@extends('admin.layouts.app')
@section('title')
Listes des Agents
@endsection
@section('content')
        <!-- partial -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('agents.create') }}" class="btn btn-primary btn-rounded btn-fw">Nouveau</a>
                    </div>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Photo </th>
                          <th> Prénom </th>
                          <th> nom </th>
                          <th> Fonction </th>
                          <th> Lien facebook </th>
                          <th> Lien tweeter </th>
                          <th> Lien linkedin </th>
                          <th> Lien whatsapp </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($agents as $agent)
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/uploads/agents/'.$agent->image )}}" alt="image" />
                          </td>
                          <td> {{$agent->prenom}} </td>
                          <td>
                            {{$agent->name}}
                          </td>
                          <td > {{$agent->fonction}} </td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-facebook"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                                <h6 class="dropdown-header">{{$agent->facebook}}</h6>
                              </div>
                            </div>
                          </td>

                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-twitter"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                                <h6 class="dropdown-header">{{$agent->tweeter}}</h6>
                              </div>
                            </div>
                          </td>

                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-linkedin"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                                <h6 class="dropdown-header">{{$agent->linkedin}}</h6>
                              </div>
                            </div>
                          </td>

                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn btn-default dropdown-toggle" id="dropdownMenuIconButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-whatsapp"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton8">
                                <h6 class="dropdown-header">{{$agent->whatsapp}}</h6>
                              </div>
                            </div>
                          </td>
                          <td >
                            <form action="" method="POST">
                                <a class="btn btn-info btn-sm edit-btn" href="#" data-toggle="modal"
                                    data-target="#edit-{{ $agent->name }}" form="edit-{{ $agent->name }}">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                    <a class="btn btn-danger btn-sm" href="{{ route('agents.destroy', $agent->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer l'utilisateur {{ $agent->name }}" data-toggle="modal" data-target="#supprimer">
                                        <i class=" mdi mdi-delete-forever">
                                        </i>												
                                    </a>
                            </form>
                        </td>
                        </tr>  
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          @include('admin.layouts.delete')
          <!-- partial -->

@endsection

@section('scripts')
    <script>
        function supprimer(event){
            event.preventDefault();
            a = event.target.closest('a');

            let deleteForm = document.getElementById('deleteForm');
            deleteForm.setAttribute('action', a.getAttribute('href'));

            let textDelete = document.getElementById('textDelete');
            textDelete.innerHTML = a.getAttribute('item') + " ?";

            let titleDelete = document.getElementById('titleDelete');
            titleDelete.innerHTML = "Suppression";           
            
        }
    </script>
@endsection