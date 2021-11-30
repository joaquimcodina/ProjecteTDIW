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

function canviarImatgeDetail(id){
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    ProductImg.src = SmallImg[id].src;
}