//creating wish list 

function myWishList()
    var itemName = document.getElementById("ItemName").value
    var size = document.getElementById("Size").value
    var price = document.getElementById("Price").value
    var URL = document.getElementById("URL").value
    var text= document.createTextNode(itemName)
    var newItem = document.createElement("li")
    newItem.appendChild(itemName)
    document.getElementById(myWishList).appendchild(newItem)

}