<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDMO | Join</title>
        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    
        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body style="background-color: black;">
    <main>
        <div class="mx-auto" style="margin: 100px;">
            <div class="container-sm border">
                <div class="col text-center text-light">
                    <span style="font-family: title;font-size: 50px;">EDMO</span><br>
                    <span class="text-decoration-underline" style="font-family: Ubuntu;font-size: 20px;">Sign up</span>
                </div>
                <div class="col-sm-4 mt-3 text-center text-light mx-auto">
                    <form action="/user/create/store" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label" 
                                style="font-family: Poppins;">Username*</label>
                                <input type="text" 
                                class="form-control text-light text-center @error('name') is-invalid @enderror" name="name" id="name"
                                style="background-color: black;" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" 
                                style="font-family: Poppins;">E-mail*</label>
                                <input type="email" 
                                class="form-control text-light text-center @error('email') is-invalid @enderror" name="email" id="email"
                                style="background-color: black;" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" 
                                style="font-family: Poppins;">Password*</label>
                                <input type="password" class="form-control text-light text-center @error('password') is-invalid @enderror" name="password" id="password"
                                style="background-color: black;">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3"> 
                                <button type="submit" class="btn btn-outline-light">Create</button>
                            </div>
                            
                            <div class="mb-3"> 
                                <a href="" class="badge">Already have an account?</a>
                                <a href="/forgot-password" class="badge">Forgot your password?</a>
                            </div>
                    </form>
                </div>
            </div>
          </div>
        <!--Footer-->
        <footer class="text-center text-light fs-4" style="font-family: Raelway;background-color:black;">
            Copyright &#x00a9; 2021 by 
            <a href="mailto:nugehoodg@gmail.com" data-bs-toggle="tooltip" title="EMAIL ME!" style="text-decoration: none;color: white;">Anugerah</a>
        </footer>  
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>