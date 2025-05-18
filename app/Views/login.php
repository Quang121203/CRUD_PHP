<?php include './app/Views/layouts/header.php'; ?>

<div class="container py-5" style="min-height: 85vh;">
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
                                    <input type="password" class="form-control" id="passwordLogin" name="passwordLogin"
                                        placeholder="Enter password">
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
            </div>
        </div>
    </div>
</div>

<?php include './app/Views/layouts/footer.php' ?>