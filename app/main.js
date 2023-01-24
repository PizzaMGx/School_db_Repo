let field = null
let order = null
let fields = null
let field_search = null
let value = null

var params = {
    "field": field,
    "order": order,
    "fields":fields,
    "field_search":field_search,
    "value":value
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
    fields = document.getElementById('input-fields').value
    field_search = document.getElementById('data-contains').value
    value = document.getElementById('input-value').value
    var params = {
        "field": field,
        "order": order,
        "fields":fields,
        "field_search":field_search,
        "value":value
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
