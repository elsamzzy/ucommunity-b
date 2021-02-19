@extends('layouts.app')

@section('content')
    <div style="margin: 10% 10%">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">{{ __('ID') }}</th>
                <th scope="col">{{ __('First') }}</th>
                <th scope="col">{{ __('Last') }}</th>
                <th scope="col">{{ __('Email') }}</th>
                <th scope="col">{{ __('Balance') }}</th>
                <th scope="col">{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $users)
                <tr>
                    <th scope="row">{{ $users->id }}</th>
                    <td>{{ $users->first_name }}</td>
                    <td>{{ $users->last_name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                        <form action="{{ route('balance', $users) }}" method="post">
                            @csrf
                            <input name="balance" value="${{ $users->balance }}" placeholder="Balance"/>
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </td>
                    <td>
                        @if($users->deactivate == '1')
                            <form action="{{ route('activate', $users) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">{{ __('Activate') }}</button>
                            </form>
                        @else
                            <form action="{{ route('deactivate', $users) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">{{ __('Deactivate') }}</button>
                            </form>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
