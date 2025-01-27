<div class="modal fade" id="supprimer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleDelete"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="@yield('action_delete')" method="POST" id="deleteForm">
                    @method('DELETE')
                    @csrf
                    <h5 id="textDelete"></h5>
                    <hr>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Oui</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Non</button>
                    </div>
                </form>
                
            </div>
            
        </div>
    
    </div>    
</div>