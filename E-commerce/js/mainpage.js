function toggleProducts() {
    const toggleInput = document.getElementById("voir-plus-toggle");
    const productsContainer = document.getElementById("products-container");
    const productContainer = document.getElementById("product-container");
    const producsContainer = document.getElementById("producs-container");
    const produtsContainer = document.getElementById("produts-container");

    if (toggleInput.checked) {
        productsContainer.style.display = "flex";
        productContainer.style.display = "flex";
        producsContainer.style.display = "flex";
        produtsContainer.style.display = "flex";
        toggleInput.style.display = "none"; 
        const voirPlusButton = document.querySelector(".voiri");
        voirPlusButton.innerHTML = ""; 
    } else {
        productsContainer.style.display = "none";
        productContainer.style.display = "none";
        producsContainer.style.display = "none";
        produtsContainer.style.display = "none";
    }
}
