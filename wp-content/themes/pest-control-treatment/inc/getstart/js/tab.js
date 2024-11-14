function pest_control_treatment_open_tab(evt, cityName) {
    var pest_control_treatment_i, pest_control_treatment_tabcontent, pest_control_treatment_tablinks;
    pest_control_treatment_tabcontent = document.getElementsByClassName("tabcontent");
    for (pest_control_treatment_i = 0; pest_control_treatment_i < pest_control_treatment_tabcontent.length; pest_control_treatment_i++) {
        pest_control_treatment_tabcontent[pest_control_treatment_i].style.display = "none";
    }
    pest_control_treatment_tablinks = document.getElementsByClassName("tablinks");
    for (pest_control_treatment_i = 0; pest_control_treatment_i < pest_control_treatment_tablinks.length; pest_control_treatment_i++) {
        pest_control_treatment_tablinks[pest_control_treatment_i].className = pest_control_treatment_tablinks[pest_control_treatment_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});