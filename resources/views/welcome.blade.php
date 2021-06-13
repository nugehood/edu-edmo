<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDMO</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

    <!--Sidebar Navigation Menu-->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="row align-items-start mt-5">
                <div class="empty">
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-info-circle-fill"></i> About</a>
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-lightbulb-fill"></i> Free Education</a>
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-chat-fill"></i> Open Discussion</a>
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-gift-fill"></i> Shared Paperwork</a>
                </div>
                <div class="border border-light p-5">
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-person-circle"></i> Sign in</a>
                </div>
                <div class="border border-light p-3">
                    <a href=""><i class="bi bi-heart-fill"></i> Join movement</a>
                </div>
        </div>
    </div>

    <!--Navbar-->
    <nav class="navbar text-light" style="background-color: black;">
        <div class="container-fluid justify-content-center">
                <div class="bruh col-10 text-center">
                    <div class="ra">
                        <span class="navbar-brand mb-0 h1" style="font-family:title;font-size: 50pt;">EDMO</span>
                    </div>
                </div>
                <i id="burger" class="bi bi-list" onclick="openNav()"></i>    
        </div>
    </nav>

    <main>
        <div class="container mt-4 text-center">
            <img src="{{ asset('/images/bil2.jpg') }}" alt="" class="img-fluid">
        </div>

        <div class="container-fluid mt-5 text-center text-light" style="background-color: black;height:100%;padding-bottom:100%;">
                <h1>ABOUT US</h1>
        </div>
    </main>

      <!--Sidebar Script-->
      <script type="text/javascript">
        function openNav() 
        {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() 
        {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>