function productesCategoria(id){
    $.get( '/controller/category_list.php', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}
function productesArtista(id){
    $.get( '/controller/artists_list.php', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}
function detallProductes(id){
    $.get( '/controller/product_list.php', {id : id}, function(resp) {
        $(".container").html(resp);
    });
}

function detallProductesHome1(id){
    $.get( '/controller/product_list.php', {id : id}, function(resp) {
        $(".novetats").html(resp);
        $(".mesVenuts").html("");
    });
}

function detallProductesHome2(id){
    $.get( '/controller/product_list.php', {id : id}, function(resp) {
        $(".mesVenuts").html(resp);
        $(".novetats").html("");
    });
}

function canviarImatgeDetail(id){
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    ProductImg.src = SmallImg[id].src;
}