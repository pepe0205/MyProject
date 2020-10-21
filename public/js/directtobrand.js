$(document).ready(function () {
    $('.brand-item').click(function (e) { 
        e.preventDefault();
        var brandItem = $(this);
        var id = brandItem.attr('data-id-brand');
        if(id == 1) {
            window.location.replace("http://localhost:88/ProjectWeb/Bama");
        } else if(id == 2) {
            window.location.replace("http://localhost:88/ProjectWeb/SgSwagger");
        } else if(id == 3) {
            window.location.replace("http://localhost:88/ProjectWeb/BirdyBag");
        } else {
            window.location.replace("http://localhost:88/ProjectWeb/Wiinhouse");
        }
    });
    
});