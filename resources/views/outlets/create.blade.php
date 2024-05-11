<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create New Outlet List - PSAS Zakaa Adi Nugroho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <h4>Create New List</h4>

            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <form action="{{ route('outlets.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="code">Code</label>
                            <input type="code" class="form-control @error('code') is-invalid @enderror"
                                   name="code" value="{{ old('code') }}" required>

                            <!-- error message untuk email -->
                            @error('code')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required>

                            <!-- error message untuk name -->
                            @error('name')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status">Status</label>
                            <input type="status" class="form-control @error('status') is-invalid @enderror"
                                   name="status" required>

                            <!-- error message untuk password -->
                            @error('status')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="address" class="form-control @error('address') is-invalid @enderror"
                                   name="address" required>

                            <!-- error message untuk password -->
                            @error('address')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" required>

                            <!-- error message untuk password -->
                            @error('phone')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                        <a href="{{ route('outlets.index') }}" class="btn btn-md btn-secondary">back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>