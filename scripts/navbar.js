var view = $('.hiddenView').attr("id");

if (view == "home") {
    $("#breacrumbHome").show(0);
} else if (view == "AcercaDe") {
    $("#breadcrumbAcercaDe").show(0);
} else if (view == "mapas") { 
    $("#breadcrumbMapas").show(0);
} else if (view == "heroes") { 
    $("#breadcrumbHeroes").show(0);
} else if (view == "aniversario") {
    $("#breadcrumbAniversario").show(0);
} else if (view == "halloween") {
    $("#breadcrumbHalloween").show(0);
} else if (view == "lunar") {
    $("#breadcrumbAñoLunar").show(0);
} else if (view == "navidad") {
    $("#breadcrumbNavidad").show(0);
} else if (view == "archivos") {
    $("#breadcrumbArchivos").show(0);
} 

$(".dropdown-trigger").dropdown();