function runDelete(elem) {
  let form = document.createElement('form');
  form.action = '/php/delete.php';
  form.method = 'POST';

  var input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'row_id';
  input.value = elem.parentNode.id;
  console.log(elem.parentNode.id);

  form.appendChild(input);
  document.body.appendChild(form);

  form.submit();
}
function runComplete(elem) {
  let form = document.createElement('form');
  form.action = '/php/complete.php';
  form.method = 'POST';

  var input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'row_id';
  input.value = elem.parentNode.parentNode.id;
  console.log(elem.parentNode.parentNode.id);

  form.appendChild(input);
  document.body.appendChild(form);

  form.submit();
}
