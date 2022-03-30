<div class="btn-group me-2">
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">{{__('common.Action')}}</span>
        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
        </svg>

    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route($route.'.edit',$model->id) }}"><i
                class="ti-pencil"></i> {{__('common.Edit')}}</a>
        <form action="{{ route($route.'.destroy',$model->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item deleteBtn"><i class="ti-trash"></i> {{__('common.Delete')}}
            </button>
        </form>
    </div>
</div>
