document.addEventListener("DOMContentLoaded", function () {
  const addItemButton = document.getElementById("add_item");
  const itemsContainer = document.getElementById("items");
  const subtotalDisplay = document.getElementById("subtotal");
  const secondSubtotalDisplay = document.getElementById("second_subtotal");

  // Function to calculate the subtotal for a given item row
  function calculateItemSubtotal(itemRow) {
      const amount = parseFloat(itemRow.querySelector(".amount").value) || 0;
      const discountPercentage = parseFloat(itemRow.querySelector(".discount").value) || 0;
      const taxPercentage = parseFloat(itemRow.querySelector(".tax").value) || 0;

      const discount = (amount * discountPercentage) / 100;
      const tax = (amount * taxPercentage) / 100;

      return amount - discount + tax;
  }

  // Function to update the overall subtotal
  function updateSubtotal() {
      const itemRows = itemsContainer.querySelectorAll(".row");
      let totalSubtotal = 0;

      itemRows.forEach(itemRow => {
          totalSubtotal += calculateItemSubtotal(itemRow);
      });

      const formattedSubtotal = totalSubtotal.toFixed(2);
      subtotalDisplay.textContent = formattedSubtotal;
      secondSubtotalDisplay.textContent = formattedSubtotal;
  }

  // Function to add a new item row
  function addNewItem() {
      const newItemRow = document.querySelector("#row_item_212952714").cloneNode(true);

      // Clear values
      newItemRow.querySelectorAll("input").forEach(input => {
          input.value = "0.00";
      });

      // Add event listener for the "Cancel" button
      newItemRow.querySelector(".remove_fields").addEventListener("click", function () {
          itemsContainer.removeChild(newItemRow);
          updateSubtotal();
      });

      itemsContainer.appendChild(newItemRow);

      // Add event listeners to the new item inputs and trigger updates as you type
      newItemRow.querySelectorAll("input").forEach(input => {
          input.addEventListener("input", updateSubtotal);
      });

      // Manually trigger the input event for the first item's input
      if (itemsContainer.childElementCount === 2) {
          newItemRow.querySelector(".amount").dispatchEvent(new Event('input'));
      }

      updateSubtotal();
  }

  // Add event listener to the "Add New Item" button
  addItemButton.addEventListener("click", addNewItem);

  // Initial setup and subtotal update
  updateSubtotal();
});



