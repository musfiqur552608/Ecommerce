var products = JSON.parse(localStorage.getItem('cart'));
var cartItems = [];
var cart_n = document.getElementById('cart_n');

var table = document.getElementById("table");
var total = 0;


function tableHTML(i) {
    return `
            <tr>
            <th scope="raw">${i+1}</th>
            <td><img style="width:90px" src="${products[i].url}"></td>
            <td>${products[i].name}</td>
            <td>1</td>
            <td>${products[i].price}</td>
            </tr>


    `;
}

function clean() {
    localStorage.clear();
    for (let index = 0; index < products.length; index++) {
        table.innerHTML += tableHTML(index);
        total = total + parseInt(products[index].price);
    }
    total = 0;
    table.innerHTML = `
        <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
        
    `;

    cart_n.innerHTML = '';
    document.getElementById("btnBuy").style.display = "none";
    document.getElementById("btnClean").style.display = "none";
}


function render() {
    for (let index = 0; index < array.length; index++) {
        table.innerHTML += tableHTML(index);
        total = table + parseInt(products[index].price);
    }

    table.innerHTML += `
    
        <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Total: $${total}.00</th>
        </tr>

        <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">
            <button id="btnClean" onclick="clean()" class="btn text-white btn-warning">
                Clean shopping Cart
            </button>
        </th>
        <th scope="col">
        <form id="formAdd">
        <button type="submit" id="btnBuy" class="btn btn-success">Buy</button>
        </form>
        </th>
        </tr>>

    `;

    products = JSON.parse(localStorage.getItem("cart"));
    cart_n.innerHTML = `[${products.length}]`;
}

$(document).ready(function() {
    $("#formAdd").submit(function(e) {
        e.preventDefault();
        var option = 1;
        post = $.trim(option);
        $.ajax({
            url: "./db/crud.php",
            type: "POST",
            dataType: "json",
            data: { order: total * total * 23, total: total, option: post },
            success: function(data) {
                console(`success:${data}`);
            }
        });
        swal({
            position: 'center',
            type: 'success',
            title: 'Purchase made successfully',
            text: `Your purchase order is: ${total*tatal*23}`,
            showConfirmButton: true,
            timer: 5000
        });
        clean();
    });
});