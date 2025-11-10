<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold" id="registerModalLabel">Resident Registration Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form class="row g-3">


                    <h5 class="fw-bold mt-3">Personal Information</h5>
                    <div class="col-md-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" placeholder="Enter middle name">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter last name" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Suffix</label>
                        <input type="text" class="form-control" placeholder="e.g. Jr, Sr, III">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Your Photo</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Any Valid ID / For Validation Purposes</label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>


                    <h5 class="fw-bold mt-4">Address Information</h5>
                    <div class="col-md-3">
                        <label class="form-label">Street</label>
                        <input type="text" class="form-control" placeholder="Street name">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Area</label>
                        <input type="text" class="form-control" placeholder="Subdivision / Area">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Barangay</label>
                        <input type="text" class="form-control" value="San Agustin" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" value="Quezon City" readonly>
                    </div>


                    <h5 class="fw-bold mt-4">Other Details</h5>
                    <div class="col-md-4">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="age" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select" required>
                            <option value="" selected disabled>-- Select --</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Civil Status</label>
                        <select class="form-select" required>
                            <option value="" selected disabled>-- Select --</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Contact No.</label>
                        <input type="text" class="form-control" placeholder="09XXXXXXXXX">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control" placeholder="Enter religion">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Voter Status</label>
                        <select class="form-select">
                            <option value="" selected disabled>-- Select --</option>
                            <option>Registered</option>
                            <option>Not Registered</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Precinct No.</label>
                        <input type="text" class="form-control" placeholder="Enter precinct number">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Occupation</label>
                        <input type="text" class="form-control" placeholder="Enter occupation">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Employment Status</label>
                        <select class="form-select">
                            <option value="" selected disabled>-- Select --</option>
                            <option>Employed</option>
                            <option>Unemployed</option>
                            <option>Self-Employed</option>
                            <option>Student</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Special Group Status</label>
                        <select class="form-select">
                            <option value="" selected disabled>-- Select --</option>
                            <option>None</option>
                            <option>PWD</option>
                            <option>Senior Citizen</option>
                            <option>Solo Parent</option>
                            <option>Indigenous Person</option>
                        </select>
                    </div>

                    <h5 class="fw-bold mt-4">Account Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            required>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="showPasswordCheck">
                            <label class="form-check-label" for="showPasswordCheck">
                                Show Password
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword"
                            placeholder="Re-enter password" required>
                        <div id="passwordFeedback" class="form-text text-danger d-none">
                            Passwords do not match.
                        </div>
                    </div>


                    <div class="modal-footer d-flex justify-content-end">
                        <button type="submit" form="registerForm" class="btn btn-success ms-2">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>