<div class="container mt-5">
    <form action="{{ route('proizvodi/{id}') }}" method="post" enctype="multipart/form-data">
        <h3 class="text-center mb-5">Azurirajte proizvod u Laravelu</h3>
        @csrf 
        @method('PUT')
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <input type="hidden" name="proizvod_csrf_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="proizvod">Izaberi proizvod</label>
            <input type="proizvod" name="proizvod" class="form-control" id="proizvod_id" required>
        </div>

        <button type="submit" class="btn">
           Azuriraj proizvod
        </button>
    </form>
</div>