let eyes = document.querySelectorAll('.eye');
let passwords = document.querySelectorAll('input[type=password]');

const togglePassword = (input, img) => {
    if (input.type === 'password') {
        input.type = 'text';
        img.src = '/img/closedEye.svg';
    } else {
        input.type = 'password';
        img.src = '/img/eye.svg';
    }
};

eyes.forEach((eye, index) => {
    eyes = document.querySelectorAll('.eye');
    passwords = document.querySelectorAll('input[type=password]');
    eye.addEventListener('click', () => {
        togglePassword(passwords[index], eye);
    });
});
