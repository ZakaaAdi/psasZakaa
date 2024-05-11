<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Outlet List - PSAS Zakaa Adi Nugroho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
 
<body>
 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
 
            <h4>Outlet List - PSAS Zakaa Adi Nugroho</h4>
 
            <!-- Notifikasi menggunakan flash session data -->
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
 
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('outlets.create') }}" class="btn btn-md btn-success mb-3 float-end">New
                        Outlet</a>
 
                    <table class="table table-bordered mt-1 text-center">
                        <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($outlets as $outlet)
                            <tr>
                                <td>{{ $outlet->code }}</td>
                                <td>{{ $outlet->name }}</td>
                                <td>{{ $outlet->status }}</td>
                                <td>{{ $outlet->address }}</td>
                                <td>{{ $outlet->phone }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                          action="{{ route('outlets.destroy', $outlet->id) }}" method="POST">
                                        <a href="{{ route('outlets.edit', $outlet->id) }}"
                                           class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-mute" colspan="4">Data outlet tidak tersedia</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
 
                    {{ $outlets->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
 
</html>
 

