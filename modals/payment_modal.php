<!-- ADD PAYMENT MODAL -->
<div class="modal fade" id="addPayment" tabindex="-1" aria-labelledby="addPaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title add-payment-modal-title" id="addPaymentLabel">Add payment for student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add_payment.php" method="post">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <input type="hidden" class="add-payment-input-id" name="id" value="">
                            <input type="number" class="form-control add-payment-input" name="payment" placeholder="Type amount to add" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="add-payment">Add payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>