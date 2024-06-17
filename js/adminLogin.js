import { removeError, showError } from "./errors.js";

const form = document.forms.login;
const passwordButton = document.querySelector('.button--password');

(function() {
  const isErrorAccout = document.querySelector('.get-elems').dataset.error === "1";
  if (isErrorAccout) {
    const { Email, Password } = form;
    const errorSubText = document.querySelectorAll('.error-form--text');
    showError('Email or password is incorrect.', [Email, Password]);
    errorSubText.forEach((doc) => doc.classList.add('open-error'));
  }
})();

export function isEmail(email) {
  const re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
  return re.test(email);
}

function showPassword() {
  const { Password } = form;
  document.querySelector('.opened-pass').classList.toggle('show');
  document.querySelector('.closed-pass').classList.toggle('show');
  Password.type === 'password' ? Password.type = 'text' : Password.type = 'password';
}

function checkInputs(e) {
  const { Email, Password } = form;
  const errorSubText = document.querySelectorAll('.error-form--text');
  
  if (!Email.value.trim() || !Password.value.trim()) {
    e.preventDefault();
    showError('A-Ah! Check all fields.', [Email, Password]);
    errorSubText.forEach((doc) => {
      doc.classList.add('open-error');
      removeError(doc, [Email, Password]);
    })
  } else if (!isEmail(Email.value)) {
    e.preventDefault();
    showError('Email or password is incorrect.', [Email, Password]);
    errorSubText.forEach((doc) => {
      if (Password.value && doc.dataset.error === 'Password') {
        doc.classList.remove('open-error');
        removeError(doc, [Email, Password]);
      } else if (Email.value && doc.dataset.error === 'Email') {
        doc.innerHTML = "Incorrect email format. Correct format is ****@**.***";
        doc.classList.add('open-error');
      }
    });
  } else e.stopPropagation();
}

passwordButton.addEventListener('click', showPassword);
form.addEventListener('submit', checkInputs);
