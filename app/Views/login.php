<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="row g-0">
                        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white p-4">
                            <img src="https://i.imgur.com/uNGdWHi.png" alt="Login Image" class="img-fluid"
                                style="max-height: 280px;">
                        </div>

                        <div class="col-md-6">
                            <div class="card-body p-5">
                                <h3 class="mb-4 text-center">Login</h3>

                                <form id="loginForm">
                                    <div class="mb-3">
                                        <label for="emailLogin" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailLogin" name="emailLogin"
                                            placeholder="Enter a valid email address">
                                    </div>

                                    <div class="mb-3">
                                        <label for="passwordLogin" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="passwordLogin"
                                            name="passwordLogin" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>

                                    <div class="mb-3 text-end">
                                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                                    </div>
                                </form>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" onclick="login()">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-center bg-primary text-white py-3">
                        CRUD APP Seminar 1: Le Minh Quang
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script src="/CRUD/assets/lib/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="/CRUD/assets/js/app.js"></script>
    <script src="/CRUD/assets/js/login.js"></script>
</body>

</html>