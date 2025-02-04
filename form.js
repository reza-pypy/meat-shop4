
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // جلوگیری از ارسال فرم به صورت پیشفرض

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // در اینجا میتوانید اطلاعات را بررسی کنید و به سرور ارسال کنید
    // برای مثال، فقط یک پیام برای نمایش نام کاربری و رمز عبور
    const messageDiv = document.getElementById('message');
    messageDiv.innerHTML = `شما با نام کاربری "${username}" ثبتنام کردید.`;


    // میتوانید اطلاعات را به سرور ارسال کنید، مثلاً با استفاده از fetch یا XMLHttpRequest
});
