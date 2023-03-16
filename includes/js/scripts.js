$(document).ready(function(){

    $("#wpfooter").hide();

    $("#operar").on("click", function () {
       debugger
        let url = $("#url").val();
        let operandoA = $("#operandoA").val();
        let operandoB = $("#operandoB").val();
        let operacion = $("#operacion").val();
        
        const urlFinal = url+"/"+operacion+"/"+operandoA+"/"+operandoB;

        // Realiza la petición GET a la URL utilizando fetch()
        fetch(urlFinal)
          .then(response => response.json())
          .then(data => $("#resultado").val(data.result))
          
          .catch(error => console.error(error));
    })

    $("#guardar").on("click", function () {
        debugger
        let url = $("#url").val();
        $.ajax({
            type: "POST",
            data: {url: url},
            async: false,
            url: "../wp-content/plugins/pluginConnectApi/includes/inc/insertURL.php",
        }).done(function (res) {
            res = $.parseJSON(res);           
        });
        
    })    
});


