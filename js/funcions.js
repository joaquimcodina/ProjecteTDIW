function canviarImatgeDetail(id){
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    ProductImg.src = SmallImg[id].src;
}