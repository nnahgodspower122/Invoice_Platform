// Wait for the DOM to be fully loaded before binding the event
document.addEventListener("DOMContentLoaded", function () {
  // Bind the keyup event to the input fields for amount, discount, and tax
  const amountInput = document.querySelector("#invoice_items_attributes_0_amount");
  const discountInput = document.querySelector("#invoice_items_attributes_0_discount");
  const taxInput = document.querySelector("#invoice_items_attributes_0_tax");
  const subtotalDisplay = document.querySelector("#subtotal");

  amountInput.addEventListener("keyup", calculateSubtotal);
  discountInput.addEventListener("keyup", calculateSubtotal);
  taxInput.addEventListener("keyup", calculateSubtotal);

  // Initial calculation
  calculateSubtotal();

  function calculateSubtotal() {
    const amount = parseFloat(amountInput.value) || 0;
    const discount = parseFloat(discountInput.value) || 0;
    const taxRate = parseFloat(taxInput.value) || 0;

    // Calculate subtotal
    const subtotal = amount - discount + (amount - discount) * (taxRate / 100);

    // Display the calculated subtotal with 2 decimal places
    subtotalDisplay.textContent = subtotal.toFixed(2);
  }
});





//New 

document.addEventListener("DOMContentLoaded", function () {
  // Bind the keyup event to the input fields for amount, discount, and tax
  const amountInput = document.querySelector("#invoice_items_attributes_0_amount");
  const discountInput = document.querySelector("#invoice_items_attributes_0_discount");
  const taxInput = document.querySelector("#invoice_items_attributes_0_tax");
  const subtotalDisplay = document.querySelector("#subtotal");

  amountInput.addEventListener("keyup", calculateSubtotal);
  discountInput.addEventListener("keyup", calculateSubtotal);
  taxInput.addEventListener("keyup", calculateSubtotal);

  // Initial calculation
  calculateSubtotal();

  function calculateSubtotal() {
    const amount = parseFloat(amountInput.value) || 0;
    const discountPercentage = parseFloat(discountInput.value) || 0; // Discount as a percentage
    const taxPercentage = parseFloat(taxInput.value) || 0; // Tax as a percentage

    // Calculate the discount amount as a percentage of the amount
    const discount = (amount * discountPercentage) / 100;

    // Calculate the tax amount as a percentage of the amount
    const tax = (amount * taxPercentage) / 100;

    // Calculate subtotal
    const subtotal = amount - discount + tax;

    // Display the calculated subtotal with 2 decimal places
    subtotalDisplay.textContent = subtotal.toFixed(2);
  }
});