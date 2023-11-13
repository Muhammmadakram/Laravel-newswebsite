<div class="modal fade " id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
aria-hidden="true">
<div class="modal-dialog ">
    <div class="modal-content">
        <form id="updatenewshomeForm" enctype="multipart/form-data" >
            @csrf
            <input type="hidden"  id="up_id">
            <div class="modal-header ">
                <h4 class="modal-title text-dark fw-bold" id="updateModalLabel">Update News Home</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="fw-bold text-dark">Description</label>
                    <input type="text" name="up_des" id="up_des" placeholder="Write a news"
                        class="form-control text-dark bg-light" required>
                </div>



                <div class="form-group mt-2">
                    <label class="fw-bold text-dark">Image</label>
                    <input type="file" name="up_image" id="up_image" class="form-control text-dark bg-light"
                        >
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="submitbtn" class="btn btn-success update_home">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
