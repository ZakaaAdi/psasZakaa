<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Outlet - PSAS Zakaa Adi Nugroho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <h4>Edit Outlet</h4>

            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <form action="{{ route('outlets.update', $outlets->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                                <label style="font-family: Georgia, 'Times New Roman', Times, serif">Code</label>
                                <input type="text" class="mb-2 form-control @error('code') is-invalid @enderror" name="code" value="{{ ($outlets->code) }}">
                            
                                @error('code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Nama</label>
                            <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ ($outlets->name) }}">  
                           
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Status</label>
                            <input type="text" class="mb-2 form-control @error('status') is-invalid @enderror" name="status" value="{{ ($outlets->status) }}">
                        
                            @error('status')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Address</label>
                            <input type="text" class="mb-2 form-control @error('address') is-invalid @enderror" name="address" value="{{ ($outlets->address) }}">
                        
                            @error('address')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label style="font-family: Georgia, 'Times New Roman', Times, serif">Phone</label>
                            <input type="text" class="mb-2 form-control @error('phone') is-invalid @enderror" name="phone" value="{{ ($outlets->phone) }}">
                        
                            @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Update</button>
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