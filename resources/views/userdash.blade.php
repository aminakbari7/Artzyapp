<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!------------------LIght BOx for Gallery-------------->
    <link rel="stylesheet" href="lightbox.min.css">
    <script type="text/javascript" src="{{ asset('assets/js/lightbox-plus-jquery.min.js') }}"></script>
    <!------------------LIght BOx for Gallery-------------->
    <title>dashboard</title>
</head>

<body>
    <!-------------------------------NAvigation Starts------------------>
    @include('layouts.navbar')
    <!---------------------------MOdal Section  satrts------------------->
    <div class="modal fade" id="modalview">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title h4">Messages</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled">
                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                                <img src="{{ asset('assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">
                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </li>
                        </a>
                        <hr class="my-3">
                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                                <img src="{{ asset('assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">
                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>

                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>
                        <hr class="my-3">

                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">
                                <img src="{{ asset('assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">


                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>


                        <hr class="my-3">
                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                            </li>
                        </a>
                        <hr class="my-3">



                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>
                            </li>
                        </a>
                        <hr class="my-3">
                        <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                <img src="{{ asset('assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px"
                                    class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                    <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------MOdal Ends---------------------------->



    <!-------------------------------------------Start Grids layout for lg-xl-3 columns and (xs-lg 1 columns)--------------------------------->
    <div class="container">
        <div class="row">
            <!--------------------------left columns  start-->
            <div class="col-12 col-lg-3">
                <div class="left-column">

                    @livewire('avatarchange')

                    <div class="card shadow-sm card-left3 mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small>
                            </h5>
                            <div class="row">
                                <div class="col-6 p-1">
                                    <a href="{{ asset('assets/img/left1.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left1.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                    <a href="{{ asset('assets/img/left2.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left2.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                    <a href="{{ asset('assets/img/left3.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left3.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                </div>
                                <div class="col-6 p-1">
                                    <a href="{{ asset('assets/img/left4.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left4.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                    <a href="{{ asset('assets/img/left5.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left5.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                    <a href="{{ asset('assets/img/left6.jpg') }}" data-lightbox="id"><img
                                            src="{{ asset('assets/img/left6.jpg') }}" alt="img"
                                            class="img-fluid my-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------------------------Middle columns  start---------------->
            <div class="col-12 col-lg-6">
                <div class="middle-column">
                    <div class="card">
                        @livewire('dashboardlivewire')
                    </div>
                </div>
            </div>
            <!---------------------------Statrs Right Columns----------------->
            <div class="col-12 col-lg-3">


                <div class="right-column">
                    <div class="card shadow-sm mb-4">

                        <div class="card-body">

                            <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small>
                                </a> </h6>
                            <div class="row no-gutters d-none d-lg-flex">
                                <div class="col-6 p-1">
                                    <img src="{{ asset('assets/img/avatar-dhg.png') }}" alt="img" width="80px"
                                        height="80px" class="rounded-circle mb-4">
                                    <img src="{{ asset('assets/img/avatar-fat.jpg') }}" alt="img" width="80px"
                                        height="80px" class="rounded-circle">



                                </div>
                                <div class="col-6 p-1 text-left">
                                    <h6>Jacob Thornton @fat</h6>
                                    <a href="#" class="btn btn-outline-info btn-sm mb-3"><i
                                            class="fas fa-user-friends"></i>Follow </a>

                                    <h6>Mark otto</h6>
                                    <a href="#" class="btn btn-outline-info  btn-sm"><i
                                            class="fas fa-user-friends"></i>Follow </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p>&copy; 2024

                                <a href="#">About</a>
                                <a href="#">Help</a>
                                <a href="#">Terms</a>
                                <a href="#">Privacy</a>
                                <a href="#">Cookies</a>
                                <a href="#">Ads </a>
                                <a href="#">Info</a>
                                <a href="#">Brand</a>
                                <a href="#">Blog</a>
                                <a href="#">Status</a>
                                <a href="#">Apps</a>
                                <a href="#">Jobs</a>
                                <a href="#">Advertise</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!------------------------Light BOx OPtions------------->
        <script>
            lightbox.option({

            })
        </script>
        <!------------------------Light BOx OPtions------------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
