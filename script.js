document.getElementById('studentForm').addEventListener('submit', function(e) {
    let isValid = true;

    // Name validation
    const name = document.getElementById('name').value.trim();
    if (name.length < 2) {
        document.getElementById('nameError').textContent = 'Name must be at least 2 characters';
        isValid = false;
    }

    // Email validation
    const email = document.getElementById('email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = 'Enter valid email address';
        isValid = false;
    }

    // DOB validation
    const dob = document.getElementById('dob').value;
    const today = new Date();
    const birthDate = new Date(dob);
    const age = today.getFullYear() - birthDate.getFullYear();
    if (age < 16 || age > 100) {
        document.getElementById('dobError').textContent = 'Age must be between 16-100 years';
        isValid = false;
    }

    // Phone validation
    const phone = document.getElementById('phone').value;
    if (!/^\d{10}$/.test(phone)) {
        document.getElementById('phoneError').textContent = 'Enter valid 10-digit phone number';
        isValid = false;
    }

    // ❌ If invalid → stop form
    if (!isValid) {
        e.preventDefault();
    }
    // ✅ If valid → allow normal submit to PHP
});
