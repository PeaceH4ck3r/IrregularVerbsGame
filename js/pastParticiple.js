$('.contenedor>p.t').prop('innerHTML', 'Participio del verbo: <b></b>');

$.get('php/pastParticiple.php', imprimir);

function imprimir(data){
    var datos = data.split('/:/');
    
    n1 = Math.floor(Math.random() * 3);
    do {
        n2 = Math.floor(Math.random() * 3);
    } while(n2 == n1);
    
    do {
        n3 = Math.floor(Math.random() * 3);
    } while(n2 == n3 || n3 == n1);
    
    
    $('.contenedor>p.t>b').prop('innerHTML', datos[0]);
    
    c1 = $('.contenedor>p.o:eq('+n1+')');
    c1.prop('innerHTML', '');
    c1.append(datos[1]);
    c1.addClass('well');
    
    c2 = $('.contenedor>p.o:eq('+n2+')');
    c2.prop('innerHTML', '');
    c2.append(datos[2]);
    
    c3 = $('.contenedor>p.o:eq('+n3+')');
    c3.prop('innerHTML', '');
    c3.append(datos[3]);
}

$('.contenedor>a').click(function(e){
    e.preventDefault();
    $('.o').css('background-color', '#1565c0');
    $('.o').removeClass('well');
    $.get('php/pastParticiple.php', imprimir);
})