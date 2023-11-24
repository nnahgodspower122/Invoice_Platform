document.addEventListener("DOMContentLoaded", function () {
  const addItemButton = document.getElementById("add_item");
  const itemsContainer = document.getElementById("items");
  const subtotalDisplay = document.getElementById("subtotal");
  const secondSubtotalDisplay = document.getElementById("second_subtotal");



  // Function to calculate the subtotal for a given item row
  function calculateItemSubtotal(itemRow) {
      const amount = parseFloat(itemRow.querySelector(".amount").value) || 0;
      const discountPercentage = parseFloat(itemRow.querySelector(".discount").value) || 0;
      // const taxPercentage = parseFloat(itemRow.querySelector('.tax')?.value) || 0;
      const taxInput = document.querySelector("#invoice_items_attributes_0_tax");
      const taxPercentage = parseFloat(taxInput.value) || 0; // Tax as a percentage

      const discount = (amount * discountPercentage) / 100;
      const tax = (amount * taxPercentage) / 100;

      return amount - discount + tax;
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

  

  // Initial setup and subtotal update
  updateSubtotal();
});






// itemRow.querySelector('.tax')



// this returns null and we're trying to read a value from this node which is throwing an error



// const taxPercentage = parseFloat(itemRow.querySelector('.tax').value) || 0



// So I added a null check, and it worked



// const taxPercentage = parseFloat(itemRow.querySelector('.tax')?.value) || 0

// This line is inside the "calculateItemSubtotal" function






        $(document).ready(function () {
            // Change currency when the dropdown selection changes
            $("#currencyDropdown").change(function () {
              const selectedCurrency = $(this).val();
              let currencySymbol = "";

              // Define currency symbols for each currency code
              switch (selectedCurrency) {
                case "AED":
                  currencySymbol = "د.إ";
                  break;
                case "AFN":
                  currencySymbol = "؋";
                  break;
                case "ALL":
                  currencySymbol = "L";
                  break;
                case "AMD":
                  currencySymbol = "֏";
                  break;
                case "ANG":
                  currencySymbol = "ƒ";
                  break;
                case "AOA":
                  currencySymbol = "Kz";
                  break;
                case "ARS":
                  currencySymbol = "$";
                  break;
                case "AUD":
                  currencySymbol = "$";
                  break;
                case "AWG":
                  currencySymbol = "ƒ";
                  break;
                case "AZN":
                  currencySymbol = "₼";
                  break;
                case "BAM":
                  currencySymbol = "KM";
                  break;
                case "BBD":
                  currencySymbol = "Bds$";
                  break;
                case "BDT":
                  currencySymbol = "৳";
                  break;
                case "BGN":
                  currencySymbol = "лв";
                  break;
                case "BHD":
                  currencySymbol = "ب.د";
                  break;
                case "BIF":
                  currencySymbol = "FBu";
                  break;
                case "BMD":
                  currencySymbol = "$";
                  break;
                case "BND":
                  currencySymbol = "$";
                  break;
                case "BOB":
                  currencySymbol = "Bs.";
                  break;
                case "BRL":
                  currencySymbol = "R$";
                  break;
                case "BSD":
                  currencySymbol = "$";
                  break;
                case "BTN":
                  currencySymbol = "Nu.";
                  break;
                case "BWP":
                  currencySymbol = "P";
                  break;
                case "BYN":
                  currencySymbol = "Br";
                  break;
                case "BZD":
                  currencySymbol = "BZ$";
                  break;
                case "CAD":
                  currencySymbol = "$";
                  break;
                case "CDF":
                  currencySymbol = "FC";
                  break;
                case "CHF":
                  currencySymbol = "Fr.";
                  break;
                case "CLP":
                  currencySymbol = "$";
                  break;
                case "CNY":
                  currencySymbol = "¥";
                  break;
                case "COP":
                  currencySymbol = "$";
                  break;
                case "CRC":
                  currencySymbol = "₡";
                  break;
                case "CUP":
                  currencySymbol = "$";
                  break;
                case "CVE":
                  currencySymbol = "$";
                  break;
                case "CZK":
                  currencySymbol = "Kč";
                  break;
                case "DJF":
                  currencySymbol = "Fdj";
                  break;
                case "DKK":
                  currencySymbol = "kr";
                  break;
                case "DOP":
                  currencySymbol = "RD$";
                  break;
                case "DZD":
                  currencySymbol = "د.ج";
                  break;
                case "EGP":
                  currencySymbol = "£";
                  break;
                case "ERN":
                  currencySymbol = "Nfk";
                  break;
                case "ETB":
                  currencySymbol = "Br";
                  break;
                case "EUR":
                  currencySymbol = "€";
                  break;
                case "FJD":
                  currencySymbol = "FJ$";
                  break;
                case "FKP":
                  currencySymbol = "£";
                  break;
                case "GBP":
                  currencySymbol = "£";
                  break;
                case "GEL":
                  currencySymbol = "₾";
                  break;
                case "GGP":
                  currencySymbol = "£";
                  break;
                case "GHS":
                  currencySymbol = "₵";
                  break;
                case "GIP":
                  currencySymbol = "£";
                  break;
                case "GMD":
                  currencySymbol = "D";
                  break;
                case "GNF":
                  currencySymbol = "FG";
                  break;
                case "GTQ":
                  currencySymbol = "Q";
                  break;
                case "GYD":
                  currencySymbol = "$";
                  break;
                case "HKD":
                  currencySymbol = "$";
                  break;
                case "HNL":
                  currencySymbol = "L";
                  break;
                case "HRK":
                  currencySymbol = "kn";
                  break;
                case "HTG":
                  currencySymbol = "G";
                  break;
                case "HUF":
                  currencySymbol = "Ft";
                  break;
                case "IDR":
                  currencySymbol = "Rp";
                  break;
                case "ILS":
                  currencySymbol = "₪";
                  break;
                case "IMP":
                  currencySymbol = "£";
                  break;
                case "INR":
                  currencySymbol = "₹";
                  break;
                case "IQD":
                  currencySymbol = "ع.د";
                  break;
                case "IRR":
                  currencySymbol = "﷼";
                  break;
                case "ISK":
                  currencySymbol = "kr";
                  break;
                case "JEP":
                  currencySymbol = "£";
                  break;
                case "JMD":
                  currencySymbol = "J$";
                  break;
                case "JOD":
                  currencySymbol = "د.ا";
                  break;
                case "JPY":
                  currencySymbol = "¥";
                  break;
                case "KES":
                  currencySymbol = "Ksh";
                  break;
                case "KGS":
                  currencySymbol = "с";
                  break;
                case "KHR":
                  currencySymbol = "៛";
                  break;
                case "KID":
                  currencySymbol = "$";
                  break;
                case "KRW":
                  currencySymbol = "₩";
                  break;
                case "KWD":
                  currencySymbol = "د.ك";
                  break;
                case "KYD":
                  currencySymbol = "$";
                  break;
                case "KZT":
                  currencySymbol = "₸";
                  break;
                case "LAK":
                  currencySymbol = "₭";
                  break;
                case "LBP":
                  currencySymbol = "ل.ل";
                  break;
                case "LKR":
                  currencySymbol = "₨";
                  break;
                case "LRD":
                  currencySymbol = "$";
                  break;
                case "LSL":
                  currencySymbol = "M";
                  break;
                case "LYD":
                  currencySymbol = "ل.د";
                  break;
                case "MAD":
                  currencySymbol = "د.م.";
                  break;
                case "MDL":
                  currencySymbol = "lei";
                  break;
                case "MGA":
                  currencySymbol = "Ar";
                  break;
                case "MKD":
                  currencySymbol = "ден";
                  break;
                case "MMK":
                  currencySymbol = "K";
                  break;
                case "MNT":
                  currencySymbol = "₮";
                  break;
                case "MOP":
                  currencySymbol = "MOP$";
                  break;
                case "MRU":
                  currencySymbol = "UM";
                  break;
                case "MUR":
                  currencySymbol = "₨";
                  break;
                case "MVR":
                  currencySymbol = "Rf";
                  break;
                case "MWK":
                  currencySymbol = "MK";
                  break;
                case "MXN":
                  currencySymbol = "$";
                  break;
                case "MYR":
                  currencySymbol = "RM";
                  break;
                case "MZN":
                  currencySymbol = "MT";
                  break;
                case "NAD":
                  currencySymbol = "$";
                  break;
                case "NGN":
                  currencySymbol = "₦";
                  break;
                case "NIO":
                  currencySymbol = "C$";
                  break;
                case "NOK":
                  currencySymbol = "kr";
                  break;
                case "NPR":
                  currencySymbol = "₨";
                  break;
                case "NZD":
                  currencySymbol = "$";
                  break;
                case "OMR":
                  currencySymbol = "﷼";
                  break;
                case "PAB":
                  currencySymbol = "B/.";
                  break;
                case "PEN":
                  currencySymbol = "S/";
                  break;
                case "PGK":
                  currencySymbol = "K";
                  break;
                case "PHP":
                  currencySymbol = "₱";
                  break;
                case "PKR":
                  currencySymbol = "₨";
                  break;
                case "PLN":
                  currencySymbol = "zł";
                  break;
                case "PYG":
                  currencySymbol = "₲";
                  break;
                case "QAR":
                  currencySymbol = "ر.ق";
                  break;
                case "RON":
                  currencySymbol = "lei";
                  break;
                case "RSD":
                  currencySymbol = "дин.";
                  break;
                case "RUB":
                  currencySymbol = "₽";
                  break;
                case "RWF":
                  currencySymbol = "FRw";
                  break;
                case "SAR":
                  currencySymbol = "ر.س";
                  break;
                case "SBD":
                  currencySymbol = "SI$";
                  break;
                case "SCR":
                  currencySymbol = "SR";
                  break;
                case "SDG":
                  currencySymbol = "£";
                  break;
                case "SEK":
                  currencySymbol = "kr";
                  break;
                case "SGD":
                  currencySymbol = "$";
                  break;
                case "SHP":
                  currencySymbol = "£";
                  break;
                case "SLL":
                  currencySymbol = "Le";
                  break;
                case "SOS":
                  currencySymbol = "Sh";
                  break;
                case "SRD":
                  currencySymbol = "$";
                  break;
                case "SSP":
                  currencySymbol = "£";
                  break;
                case "STN":
                  currencySymbol = "Db";
                  break;
                case "SYP":
                  currencySymbol = "ل.س";
                  break;
                case "SZL":
                  currencySymbol = "E";
                  break;
                case "THB":
                  currencySymbol = "฿";
                  break;
                case "TJS":
                  currencySymbol = "ЅМ";
                  break;
                case "TMT":
                  currencySymbol = "m";
                  break;
                case "TND":
                  currencySymbol = "د.ت";
                  break;
                case "TOP":
                  currencySymbol = "T$";
                  break;
                case "TRY":
                  currencySymbol = "₺";
                  break;
                case "TTD":
                  currencySymbol = "TT$";
                  break;
                case "TVD":
                  currencySymbol = "$";
                  break;
                case "TWD":
                  currencySymbol = "NT$";
                  break;
                case "TZS":
                  currencySymbol = "Sh";
                  break;
                case "UAH":
                  currencySymbol = "₴";
                  break;
                case "UGX":
                  currencySymbol = "USh";
                  break;
                case "USD":
                  currencySymbol = "$";
                  break;
                case "UYU":
                  currencySymbol = "$U";
                  break;
                case "UZS":
                  currencySymbol = "лв";
                  break;
                case "VES":
                  currencySymbol = "Bs";
                  break;
                case "VND":
                  currencySymbol = "₫";
                  break;
                case "VUV":
                  currencySymbol = "VT";
                  break;
                case "WST":
                  currencySymbol = "WS$";
                  break;
                case "XAF":
                  currencySymbol = "FCFA";
                  break;
                case "XCD":
                  currencySymbol = "$";
                  break;
                case "XOF":
                  currencySymbol = "CFA";
                  break;
                case "XPF":
                  currencySymbol = "₣";
                  break;
                case "YER":
                  currencySymbol = "﷼";
                  break;
                case "ZAR":
                  currencySymbol = "R";
                  break;
                case "ZMW":
                  currencySymbol = "ZK";
                  break;
                case "ZWL":
                  currencySymbol = "Z$";
                  break;
                // Add more cases for other currencies here
              }

              // Update the currency symbol and hidden fields
              $("#invoice_currency").val(selectedCurrency);
              $("#currencySymbol").text(currencySymbol);
            });
          });












          // JavaScript to handle file selection and update the button content
              
                  function openFileInput() {
                      // Trigger the file input element when the button is clicked
                      document.getElementById('signatureLogoInput').click();
                  }

                  // Function to handle file selection and update the button content
                  function handleFileSelect(event) {
                      const file = event.target.files[0];
                      const invoiceLogoId = document.getElementById('invoice_logo_id');
                      const logoPreview = document.getElementById('logoPreview');

                      if (file) {
                          // Store the selected file in the hidden input
                          invoiceLogoId.value = file.name;
                          // Display the uploaded logo in place of the image
                          const reader = new FileReader();
                          reader.onload = function(e) {
                              const logoImage = new Image();
                              logoImage.src = e.target.result;
                              logoImage.width = 36;
                              logoImage.height = 36;

                              // Replace the content of the logoPreview div with the uploaded image
                              logoPreview.innerHTML = '';
                              logoPreview.appendChild(logoImage);
                          };
                          reader.readAsDataURL(file);
                      }
                  }
                  // Add an event listener to the file input element
                  const signatureLogoInput = document.getElementById('signatureLogoInput');
                  signatureLogoInput.addEventListener('change', handleFileSelect);
            