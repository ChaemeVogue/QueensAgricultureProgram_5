$(document).ready(function () {
    var urlList = ["a5/../img/bee-collecting-pollen.jpg", "a5/../img/field-and-tractors.jpg", "a5/../img/meadow.jpg"];
    var heroImage = document.getElementById('hero-image');
    var i = 1; // start at second image since bee is already loaded

    // a new hero images fades in and out
    setInterval(function () {
        $(".overlay").fadeIn(2000, 'swing', function () {
            $("#hero-image").css("background-image", "url(" + urlList[i] + ")");
            $(".overlay").fadeOut(2000);
            i++;
            if (i === urlList.length) {
                i = 0;
            }
        });
    }, 10000); // new hero image loads every 10 seconds
}); 