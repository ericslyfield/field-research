function imageCarousel(){

    var target = document.getElementById("target");

    var lastSlide = document.getElementById("last-slide-btn");
    var nextSlide = document.getElementById("next-slide-btn");

    if (lastSlide){
        lastSlide.addEventListener("click", function(){
            var getLastSlide = new XMLHttpRequest();
            getLastSlide.open('GET', 'http://field-research.local/wp-json/wp/v2/posts');
            getLastSlide.onLoad = function() {
                if(getLastSlide.status >= 200 && getLastSlide.status < 400){
                    var data = JSON.parse(getLastSlide.responseText);
                } else {
                    console.log("The server connected but returned an error...");
                }
            };

            getLastSlide.onerror = function() {
                console.log("Connection error");
            }

            getLastSlide.send();
            
        });
    }

        if (nextSlide){
        nextSlide.addEventListener("click", function(){
            console.log("Next slide button clicked!")
        })
    }

    var lastPost = [];
    var nextPost = [];

    console.log("imageCarousel is Running.");
}

imageCarousel();
