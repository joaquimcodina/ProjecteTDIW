function productesCategoria(id){
    $.get( '/index.php?action=categories', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}
function productesArtista(id){
    $.get( '/index.php?action=artistes', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}
function detallProductes(id){
    $.get( '/index.php?action=productes', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}

function detallProductesHome1(id){
    $.get( '/index.php?action=productes', {id : id}, function(resp) {
        $(".novetats").html(resp);
        $(".mesVenuts").html("");
    });
}

function detallProductesHome2(id){
    $.get( '/index.php?action=productes', {id : id}, function(resp) {
        $(".mesVenuts").html(resp);
        $(".novetats").html("");
    });
}

function producteCabas(id){
    var e = document.getElementById("units");
    if(e != null){
        var unitsProduct = e.value;
        $.get( '/index.php?action=cistell', {id : id, unitsProduct : unitsProduct}, function(resp) {
            $("#container-cart").html(resp);
        });
    } else {
        $.get( '/index.php?action=cistell', {id : id, unitsProduct : 1}, function(resp) {
            $("#container-cart").html(resp);
        });
    }
}

function canviarImatgeDetail(id){
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    ProductImg.src = SmallImg[id].src;
}

function alertes(message){
    alert(message);
}