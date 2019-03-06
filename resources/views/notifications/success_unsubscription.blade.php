@if(session('successful_destroy'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('successful_destroy') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
