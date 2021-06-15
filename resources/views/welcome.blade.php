<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="974388667015-vbs558sqi8v11b357o12tl9kvmel3usk.apps.googleusercontent.com">
    <title>EDMO | Home</title>
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
<body>

    <!--Sidebar Navigation Menu-->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="row align-items-start mt-5">
                <div class="empty">
                </div>
                <div class="border border-light p-3">
                    <a href="javascript:void(0)" onclick="jumpTo('about us')"><i class="bi bi-info-circle-fill"></i> About</a>
                </div>
                <div class="border border-light p-3">
                    <a href="javascript:void(0)" onclick="jumpTo('activities')"><i class="bi bi-palette-fill"></i> Activities</a>
                </div>
                <div class="border border-light p-3">
                    <a href="javascript:void(0)" onclick="jumpTo('freeEd')"><i class="bi bi-lightbulb-fill"></i> Free Education</a>
                </div>
                <div class="border border-light p-3">
                    <a href="#"><i class="bi bi-chat-fill"></i> Open Discussion</a>
                </div>
                <div class="border border-light p-3">
                    <a href="#"><i class="bi bi-gift-fill"></i> Shared Paperwork</a>
                </div>
                <div class="border border-light p-5">
                </div>
                @if (Route::has('login'))
                    @auth
                <div class="border border-light p-3">
                    <a href="auth/google"><i class="bi bi-person-circle"></i>{{ Auth::user()->name  }}</a>
                </div>
                @endauth
                    @else
                <div class="border border-light p-3">
                    <a href="#loginModal" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-person-circle"></i> Sign in</a>
                </div>
                <div class="border border-light p-3">
                    <a href="/user/create" target="_blank"><i class="bi bi-heart-fill"></i> Join movement</a>
                </div>
            @endif
        </div>
    </div>

    <!--Navbar-->
    <nav class="navbar text-light" style="background-color: black;">
        <div class="container-fluid">
                <div class="text-center">
                    <div class="w3-animate-opacity">
                        <span class="navbar-brand mb-0 h1" style="font-family:title;font-size: 50pt;">EDMO</span>
                    </div>
                </div>
                <i id="burger" class="bi bi-list w3-animate-opacity" onclick="openNav()"></i>    
        </div>
    </nav>

    <main>
        <div class="container mt-4 text-center ">
            <img src="{{ asset('/images/bil2.jpg') }}" alt="" class="img-fluid w3-animate-zoom">
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 style="font-family: Poppins" class="modal-title" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/user/create/store" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label" 
                                style="font-family: Poppins;">Username*</label>
                                <input type="text" 
                                class="form-control text-light text-center @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" 
                                style="font-family: Poppins;">E-mail*</label>
                                <input type="email" 
                                class="form-control text-light text-center @error('email') is-invalid @enderror" name="email" id="email"
                                value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" 
                                style="font-family: Poppins;">Password*</label>
                                <input type="password" class="form-control text-light text-center @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3"> 
                                <button type="submit" class="btn btn-outline-light">Create</button>
                            </div>
                            
                            <div class="mb-3"> 
                                <a href="/user/create" target="_blank">Don't have an account?</a>
                                <a href="/forgot-password">Forgot your password?</a>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Login</button>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
            </div>
            </div>
        </div>

        <!--About us & Activities-->
        <div class="container-fluid mt-5 text-light" style="background-color: black;height:100%;padding-bottom:1%;">    
            <div class="p-3 text-center" id="about us">   
                    <h1 class="w3-animate-opacity">ABOUT US</h1>
                </div>
                <div class="col text-center border-bottom w3-animate-opacity">
                    <p class="fs-4">
                        Edmo is a place for free education,
                        people manifest their experiences here.
                        Sharing knowledge of what their learn
                        and to answer people’s questions.
                        Edmo is a community, a community that
                        values other experiences and knowledge.
                        Edmo thinks that everyone should get an
                        equal shares of education in terms of
                        financial situations.</p>
                </div>

                <!--Activities components-->
                <div class="col p-2">
                    <div class="p-3 text-center" id="activities">
                        <h1>ACTIVITIES</h1>
                    </div>
                    <div class="row text-center justify-content-center p-3 border-bottom">
                        <div class="col-sm-3">
                          <div class="card border" style="background-color: black">
                            <img src="{{ asset('/images/music1.jpg') }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                              <h5 class="card-title" style="font-family: Montserrat;">Music as a learning device</h5>
                              <p class="card-text" style="font-family: Raleway;">
                                 Music is the most crucial piece of instrument/device for the human
                                 life. It can visualize human emotions through frequency of sounds,
                                 from  different kind of instruments. To study music is to study
                                 how each sound correspond to one's perception of it.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card border" style="background-color: black">
                            <img src="{{ asset('/images/Commu1.jpg') }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Communication as a bridge</h5>
                              <p class="card-text" style="font-family: Raleway;">
                                Communication is important, verbally or not.
                                It can convey context and information. To process
                                something people tend to communicate them or
                                put them into a visual display. With Communication
                                clarity is not a question anymore.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card border" style="background-color: black">
                            <img src="{{ asset('/images/Ob1.jpg') }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Experience as a knowledge</h5>
                              <p class="card-text" style="font-family: Raleway;">
                                  The best teacher is experience. It is the art
                                  of observation. Seeing something in action and
                                  putting it to the test, in theory and practice.
                                  In observation, validation is no more. Is up to one's
                                  ability to manifest those experience to other media.
                              </p>
                            </div>
                          </div>
                        </div> 
                      </div>
                </div>
        </div>

        <!--Free Education Container-->
        <div id="freeEd" class="container-fluid mt-5 row mx-auto" style="height:100%;padding-bottom:1%;">    
            <div class="border border-bottom-0 border-dark col-sm-4 text-wrap" style="background-color: black;">
                <h2 class="text-light p-3">FREE EDUCATION</h2>
                <div class="box" style="background-color:white;"></div>
            </div>
            <div class="border border-dark p-3">
                <p class="fs-5" style="font-family: Raleway;color: black;">
                    <b>Free education</b> is education funded through 
                    government spending or charitable organizations 
                    rather than tuition funding. Many models of free higher 
                    education have been proposed. Primary school and other 
                    comprehensive or compulsory education is free in many 
                    countries (often not including primary textbook as 
                    well as certain post-secondary administrative and sundry fees), 
                    including post-graduate studies in the Nordic countries. 
                    The Article 13 of International Covenant on <b>Economic, 
                    Social and Cultural Rights</b> ensures the right to 
                    free education at primary education and progressive 
                    introduction of it at secondary and higher education as the
                    right to education.
                </p>
            </div>
        </div>

        
        
        <!--Footer-->
        <footer class="text-center text-light fs-4" style="font-family: Raelway;background-color:black;">
            Copyright &#x00a9; 2021 by 
            <a href="mailto:nugehoodg@gmail.com" data-bs-toggle="tooltip" title="EMAIL ME!" style="text-decoration: none;color: white;">Anugerah</a>
        </footer>
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

        function jumpTo(name)
        {
            window.location.hash = name;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</body>
</html>