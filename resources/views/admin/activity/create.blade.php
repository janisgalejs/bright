<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <form class="form-horizontal" action="{{ route('activity.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>
                <div class="card-body">
                    <div class="row my-3">
                        <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="info text-danger ">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" required>
                            @error('date')
                            <div class="info text-danger ">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">{{ __('Create') }}</button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
