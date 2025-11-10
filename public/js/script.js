/*registration form*/
document.getElementById('dob').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    document.getElementById('age').value = age;
});

const regPassword = document.getElementById('password');
const regConfirmPassword = document.getElementById('confirmPassword');
const feedback = document.getElementById('passwordFeedback');

regConfirmPassword.addEventListener('input', function() {
    if (regConfirmPassword.value !== regPassword.value) {
        feedback.classList.remove('d-none');
    } else {
        feedback.classList.add('d-none');
    }
});

document.querySelector('form').addEventListener('submit', function(e) {
    if (regConfirmPassword.value !== regPassword.value) {
        e.preventDefault();
        feedback.classList.remove('d-none');
        regConfirmPassword.focus();
    }
});

/* end registration form */

const password = document.querySelector('input[placeholder="Enter password"]');
const confirmPassword = document.querySelector('input[placeholder="Re-enter password"]');
const showPasswordCheck = document.getElementById('showPasswordCheck');

showPasswordCheck.addEventListener('change', function () {
    const type = this.checked ? 'text' : 'password';
    password.type = type;
    confirmPassword.type = type;
});

/* show pass login form */
const showPasswordCheckbox = document.getElementById('showPassword');
const passwordInput = document.getElementById('loginPassword');

showPasswordCheckbox.addEventListener('change', function () {
    passwordInput.type = this.checked ? 'text' : 'password';
});

/* barangay id form*/
document.getElementById('bidDob').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    document.getElementById('bidAge').value = age;
});

/* clearance form*/
document.getElementById('bcDob').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    document.getElementById('bcAge').value = age;
});

/* certificates form*/
document.getElementById('bcertDob').addEventListener('change', function () {
    const dob = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - dob.getFullYear();
    const m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    document.getElementById('bcertAge').value = age;
});
