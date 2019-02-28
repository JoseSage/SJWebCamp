(function(){
    "use strict";

    
     let regalo = document.getElementById('regalo');
         document.addEventListener('DOMContentLoaded', function(){

     // Campos Datos de Usuario
       let nombre = document.getElementById('nombre'),
           apellido = document.getElementById('apellido'),
           correo = document.getElementById('correo');

     // Campos de Pases
     let pase_dia = document.getElementById('pase_dia'),
         pase_completo = document.getElementById('pase_completo'),
         pase_dosdias = document.getElementById('pase_dosdias');

     // Botones y divs
      let calcular = document.getElementById('btnCalcular'),
          pagar = document.getElementById('btnRegistro'),
          errorDiv = document.getElementById('error'),
          lista_productos = document.getElementById('lista-productos'),
          suma = document.getElementById('suma-total');    

     // Extras
       let camiseta = document.getElementById('camisa_evento"'),
           etiqueta = document.getElementById('etiquetas');      

    // Eventos para el boton calcular
      calcular.addEventListener('click', calcularMontos);

      // Eventos para capturar la cantidad de boletos
      pase_dia.addEventListener('blur', mostrarDias);
      pase_dosdias.addEventListener('blur', mostrarDias );
      pase_completo.addEventListener('blur', mostrarDias );  

      // Eventos para validar el formulario de usuario

      nombre.addEventListener('blur', validarCampos);
      apellido.addEventListener('blur', validarCampos);
     
      correo.addEventListener('blur' , validarCorreo);

      // funcion que validar los campos
      function validarCampos(){
        if(this.value == ''){
            errorDiv.style.display = 'block';
            errorDiv.style.color = 'red';
            this.style.border = '2px solid red';
            errorDiv.innerHTML = ' Campo obligatorio';
            errorDiv.style.borderBottom = '2px solid red';
            errorDiv.style.borderTop = '2px solid red';
            errorDiv.style.textAlign = 'center';
            
        }else{
            errorDiv.style.display = 'none';
            this.style.border = '2px solid #cccccc';
        }
    }
     
       // funcion de validacion de correo
        function validarCorreo(){
            if(this.value.indexOf ("@") > -1){
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
                
            }else{
                errorDiv.innerHTML = ' Debe de tener al menos un @';
                errorDiv.style.borderBottom = '2px solid red';
                errorDiv.style.borderTop = '2px solid red';
                errorDiv.style.textAlign = 'center';
                errorDiv.style.color = 'red';
                this.style.border = '1px solid red';
                
            }
        }
      


       //funcion que calcula los montos a pagar
      function calcularMontos(event){
          event.preventDefault();
          if (regalo.value === '') {
              alert('Debes de elegir un regalo');
              regalo.focus(); 
          }else{
              let boletosDia = pase_dia.value,
                  boletos2Dias = pase_dosdias.value,
                  boletoCompleto = pase_completo.value,
                  cantCamisetas = camisa_evento.value, 
                  cantEtiquetas = etiqueta.value;
                
               let totalPago = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + 
               ((cantCamisetas * 10) * .93) + (cantEtiquetas * 2) ;
               
               let listadoProductos = [];
                
               if(boletosDia == 1) {
                listadoProductos.push(boletosDia + ' Pase por día');
              }
              else if(boletosDia >= 2)
              {
                listadoProductos.push(boletosDia + ' Pases por día');
              }

              if(boletos2Dias >= 1) {
                var textP = (boletos2Dias==1)?" Pase":" Pases";
                listadoProductos.push(boletos2Dias + textP + ' por 2 días ');
              }
              if(boletoCompleto >= 1){
                var textP = (boletoCompleto==1)?" Pase":" Pases";
                listadoProductos.push(boletoCompleto + textP + ' para todos los dias');
              }
              if(cantCamisetas >= 1) {
                listadoProductos.push(cantCamisetas + ' Camisas');
              }
              if (cantEtiquetas>= 1) {
                listadoProductos.push(cantEtiquetas + ' Etiquetas');
              }
             
              lista_productos.innerHTML = '';
              for (var i = 0; i < listadoProductos.length; i++) {
                lista_productos.innerHTML += listadoProductos[i] + '<br>';
              }
               //Imprime la cantidad de boletos y objetos a comprar
                lista_productos.innerHTML ='';
              for(var i = 0; i< listadoProductos.length; i++) {
                 lista_productos.innerHTML += listadoProductos[i] + '<br/>';
            }
              //Imprime la cantidad total de plata apagar
              suma.innerHTML='$ ' + totalPago.toFixed (2);

               
          }
      }

      //Funcion para mostrar los eventos segun el dia que elija el usuario
      function mostrarDias(){
        let boletosDia = pase_dia.value,
            boletos2Dias = pase_dosdias.value,
            boletoCompleto = pase_completo.value;
        
          let diasElegidos = [];
            
          if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletos2Dias > 0){
                diasElegidos.push('viernes', 'sabado');
            }
            if(boletoCompleto > 0){
                diasElegidos.push('viernes', 'sabado' ,'domingo');
                console.log(diasElegidos);
            }
            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'grid';
            }
            
        }

    });
})();

// La parte de las conferencias con Jquery

// Funcion para manejar los enlaces del menu del programa de los eventos
$(function() {
  
  // Menú te sigue al hacer scroll
  var windowHeight = $(window).height();
  var barraAltura = $('.barra').innerHeight();
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll > windowHeight){
     $('.barra').addClass('fixed');
     $(body).css({'margin-top':barraAltura+'px'});
    }else{
      $('.barra').removeClass('fixed');
      $(body).css({'margin-top':'0px'});
    }
   });


  //Menu hamburguesa
   $('.menu-movil').on('click', function(){
    $('.menu').slideToggle();
    $('.menu').css({'display':'grid'});
   });

   
  //Funcion de conferencias
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');

  $('.menu-programa a').on('click', function() {
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
     return false;
  });


  //Cuenta Rgresiva 
  $('.cuenta-regresiva').countdown('2019/08/01 10:00:00', function(e){
  $('#dias').html(e.strftime('%D'));
  $('#horas').html(e.strftime('%H'));
  $('#minutos').html(e.strftime('%M'));
  $('#segundos').html(e.strftime('%S'));
  });
   
});




