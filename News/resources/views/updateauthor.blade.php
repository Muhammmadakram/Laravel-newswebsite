<div class="modal fade " id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <form id="updateAuthor" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="up_id">
                <div class="modal-header ">
                    <h4 class="modal-title text-dark fw-bold" id="updateModalLabel">Update Author</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="fw-bold text-dark">Author Name</label>
                        <input type="text" name="up_author" id="up_author" placeholder="Enter a Author name"
                            class="form-control text-dark bg-light" required>
                    </div>
                    <div class="form-group mt-2">
                        <label class="fw-bold text-dark">Author Image</label>
                        <input type="file" name="author_image" id="author_image"
                            class="form-control text-dark bg-light">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submitbtn" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
