//var pizze= ['Pizza Vesuvio','40kn','Images/Vesuvio.jpg','Pizza Slavonska','45kn','Images/Slavonska.jpg']

// localStorage.removeItem('pizze')
// localStorage.clear()
if ("pizze" in localStorage) {
    var retrievedData = localStorage.getItem("pizze")
    var pizze = JSON.parse(retrievedData)
    var u=pizze.length
    for (var i=0; i<(u-1);i+=3){
        var title=pizze[i]
        var price = pizze[i+1]
        var imageSrc=pizze[i+2]
        addItemToCart(title, price, imageSrc)
        updateCartTotal()
    }
} else {
    var pizze=[]
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
//     alert('Hvala na narudžbi!')
//     var cartItems = document.getElementsByClassName('cart-items')[0]
//     while (cartItems.hasChildNodes()) {
//         cartItems.removeChild(cartItems.firstChild)
//     }
    
    // var firstname=document.getElementById("fname")
    // var lastname=document.getElementById("lname")
    // var email=document.getElementById("email")
    // var tel=document.getElementById("tel")
    // var address=document.getElementById("address")
    // var city=document.getElementById("city")
    // if(firstname.value=="" || lastname.value=="" || email.value=="" || tel.value=="" || address.value=="" || city.value==""){
    //     var button = document.getElementsByClassName('btn-purchase')
    //     button.attr('disabled','disabled')
    // }else{
    // }


    }

function removeFromStorage(){
    pizze.splice(i*3,3)
    localStorage.removeItem('pizze')
    localStorage.clear()
    localStorage.setItem("pizze", JSON.stringify(pizze));
}

function removeCartItem(event) {var buttonClicked = event.target
    var shopItem = buttonClicked.parentElement.parentElement
    var title = shopItem.getElementsByClassName('cart-item-title')[0].innerText
    for (var i=0; i<(pizze.length-1);i+=3){
        if (pizze[i]==title){
            pizze.splice(i,3)
            localStorage.removeItem('pizze')
            localStorage.clear()
            localStorage.setItem("pizze", JSON.stringify(pizze));
        }
    }
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    pizze[pizze.length]=title
    pizze[pizze.length]=price
    pizze[pizze.length]=imageSrc
    if ("pizze" in localStorage){
        localStorage.removeItem('pizze')
        localStorage.clear()
        localStorage.setItem("pizze", JSON.stringify(pizze));
    } else{
        localStorage.setItem("pizze", JSON.stringify(pizze));
    }
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            //alert('To jelo je već dodano u narudžbu, možete povećati broj istog jela unutar narudžbe.')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">UKLONI</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    var quantityarray=[]
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('kn', ''))
        var quantity = quantityElement.value
        quantityarray[quantityarray.length]=quantity
        total = total + (price * quantity)
    }
    if ("quantity" in localStorage) {
        localStorage.removeItem('quantity')
        localStorage.setItem("quantity", JSON.stringify(quantityarray));
    }else{
        localStorage.setItem("quantity", JSON.stringify(quantityarray))
    }
    var retrievedData = localStorage.getItem("quantity")
    var quantity = JSON.parse(retrievedData)
    var retrievedFood = localStorage.getItem("pizze")
    var food = JSON.parse(retrievedFood)
    
    var list=""

    for(var i=0; i<quantity.length;i++){
        list+= food[i*3] + " " + food[i*3+1] + " x " + quantity[i] + "," + "\n"
    }
    
    total = Math.round(total * 100) / 100
    
    document.getElementsByClassName('cart-total-price')[0].innerText =total + 'kn'
    list+= "Ukupno " + total + "kn"
    
    var orderlist=document.getElementById('option')
    orderlist.value=list
}

