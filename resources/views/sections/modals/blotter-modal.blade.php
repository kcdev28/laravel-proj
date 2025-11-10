<div class="modal fade" id="blotterReportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">


            <div class="modal-body p-4">
                <h4 class="text-center text-success fw-bold mb-4">Blotter Report Form</h4>

                <form id="blotterReportForm" class="row g-3">


                    <h5 class="fw-bold mt-3">Complainant Information</h5>
                    <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Complainant Name" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="complainantAge" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" placeholder="Complainant Contact" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Complainant Address">
                    </div>


                    <h5 class="fw-bold mt-4">Person to Complain About</h5>
                    <div class="col-md-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="respondentAge" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" placeholder="Contact">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>


                    <h5 class="fw-bold mt-4">Incident Information</h5>
                    <div class="col-md-3">
                        <label class="form-label">Incident Date</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Incident Time</label>
                        <input type="time" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Incident Location</label>
                        <input type="text" class="form-control" placeholder="Incident Location">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Incident Description</label>
                        <textarea class="form-control" rows="3" placeholder="Describe the incident"></textarea>
                    </div>

                </form>
            </div>

            <div class="modal-footer border-0 d-flex justify-content-end pt-0 pb-4 px-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="blotterReportForm" class="btn btn-success ms-2">Submit</button>
            </div>

        </div>
    </div>
</div>