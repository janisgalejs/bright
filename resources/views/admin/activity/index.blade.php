<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activity') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="card">
            <div class="card-body">

                <a href="{{ route('activity.create') }}" class="btn btn-primary mb-3">{{ __('Create') }}</a>
                <hr>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Date') }}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                                <a href="{{ route('activity.edit', $item->id) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                                @include('admin.partials.destroy-form', ['route' => route('activity.destroy', $item->id)])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>
