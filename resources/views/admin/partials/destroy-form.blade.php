<form action="{{ $route }}" method="POST" class="d-inline destroy-form {{ $formClass ?? '' }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger {{ $btnClass ?? '' }}">{{ __('Delete') }}</button>
</form>
