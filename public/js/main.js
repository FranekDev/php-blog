// const getDomElements = (...elements) => {
//     // if (elements.length === 1) return document.querySelector(elements);
//     // const domElements = [];
//     //
//     // elements.forEach(element => {
//     //     domElements.push(document.querySelectorAll(element));
//     // });
//     //
//     // return domElements;
//     return elements.map(element => document.querySelectorAll(element));
// };

const getDomElements = (...elements) => elements.map(element => document.querySelectorAll(element));


const togglePassword = (input, img) => {
    if (input.type === 'password') {
        input.type = 'text';
        img.src = '/img/closedEye.svg';
    } else {
        input.type = 'password';
        img.src = '/img/eye.svg';
    }
};

const [eyes, passwords] = getDomElements('.eye', 'input[type=password]');

eyes.forEach((eye, index) => {
    eye.addEventListener('click', () => {
        togglePassword(passwords[index], eye);
    });
});
