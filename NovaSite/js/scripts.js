//Load the spelling slides
function loadSpellingImages(numberOfImages) {
    const images = [];
    let imageNumber = '1';
    const window = document.getElementById('spelling-slideshow-window');

    for (let i = 1; i <= numberOfImages; i++) {
        imageNumber = i;
        if(i < 10) { imageNumber = '0' + i; }
        images.push("images/spelling-" + imageNumber + ".jpg");
    }

    let j = 1
    images.forEach(url => {
        const img = document.createElement('img');
        img.src = url;
        img.className = 'Big';
        img.id = j.toString();
        img.style.width = '565px';
        img.setAttribute('tag', 'spelling');
        img.setAttribute('onclick', 'openImage("' + url + '")');

        if(j > 1) { img.style.display = 'none'; }
        window.appendChild(img);
        j++;

        console.log(url);
    });
}

//Hide the continenet images, show the spelling slides
function showSpellingSlides() {
    const spellingWindow = document.getElementById("spelling-images");
    spellingWindow.style.display = "";
    const continentWindow = document.getElementById("int-club-images");
    continentWindow.style.display = "none";
}

//Hide the spelling slides, show the continent images
function showContinentImages() {
    const spellingWindow = document.getElementById("spelling-images");
    spellingWindow.style.display = "none";
    const continentWindow = document.getElementById("int-club-images");
    continentWindow.style.display = "";
}

function refreshSpellingSlides() {
    const slides = document.querySelectorAll('img[tag="spelling"]');

    //handles changing the slides
    if (currentSlide >= slides.length) { currentSlide = 0; }
    if (currentSlide < 0) { currentSlide = slides.length - 1; }

    slides.forEach(slide => {
        slide.style.display = "none";
    });
    slides.item(currentSlide).style.display = "block";
}

//disables/enables and changes the videos for the buttons as necessary for the specific spelling slides
function refreshButtons() {
    const buttons = document.getElementsByClassName("button");
    //map for the buttons below the spelling slides
    const videoMap = new Map([
        [3, ["f", "h", "1"]],
        [5, ["a", "i", "2"]],
        [7, ["n", "m", "1"]],
        [11, ["d", "b", "2"]],
        [13, ["a", "o", "1"]],
        [15, ["q", "g", "2"]],
    ]);

    for (let i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "none";
        buttons[i].setAttribute('onclick', '');
    }

    videoMap.forEach((value, key) => {
        if(key == currentSlide) {
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].style.display = "";
                buttons[i].innerHTML = "little " + value[i];
            }
            loadVideo(value);
        }
    });
}

//Add the onclick event with the appropriate video URL to the "1" and "2" buttons
function loadVideo(videoMap) {
    const button1 = document.getElementById("buttonOption1");
    const button2 = document.getElementById("buttonOption2");
    const buttons = [button1, button2];

    var writingVideo = videoMap[Number(videoMap[2]) - 1];

    console.log(writingVideo);

    videoUrl = 'images/writing-' + writingVideo + '.mp4';
    buttons[Number(videoMap[2]) - 1].setAttribute('onclick', 'openImage("' + videoUrl + '")');
}

