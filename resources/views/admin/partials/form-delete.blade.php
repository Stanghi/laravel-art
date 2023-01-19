<form
    onsubmit="return confirm('Confirm the elimination of {{$artist->name}}?')"
    class="d-inline" action="{{route('admin.projects.destroy', $artist)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger" title="delete"><i class="fa-regular fa-trash-can"></i></button>
</form>
