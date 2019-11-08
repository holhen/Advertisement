@extends("layouts.app")

@section("content")
<p>There are the following advertisements in the database currently:</p>
    <div class="flex-center">
        <table>
            <thead>
                <tr>
                    <th>Advertisement</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advertisements as $advertisement)
                    <tr>
                        <td>{{ $advertisement->title }}</td>
                        <td>{{ $advertisement->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

