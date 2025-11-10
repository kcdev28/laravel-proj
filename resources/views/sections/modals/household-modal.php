<div class="modal fade" id="householdModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">


            <div class="modal-body p-4">
                <h4 class="text-center text-success fw-bold mb-4">Household Information Form</h4>

                <form id="householdForm" class="row g-3">

                    <div class="col-md-3">
                        <label class="form-label">House Number</label>
                        <input type="text" class="form-control" placeholder="Enter house number" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Area</label>
                        <input type="text" class="form-control" placeholder="Subdivision / Area" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Street</label>
                        <input type="text" class="form-control" placeholder="Street name" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Number of Members</label>
                        <input type="number" class="form-control" placeholder="Enter number of household members"
                            min="1" required>
                    </div>

                </form>
            </div>


            <div class="modal-footer border-0 d-flex justify-content-end pt-0 pb-4 px-4">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="householdForm" class="btn btn-success ms-2">Submit</button>
            </div>

        </div>
    </div>
</div>