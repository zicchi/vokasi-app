<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Bootstrap Components &rsaquo; Modal &mdash; Stisla</title>

    <!-- General CSS Files -->
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Modal</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                            <div class="breadcrumb-item">Modal</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Modal</h2>
                        <p class="section-lead">
                            Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                            notifications, or completely custom content.
                        </p>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="modal-dialog m-0" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal Template</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-mt">
                                    <div class="card-header">
                                        <h4>Modal Confirm</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2">You can easily change the default browser
                                            confirmation box with a bootstrap modal.</p>
                                        <button class="btn btn-danger" data-confirm="Realy?|Do you want to continue?"
                                            data-confirm-yes="alert('Deleted :)');">Delete</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>The Bootstrap Way</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2">Use the Bootstrap method to create modal. You need to
                                            create an HTML structure for modal and the following button will trigger it.
                                        </p>
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Aw, yeah!</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Modal Demo</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2">We've created a plugin to easily create a bootstrap
                                            modal.</p>
                                        <button class="btn btn-primary" id="modal-1">Launch Modal</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Modal Center</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2">You can change the modal position to center.</p>
                                        <button class="btn btn-primary" id="modal-2">Launch Modal</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>The Others</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-2">Check the <code>modal.js</code> code in the
                                            <code>dist/js/page</code> folder to get the source code.
                                        </p>
                                        <div class="buttons">
                                            <button class="btn btn-primary" id="modal-3">Buttons</button>
                                            <button class="btn btn-primary" id="modal-4">Footer Background</button>
                                            <button class="btn btn-primary" id="modal-5">Login</button>
                                            <button class="btn btn-primary" id="modal-6">Something in the
                                                Footer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <form class="modal-part" id="modal-login-part">
                    <p>This login form is taken from elements with <code>#modal-login-part</code> id.</p>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                    </div>
                </form>

                <div class="modal fade" tabindex="100" role="dialog" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer bg-whitesmoke br">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a
                        href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    {{-- <script src="../node_modules/prismjs/prism.js"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="assets/js/page/bootstrap-modal.js"></script> --}}
</body>

</html>
