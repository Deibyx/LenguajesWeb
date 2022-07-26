// UI variables
const subTotalUI = document.getElementById('sub-total');
const discountUI = document.getElementById('discount');
const taxUI = document.getElementById('tax');
const grandTotalUI = document.getElementById('grand-total');

const appendAreaUI = document.querySelector('.append-area');
const addButtonUI = document.getElementById('add');
const cancelButtonUI = document.getElementById('btn-reset');

// Program variables
const INITIAL_TABLE_ROWS = 1;

// Dynamically add 5 rows when DOM content loaded
document.addEventListener('DOMContentLoaded', () => {
  for (let i = 0; i < INITIAL_TABLE_ROWS; i++) {
    addButtonUI.click();
  }
});

// Fire event oninput of TAX and DISCOUNT fields
//taxUI.addEventListener('input', setGrandTotal);
//discountUI.addEventListener('input', setGrandTotal);

// Fire event when CANCEL button clicked
cancelButtonUI.addEventListener('click', () => {
  if (confirm("Do you want to reset the form?")) {
    location.reload();
  }
});

// Append rows to table
addButtonUI.addEventListener('click', () => {
  let counter = parseInt(document.getElementById('counter').value);
  appendAreaUI.insertAdjacentHTML('beforeend', `
    <tr id="row-${counter}">
      <td><button type="button" id="${counter}" class="btn btn-danger btn-sm remove"><i id="${counter}" class="fa fa-minus-circle"></i></button></td>
      <td><input type="text" id="product-${counter}" class="form-control form-control-sm" name="product[]"></td><td><input type="text" id="unit-${counter}" class="form-control form-control-sm" name="unit[]"</td>
      <td><input type="text" id="product-${counter}" class="form-control form-control-sm" name="product[]"></td><td><input type="text" id="unit-${counter}" class="form-control form-control-sm" name="unit[]"</td>
      
    </tr>
  `);

  // Update rows counter value
  counter++;
  document.getElementById('counter').value = counter;
});

// Delete table rows
document.addEventListener('click', (e) => {
  let elClassList = e.target.classList;
  if (elClassList.contains('fa-minus-circle') || elClassList.contains('remove')) {
    let removeButtonID = e.target.id;
    document.getElementById('row-' + removeButtonID).remove();

    let tableRows = document.querySelectorAll('.append-area tr').length;
    for (let i = 0; i < tableRows; i++) {
      document.querySelectorAll('.append-area tr')[i].id = 'row-' + i;
      document.querySelectorAll('.append-area tr#row-' + i + ' td input')[0].id = 'product-' + i;
      document.querySelectorAll('.append-area tr#row-' + i + ' td input')[1].id = 'unit-' + i;

    }

    document.getElementById('counter').value = tableRows;
    setTotal();
    setGrandTotal();
  }
});

// Calculate row TOTAL
function setTotal() {
  let tableRows = document.querySelectorAll('tbody.append-area tr').length;

  let subTotal = 0;
  for (let i = 0; i < tableRows; i++) {
    let quantity = Number(document.getElementById("quantity-" + i).value);
    let price = Number(document.getElementById("price-" + i).value);

    let rowTotal = 0;
    if (document.getElementById("quantity-" + i).value == "" || document.getElementById("price-" + i).value == "") {
      document.getElementById("total-" + i).value = 0;
    } else {
      rowTotal = document.getElementById("total-" + i).value = quantity * price;
    }
    subTotal += rowTotal;
  }

  // Set TOTAL & GRAND TOTAL values
  subTotalUI.value = subTotal;
  grandTotalUI.value = subTotal;
}

// Calculate DISCOUNT & TAX
//function setGrandTotal() {
//  let subTotal = subTotalUI.value;
//  let discount = discountUI.value;
 // let tax = taxUI.value;

 // grandTotalUI.value = subTotal - discount;
 // if (tax != 0) {
//let taxValue = (grandTotalUI.value * tax) / 100;
 //   grandTotalUI.value = Number(grandTotalUI.value) + taxValue;
//  }
//}