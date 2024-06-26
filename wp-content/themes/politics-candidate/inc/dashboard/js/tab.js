function politics_candidate_openCity(evt, cityName) {
    var politics_candidate_i, politics_candidate_tabcontent, politics_candidate_tablinks;
    politics_candidate_tabcontent = document.getElementsByClassName("tabcontent");
    for (politics_candidate_i = 0; politics_candidate_i < politics_candidate_tabcontent.length; politics_candidate_i++) {
        politics_candidate_tabcontent[politics_candidate_i].style.display = "none";
    }
    politics_candidate_tablinks = document.getElementsByClassName("tablinks");
    for (politics_candidate_i = 0; politics_candidate_i < politics_candidate_tablinks.length; politics_candidate_i++) {
        politics_candidate_tablinks[politics_candidate_i].className = politics_candidate_tablinks[politics_candidate_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}