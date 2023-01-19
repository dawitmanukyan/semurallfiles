const form = document.querySelector(".container-form-order");
const closeicn = document.querySelector(".close-icon");
const order = document.querySelector(".order-call");
form.style.display = 'none';

order.addEventListener("click", ()=> {
    form.style.display = 'block';
});

closeicn.addEventListener("click", () => {
    form.style.display = 'none';
});