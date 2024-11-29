<div class="dropdown">
    <button class="btn btn-transparent dark:text-high-emphasis" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="option"><img src="{{ asset('assets/img/admin/option.png') }}" alt="" title=""/></div>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" data-coreui-toggle="modal" data-coreui-target="#editModal">Edit</a>
        <a class="dropdown-item" data-coreui-toggle="modal" data-coreui-target="#deleteModal">Delete</a>
    </div>
</div>

<a class="btn btn-success me-2" href="{{ route($crudRoutePart . '.edit', $row->id) }}">
    <svg class="icon">
        <use xlink:href="icons/sprites/free.svg#cil-pen"></use>
    </svg>
</a>
<a class="btn btn-info me-2" href="{{ route($crudRoutePart . '.show', $row->id) }}">
    <svg class="icon">
        <use xlink:href="icons/sprites/free.svg#cil-description"></use>
    </svg>
</a>
@if(!isset($noDelete))
<form action="{{ route($crudRoutePart . '.destroy', $row->id) }}" method="POST"
    onclick="return confirm('Are you want to delete this ?');" style="display: inline-block;">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger" type="submit">
    <svg class="icon">
        <use xlink:href="icons/sprites/free.svg#cil-trash"></use>
    </svg>
</form>
@endif