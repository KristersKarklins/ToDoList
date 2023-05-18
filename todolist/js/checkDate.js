let creationDates = document.querySelectorAll("#creation-date");
let dueDates = document.querySelectorAll("#due-date");
let stage = document.getElementById("stage");
let today = new Date();

console.log(dueDates);

for (let i = 0; i < creationDates.length; i++) {
  let dueDate = new Date(dueDates[i].innerHTML);

  if (dueDate < today) {
    dueDates[i].parentNode.parentNode.classList.add("expired");
    stage.innerHTML = "Expired";
  }
}
