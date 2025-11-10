<div class="modal fade" id="barangayIdModal" tabindex="-1" aria-labelledby="barangayIdModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">


            <div class="modal-body p-4">
                <h4 class="text-center text-success fw-bold mb-4">Barangay ID Request Form</h4>

                <form id="barangayIdForm" class="row g-3">


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

                    <div class="col-md-3">
                        <label class="form-label">Image (1x1)</label>
                        <input type="file" class="form-control" accept="image/*" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="bidDob" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="bidAge" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Place of Birth</label>
                        <input type="text" class="form-control" placeholder="City / Municipality">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Height (cm)</label>
                        <input type="number" class="form-control" placeholder="e.g. 170">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Weight (kg)</label>
                        <input type="number" class="form-control" placeholder="e.g. 65">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Civil Status</label>
                        <select class="form-select">
                            <option value="" selected disabled>-- Select --</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Separated</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option value="" selected disabled>-- Select --</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control" placeholder="Enter religion">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Citizenship</label>
                        <input type="text" class="form-control" placeholder="Enter citizenship">
                    </div>


                    <h5 class="fw-bold mt-4">In Case of Emergency</h5>
                    <div class="col-md-4">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Emergency contact full name">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Emergency contact phone number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Full Address</label>
                        <input type="text" class="form-control" placeholder="Emergency contact full address">
                    </div>

                </form>
            </div>


            <div class="modal-footer border-0 d-flex justify-content-end pt-0 pb-4 px-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="barangayIdForm" class="btn btn-success ms-2">Submit</button>
            </div>

        </div>
    </div>
</div>