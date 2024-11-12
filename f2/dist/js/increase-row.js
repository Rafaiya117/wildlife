
var items = 0;
function addItem() {
    items++;

    var html = "<tr>";
        html += "<td>" + items + "</td>";
        html += "<td><input type='text' name='name=sl'></td>";
        html += "<td><input type='number' name='mode'></td>";
        html += "<td><input type='number' name='species'></td>";
        html += "<td><input type='number' name='place'></td>";
        html += "<td><input type='number' name='date0'></td>";
        html += "<td><input type='number' name='incharge'></td>";
    html += "</tr>";

    // var row = document.getElementById("tbody").insertRow();
    $('#tbody').append(html);
    // row.innerHTML = html;
}

$('#add_new_row').click(addItem)

