function addclass() {

    var sect = document.getElementsByClassName('class-code');
    var c = document.getElementsByClassName('counter');


    for (var i = 0; i < sect.length; i++) {}

    var table = document.getElementById("class-table");
    var row = table.insertRow(c.length + 1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("required", "");
    x.setAttribute("name", "code" + i);
    x.setAttribute("style", "width: 150px;");
    x.setAttribute("class", "class-code");
    cell1.appendChild(x);

    var y = document.createElement("INPUT");
    y.setAttribute("type", "text");
    y.setAttribute("name", "description" + i);
    y.setAttribute("required", "");
    y.setAttribute("style", "width: 150px;");
    cell2.appendChild(y);

    var z = document.createElement("TEXTAREA");
    z.setAttribute("name", "notes" + i);
    z.setAttribute("required", "");
    z.setAttribute("style", "width: 150px;");
    cell3.appendChild(z);

}

function addcategory() {
    var sect = document.getElementsByClassName('cat-code');
    var c = document.getElementsByClassName('cat-counter');


    for (var i = 0; i < sect.length; i++) {}

    var table = document.getElementById("categoies-table");
    var row = table.insertRow(c.length + 1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("required", "");
    x.setAttribute("name", "cat-code" + i);
    x.setAttribute("style", "width: 150px;");
    x.setAttribute("class", "cat-code");
    cell1.appendChild(x);

    var y = document.createElement("INPUT");
    y.setAttribute("type", "text");
    y.setAttribute("name", "cat-description" + i);
    y.setAttribute("required", "");
    y.setAttribute("style", "width: 150px;");
    cell2.appendChild(y);

    var z = document.createElement("TEXTAREA");
    z.setAttribute("name", "cat-notes" + i);
    z.setAttribute("required", "");
    z.setAttribute("style", "width: 150px;");
    cell3.appendChild(z);
}