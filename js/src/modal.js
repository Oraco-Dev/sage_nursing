document.addEventListener("DOMContentLoaded", function () {
  // When a staff modal button is clicked
  var staffButtons = document.querySelectorAll(".staff-modal-button");

  staffButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      // Get the staff member's post ID
      var postId = button.getAttribute("data-post-id");

      // Use Fetch API to retrieve custom field values for the staff member
      fetch(ajax_object.ajaxurl, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "action=get_staff_member_fields&post_id=" + postId,
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          console.log(data);
          // Display the custom field values in the modal
          showModal(data);
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });
  });

  //   Function to display the modal with custom field values
  function showModal(data) {
    // Get a reference to the modal element
    var modal = document.getElementById("custom-modal");

    // Get a reference to the close button inside the modal
    var closeButton = document.querySelector(".close-modal-button");

    // Populate the modal content with custom field values

    document
      .querySelector(".modal__content-staffimg")
      .setAttribute("src", data.image);
    document
      .querySelector(".modal__content-link")
      .setAttribute("href", data.staffLinkedin);
    document.querySelector(".modal__content-stafftitle").textContent =
      data.name;
    document.querySelector(".modal__content-staffrole").textContent = data.role;
    document.querySelector(".modal__content-staffcode").textContent =
      data.roleCode;
    document.querySelector(".modal__content-staffabout").textContent =
      data.staffAbout.slice(0, 400) + "...";
    document.querySelector(".modal__content-staffdrink").textContent =
      data.staffDrink;
    document.querySelector(".modal__content-staffmovie").textContent =
      data.staffMovie;
    document.querySelector(".modal__content-staffbusiness").textContent =
      data.staffBusiness;
    document.querySelector(".modal__content-stafftreat").textContent =
      data.staffTreat;

    // Show the modal
    modal.style.display = "block";

    // Add an event listener to close the modal when the close button is clicked
    closeButton.addEventListener("click", function () {
      modal.style.display = "none";
    });
  }
});
