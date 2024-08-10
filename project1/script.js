let table = new DataTable("#crud-table");

// Get the modal
let modal = document.getElementById("editModal");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Handle edit button click
document.querySelectorAll(".edit").forEach((button) => {
  button.addEventListener("click", function () {
    let name = this.getAttribute("data-name");
    let email = this.getAttribute("data-email");
    let id = this.getAttribute("data-id");

    // Populate modal inputs
    document.getElementById("modalNameInput").value = name;
    document.getElementById("modalEmailInput").value = email;
    document.getElementById("recordId").value = id;

    // Show the modal
    modal.style.display = "block";
  });
});

// Add logic here to handle saving changes when the "Save Changes" button is clicked
document.getElementById("saveChanges").addEventListener("click", function () {
  let name = document.getElementById("modalNameInput").value;
  let email = document.getElementById("modalEmailInput").value;
  let id = document.getElementById("recordId").value;

  // You can handle the submission here or by default form submission
  console.log("Saving changes:", {
    id,
    name,
    email,
  });
  modal.style.display = "none";
});
