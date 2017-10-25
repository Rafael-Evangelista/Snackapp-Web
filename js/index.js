  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });
      
    $(document).ready(function(){
    var link = window.location.href

    // Salva dados na sessão
    localStorage.setItem("urlAnterior", link);

    // Pega os dados guardado
    alert( "urlAnterior = " + localStorage.getItem("urlAnterior"));

    });

    });