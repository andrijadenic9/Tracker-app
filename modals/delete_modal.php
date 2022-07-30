<!-- DELETE STUDENT MODAL -->
<div class="modal fade" id="deleteStudent" tabindex="-1" aria-labelledby="deleteStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="edit_delete_student.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title delete-modal-title" id="editStudentLabel">Are you sure you want delete student?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer delete-modal-footer">
                    <input type="hidden" class="delete-modal-email" name="email" value="">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, go back.</button>
                    <button class="btn btn-primary" name="delete_student">Yes, delete account!</button>
                </div>
            </form>
        </div>
    </div>
</div>