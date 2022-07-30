window.onload = function () {
    DB.getData().then(res => {
        controlPage(res);
    });
}

let inputSearch = document.querySelector('[type=search]');
let paymentsTableBody = document.querySelector('#payments-table tbody');
let paymentsTableFoot = document.querySelector('#payments-table tfoot');
let findBtns = document.querySelectorAll('.find-btn');

function controlPage(payments) {
    let pays = [...payments];

    inputSearch.addEventListener('input', function () {
        let searchTerm = this.value.toLowerCase();
        let filteredByEmail = pays.filter(el => {
            return el.email.toLowerCase().includes(searchTerm);
        });

        let searchTermByName = this.value.toLowerCase();
        let filteredByName = pays.filter(el => {
            return el.name.toLowerCase().includes(searchTermByName);
        });

        refreshPayments(filteredByEmail, filteredByName);

    });

    for (let i = 0; i < findBtns.length; i++) {
        findBtns[i].addEventListener('click', function () {
            let searchTerm = findBtns[i].getAttribute('data-email');
            let filteredByEmail = pays.filter(el => {
                return el.email.includes(searchTerm);
            });

            filteredByBoth(filteredByEmail);
        });
    }

    // * FILTERED BY EMAIL AND NAME
    function refreshPayments(filteredByEmail, filteredByName) {
        if (filteredByEmail.length > 0) {
            filteredByBoth(filteredByEmail);
        } else if (filteredByName.length > 0) {
            filteredByBoth(filteredByName);
        } else {
            filteredByBoth([]);
        }
    }
}

function filteredByBoth(filtered) {
    let text = '';
    let totalPaymentsAmount = 0;

    filtered.forEach(function (payment) {
        text += `<tr>
                            <td>${payment.name}</td>
                            <td>${payment.email}</td>
                            <td>${payment.amount} RSD</td>
                            <td>${payment.created_at}</td>
                        </tr>`.trim();
        totalPaymentsAmount += parseInt(payment.amount);
    });

    paymentsTableBody.innerHTML = text;
    paymentsTableFoot.innerHTML = `<tr><th>Total: ${totalPaymentsAmount} RSD</th><th>&nbsp;</th></tr>`.trim();
}



// * INFO BUTTON MODAL POPUP
const infoModal = new bootstrap.Modal('#infoStudent');
let infoModalTitle = document.querySelector('.info-modal-name');
let infoModalBody = document.querySelector('.info-modal-body');
let infoBtns = document.querySelectorAll('.info-btn');

for (let i = 0; i < infoBtns.length; i++) {
    infoBtns[i].onclick = function () {
        let email = this.getAttribute('data-email');

        DB.findStudent(email).then(selectedStudent => {
            infoModalTitle.innerHTML = "Informations about student " + selectedStudent.name;
            if (selectedStudent.info !== null && selectedStudent.info !== '') {
                infoModalBody.innerHTML = selectedStudent.info;
            } else {
                infoModalBody.innerHTML = 'No additional informations about this student.';
            }
            infoModal.show();
        });

    }
}


// ? EDIT BUTTON MODAL POPUP
const editModal = new bootstrap.Modal('#editStudent');
let editBtns = document.querySelectorAll('.edit-btn');
let editModalTitle = document.querySelector('.edit-modal-title');
let editModalInputName = document.querySelector('.edit-input-name');
let editModalInputEmail = document.querySelector('.edit-input-email');
let editModalInputInfo = document.querySelector('.edit-input-info');
let editModalInputID = document.querySelector('.edit-input-id');
let saveEditBtn = document.querySelector('.save-edit');

for (let i = 0; i < editBtns.length; i++) {
    editBtns[i].onclick = function () {
        let email = this.getAttribute('data-email');

        DB.findStudent(email).then(selectedStudent => {
            editModalTitle.innerHTML = `Edit form for student ${selectedStudent.name}`;
            editModalInputID.value = selectedStudent.id
            editModalInputName.value = selectedStudent.name;
            editModalInputEmail.value = selectedStudent.email;
            editModalInputInfo.value = selectedStudent.info;

            editModal.show();
        });
    }
}


// * DELETE BUTTON MODAL POPUP
const deleteModal = new bootstrap.Modal('#deleteStudent');
let deleteBtns = document.querySelectorAll('.delete-btn');
let deleteModalTitle = document.querySelector('.delete-modal-title');
let deleteModalEmail = document.querySelector('.delete-modal-email');

for (let i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].onclick = function () {
        let email = this.getAttribute('data-email');

        DB.findStudent(email).then(selectedStudent => {
            deleteModalTitle.innerHTML = `Are you sure you want delete student ${selectedStudent.name}?`;
            deleteModalEmail.value = selectedStudent.email;

            deleteModal.show();
        });
    }
}


// ? ADD PAYMENT BUTTON MODAL POPUP
const addPaymentModal = new bootstrap.Modal('#addPayment');
let paymentBtns = document.querySelectorAll('.payment-btn');
let paymentModalTitle = document.querySelector('.add-payment-modal-title');
let paymentModalID = document.querySelector('.add-payment-input-id');
let paymentModalInput = document.querySelector('.add-payment-input');

for (let i = 0; i < paymentBtns.length; i++) {
    paymentBtns[i].onclick = function () {
        let email = this.getAttribute('data-email');

        DB.findStudent(email).then(selectedStudent => {
            paymentModalTitle.innerHTML = `Add payment for student ${selectedStudent.name}`;
            paymentModalID.value = selectedStudent.id;

            addPaymentModal.show();
        });
    }
}