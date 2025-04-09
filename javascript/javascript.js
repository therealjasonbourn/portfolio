var previous_info = "";

function change_info(new_info) {
    const cv = document.getElementById('cv-info');
    const cv_info = document.getElementById(new_info);
    const cv_info_divs = document.getElementsByClassName('cv-info-div');
    const cv_buttons = document.getElementsByClassName('cv-button');

    cv.style.display = "none";
    for (let i = 0; i < cv_info_divs.length; i++) {
        cv_info_divs[i].style.display = "none";
    }

    if(new_info != previous_info) {
        cv.style.display = "";
        cv_info.style.display = "";
        previous_info = new_info;
    } else {
        previous_info = "";
    }

    /*for (let j = 0; j < cv_buttons.length; j++) {
        cv_info_divs[j].style.selection = "none";
    }*/
}

function randomize_header_background() {
    let random = Math.floor(Math.random() * 5) + 1;
    let selection = "/images/00" + random + ".jpg";

    console.log("randomizing background: " + selection);

    const header = document.getElementById("header");
    header.style.backgroundImage = selection;
}