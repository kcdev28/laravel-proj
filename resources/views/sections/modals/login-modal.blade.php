<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">


            <div class="modal-body p-4">
                <h4 class="text-center text-success fw-bold mb-4">Login Form</h4>
                <form id="loginForm" class="row g-3">

                    <div class="col-12">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter your username" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="showPassword">
                            <label class="form-check-label" for="showPassword">Show Password</label>
                        </div>
                    </div>

                </form>
            </div>


            <div class="modal-footer border-0 d-flex justify-content-end pt-0 pb-4 px-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="loginForm" class="btn btn-success ms-2">Login</button>
            </div>

        </div>
    </div>
</div>