<!-- EDIT STUDENT MODAL -->
<div class="modal fade" id="editStudent" tabindex="-1" aria-labelledby="editStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title edit-modal-title" id="editStudentLabel">Edit form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_delete_student.php" method="post">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <input type="hidden" class="edit-input-id" name="id" value="">
                            <input type="text" class="form-control edit-input-name" id="recipient-name" name="name" placeholder="Name" required>
                        </div>
                        <div class="mb-3 col-6">
                            <input type="text" class="form-control edit-input-email" id="message-text" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control edit-input-info" id="message-text" rows="5" cols="40" name="info" placeholder="Additionals informations about student"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary save-edit" name="edit_student">Save edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>