<div class="modal fade" id="barangayClearanceModal" tabindex="-1" aria-labelledby="barangayClearanceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">


            <div class="modal-body p-4">
                <h4 class="text-center text-success fw-bold mb-4">Barangay Clearance Request Form</h4>

                <form id="barangayClearanceForm" class="row g-3">


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


                    <div class="col-md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="bcDob" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="bcAge" readonly>
                    </div>
                    <div class="col-md-7">
                        <label class="form-label">Place of Birth</label>
                        <input type="text" class="form-control" placeholder="City / Municipality">
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Purpose</label>
                        <input type="text" class="form-control" placeholder="Purpose of request" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Image (1x1)</label>
                        <input type="file" class="form-control" accept="image/*" required>
                    </div>

                </form>
            </div>


            <div class="modal-footer border-0 d-flex justify-content-end pt-0 pb-4 px-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="barangayClearanceForm" class="btn btn-success ms-2">Submit</button>
            </div>

        </div>
    </div>
</div>