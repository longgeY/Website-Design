"use strict";
function search(){
    var list = document.getElementById("itemlist");
    var searchlist = document.getElementById("searchtext");
    var table = document.getElementById("searchbox");
    var order_list = [];
    var searchName = searchlist.Itemname.value;
    var count = table.rows.length;
    
    for (var i=1; i<count; i++) {
        table.deleteRow(1);
    }

        for (var i=1; i<list.rows.length; i++) {
            var columns = list.rows.item(i).cells;

            if(searchName == columns.item(0).innerHTML){
                order_list.push(i);
            }
    }

    if(order_list.length == 0){
        alert("sorry we don't find item")
    }else{
        for (var i=0; i<order_list.length; i++) {
            var order = order_list[i];

            var name = document.getElementById ("itemlist").rows [order].cells[0];
            var price = document.getElementById ("itemlist").rows [order].cells[1]
            var seller = document.getElementById ("itemlist").rows [order].cells[2]
            var amount = document.getElementById ("itemlist").rows [order].cells[3]
            var phone = document.getElementById ("itemlist").rows [order].cells[4]

            var row = table.insertRow();

            var cell = row.insertCell();
            cell.innerHTML = name.innerHTML;
        
            var cell = row.insertCell();
            cell.innerHTML = price.innerHTML;

            var cell = row.insertCell();
            cell.innerHTML = seller.innerHTML;

            var cell = row.insertCell();
            cell.innerHTML = amount.innerHTML;

            var cell = row.insertCell();
            cell.innerHTML = phone.innerHTML;
        }
    }
}