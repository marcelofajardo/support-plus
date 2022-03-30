<form action="{{ route($route.'.destroy',$model->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm deleteBtn"><i class="ti-trash"></i></button>
</form>
