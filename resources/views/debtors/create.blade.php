<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>create</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2><b>Register</b></h2>
                </div>
                <div class="text-right ">
                    <a class="btn btn-info" href="{{ route('debtors.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('debtors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-4 mx-auto">
            <div class="row mt-2">
                <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
                    <div class="form-group">
                        <strong>Borrower Name</strong>
                        <input type="text" name="name" class="form-control" >
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-15">
                    <div class="form-group">
                        <strong>Borrower's Date of Transaction</strong>
                        <input type="text" name="data_transaction" class="form-control" >
                        @error('data_transaction')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Borrower's Amount of Money Borrowed</strong>
                        <input type="text" name="amount" class="form-control" >
                        @error('amount')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Remarks</strong>
                        <input type="text" name="remarks" class="form-control" >
                        @error('remarks')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br><br>
                <button type="submit" class="btn  mx-auto btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>