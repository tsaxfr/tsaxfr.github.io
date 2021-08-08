var include = function(url, callback){
 
    /* on crée une balise<script type="text/javascript"></script> */
    var script = document.createElement('script');
    script.type = 'text/javascript';
 
    /* On fait pointer la balise sur le script qu'on veut charger
       avec en prime un timestamp pour éviter les problèmes de cache
    */
 
    script.src = url + '?' + (new Date().getTime());
 
    /* On dit d'exécuter cette fonction une fois que le script est chargé */
    if (callback) {
        script.onreadystatechange = callback;
        script.onload = script.onreadystatechange;
    }
 
    /* On rajoute la balise script dans le head, ce qui démarre le téléchargement */
    document.getElementsByTagName('head')[0].appendChild(script);
}

var include_css = function(url, callback){
 
    /* on crée une balise<script type="text/javascript"></script> */
    var link = document.createElement('link');
    link.rel = 'stylesheet';
 
    /* On fait pointer la balise sur le script qu'on veut charger
       avec en prime un timestamp pour éviter les problèmes de cache
    */
 
    link.href = url + '?' + (new Date().getTime());
 
    /* On dit d'exécuter cette fonction une fois que le link est chargé */
    if (callback) {
        link.onreadystatechange = callback;
        link.onload = link.onreadystatechange;
    }
 
    /* On rajoute la balise script dans le head, ce qui démarre le téléchargement */
    document.getElementsByTagName('head')[0].appendChild(link);
}
// include('https://code.jquery.com/jquery-3.2.1.min.js');

include('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js');
include_css('https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css');

include('https://momentjs.com/downloads/moment.min.js');

include('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js');

include('https://cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js');
include_css('https://cdn.jsdelivr.net/alertifyjs/1.10.0/css/alertify.min.css');
include_css('https://cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/default.min.css');
include_css('https://cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/bootstrap.min.css');
include_css('https://cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/semantic.min.css');