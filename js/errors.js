export function showError(error, elems) {
  const errForm = document.querySelector('.form_errors');
  errForm.classList.add('open-error');
  errForm.lastElementChild.textContent = error;
  elems.forEach(elem => {
    elem.style.borderBottomColor = "#E86961";
    if (elem.id === 'Content') elem.style.border = '1px solid #E86961';
  });
}

export function removeError(doc, elems) {
  elems.forEach(elem => {
    if (elem.value.trim() && doc.dataset.error === elem.id) {
      doc.classList.remove('open-error');
      elem.style.borderBottomColor = "rgb(234, 234, 234)";
      if (elem.id === 'Content') elem.style.border = '1px solid rgb(234, 234, 234)';
    }
  });
}
