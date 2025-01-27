@extends('admin.layouts.app')
@section('title')
Listes des partenaires
@endsection
@section('content')
        <!-- partial -->
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('partenaires.create') }}" class="btn btn-primary btn-rounded btn-fw">Nouveau</a>
                    </div>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Titre </th>
                          <th> image </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($partenaires as $partenaire)
                        <tr>
                          <td>
                            {{$partenaire->title}}
                          </td>
                          <td>
                            {{$partenaire->image}}
                          </td>

                          <td >
                            <form action="" method="POST">
                                <a class="btn btn-info btn-sm edit-btn" href="#" data-toggle="modal"
                                    data-target="#edit-{{ $partenaire->name }}" form="edit-{{ $partenaire->name }}">
                                     <i class="mdi mdi-eye"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                    <a class="btn btn-danger btn-sm" href="{{ route('partenaires.destroy', $partenaire->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer l'utilisateur {{ $partenaire->title }}" data-toggle="modal" data-target="#supprimer">
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