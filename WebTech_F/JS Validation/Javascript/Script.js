const unitPrice = 1000;

const quantityInput = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");

function updateTotalPrice() {
  let quantity = parseInt(quantityInput.value) || 0;

  if (quantity < 0) {
    quantity = 0;
    quantityInput.value = 0;
    alert("Quantity cannot be negative. It has been reset to 0.");
  }

  const total = unitPrice * quantity;
  totalPriceInput.value = total;

  if (total > 1000) {
    alert("Congratulations! You are now eligible for a gift coupon.");
  }
}

quantityInput.addEventListener("input", updateTotalPrice);