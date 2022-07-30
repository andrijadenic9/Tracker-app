<?php require 'partials/head.php' ?>
<?php require 'partials/navbar.php' ?>

<div class="private-container">
    <h1 class="mb-5 mt-5" style="text-transform:capitalize;"><?php echo $role ?> dashboard</h1>
    <div class="row">
        <div class="private-padding-right col-xxl-6">
            <h3>Students</h3>
            <table id="students-table" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th colspan="1" scope="col">Name</th>
                        <th colspan="1" scope="col">Email</th>
                        <th colspan="4" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($students as $student) : ?>
                        <tr>
                            <td><?php echo $student->name ?></td>
                            <td><?php echo $student->email ?></td>
                            <td style="<?php echo $text_align; ?>"><button data-email="<?php echo $student->email ?>" class="btn btn-primary btn-sm find-btn" style="<?php echo $width; ?>">Find</button></td>
                            <?php if ($user->isAdmin()) : ?>
                                <td><button data-email="<?php echo $student->email ?>" class="btn btn-warning btn-sm info-btn">Info</button></td>

                                <td><button data-email="<?php echo $student->email ?>" class="btn btn-sm payment-btn">Add</button></td>

                                <td><button data-email="<?php echo $student->email ?>" class="btn btn-danger btn-sm edit-btn">Edit</button></td>

                                <td><button data-email="<?php echo $student->email ?>" class="btn btn-dark btn-sm delete-btn">Delete</button></td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th><?php echo $totalStudents->id ?> students</th>
                        <th>&nbsp;</th>
                        <th class="show-all"><button data-email="" class="btn btn-info btn-sm find-btn">All payments</button></th>
                        <?php if ($user->isAdmin()) : ?>
                            <th><button class="btn btn-success btn-sm new-btn" data-bs-toggle="modal" data-bs-target="#newStudent">Add student</button></th>
                        <?php endif; ?>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="private-padding-left col-xxl-6">
            <h3>Payments</h3>
            <table id="payments-table" class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($payments as $payment) : ?>
                        <tr>
                            <td><?php echo $payment->name ?></td>
                            <td><?php echo $payment->email ?></td>
                            <td><?php echo $payment->amount ?> RSD</td>
                            <td><?php echo $payment->created_at ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total: <?php echo $totalPayments->totalAmount ?> RSD</th>
                        <th>&nbsp;</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- MODALS -->
<?php
require 'modals/add_modal.php';
require 'modals/info_modal.php';
require 'modals/payment_modal.php';
require 'modals/edit_modal.php';
require 'modals/delete_modal.php';
?>
<!-- MODALS END -->

<script src="js/DB.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<?php require 'partials/bottom.php' ?>