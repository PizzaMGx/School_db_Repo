let field = null
let order = null

var params = {
    "field": field,
    "order": order
};
fetch("call.php", {
    method: "POST",
    body: JSON.stringify(params)
})
.then(response => response.text())
.then(result => {
    cont = document.getElementById('response')
    cont.innerHTML = result
});

function callPhpFunction() {
    field = document.getElementById('data-field').value 
    order = document.getElementById('data-order').value

    var params = {
        "field": field,
        "order": order
    };
    fetch("call.php", {
        method: "POST",
        body: JSON.stringify(params)
    })
    .then(response => response.text())
    .then(result => {
        cont = document.getElementById('response')
        cont.innerHTML = result
    });
    event.preventDefault()
}
