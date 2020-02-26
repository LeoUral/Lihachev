"use strict"

// let btnSend = document.querySelector('.btn_send');
// btnSend.addEventListener('click', function (event) {
//     event.preventDefault();
// });

let inputName = document.querySelector('.input_name');
inputName.addEventListener('blur', function (ev) {
    if (inputName.value.length < 3 || inputName.value.length > 50) {
        inputName.style.background = 'red';
        inputName.focus();
    } else if (inputName.value.length >= 3 && inputName.value.length <= 50) {
        inputName.style.background = '#353945';
    }
});

