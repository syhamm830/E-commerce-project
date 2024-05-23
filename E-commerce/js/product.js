function addToCart(productName, productDescription, productPrice, productImage) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const product = {
        name: productName,
        description: productDescription,
        price: productPrice,
        image: productImage  
    };

    cart.push(product);

    localStorage.setItem('cart', JSON.stringify(cart));

    alert(`Le produit "${productName}" a été ajouté au panier !`);

    window.location.href = '../pages/panier.php';
}


  
    function displayCart() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartBody = document.getElementById('cart-body');
    
        cartBody.innerHTML = '';
    
        cart.forEach(product => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td style="display: flex; flex-direction:row; align-items: center;">
                    <img src="${product.image}" style="width: 60px;">
                    <span>${product.name}</span>
                </td>
                <td>${product.description}</td>
                <td>${product.price}dt</td>
            `;
            cartBody.appendChild(row);
        });

    
    const totalPrice = cart.reduce((total, product) => total + product.price, 0);
    const totalElement = document.getElementById('total-price');
    totalElement.textContent = `${totalPrice}dt`;
}

document.addEventListener('DOMContentLoaded', () => {
    displayCart();
});

function clearCart() {
    localStorage.removeItem('cart'); 
    alert('Le panier a été vidé !');
    displayCart(); 
}