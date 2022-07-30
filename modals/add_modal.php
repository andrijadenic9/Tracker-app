<!-- ADD NEW STUDENT MODAL -->
<div class="modal fade" id="newStudent" tabindex="-1" aria-labelledby="newStudentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newStudentLabel">Add new student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add_student.php" method="post">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <span><?php echo isset($add_error['name']) ? $add_error['name'] : "" ?></span>
                            <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3 col-6">
                            <span><?php echo isset($add_error['email']) ? $add_error['email'] : "" ?></span>
                            <input type="text" class="form-control" id="message-text" name="email" placeholder="E-mail"></input>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="message-text" rows="5" cols="40" name="info" placeholder="Additionals informations about student"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" name="add_student">Add student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>