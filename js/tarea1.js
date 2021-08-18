$(document).ready(function(){

   //funcionamiento de navbar  
    $('.menu-bar').on('click',function(){
        $('.contenido').toggleClass('abrir');
    });
    //primer ejercicio
    $('#btn1').on('click',function(){
    var contents = prompt("What to put in Pandora's box?", "all evils");
    console.log("putting "+contents+" into Pandora's box");
    $('#pandora').html(contents);
    });

   // segundo ejercicio
   $('#btn2').on('click',function(){
    var items = prompt("Horcruxes", "<li>the diary</li><li>the locket</li>");
    $('#horcruxes').html(items);
   });

   // tercer ejercicio
    $('#btn3').on('click',function(){
    $("#fig1").css("border","2px solid red");
    $("#fig1").css("text-align","center");
    $("#fig1").css("padding","10px");
    $("#fig1 figcaption").css("background-color","gold");
   });

   //cuarto ejercicio
   $('#btn4').on('click',function(){
    $("#fig2 img").attr("src","img/imgTarea1/Ron.png");
    $("#fig2 img").attr("alt","Ron Weasley");
    $("#fig2 figcaption").html("Ron Weasley as played by Rupert Grint");
   });
   // quinto ejercicio
   $('#btn5',).on('click',function(){
    $("#fig3").hide();
   });
   $('#btn5-1',).on('click',function(){
    $("#fig3").show();
   });

   //ejercicio 6
   $('#btn6').on('click',function(){
    $("#characters1 li").css("font-size","18px");   
    $("#characters1 .gryffindor").css("color","red"); 
    $("#characters1 .slytherin").hide(); 
   });

   // ejercicio 7
   $('#btn7').on('click',function(){
    $("#fig4")
    .css("border","5px solid red")
    .css("text-align","center")
    .css("padding","10px");
   });
   
   //ejercicio 8
   $('#btn8').on('click',function(){
    $("<li>")
    .html("Percy")
    .addClass("gryffindor")
    .css("text-decoration","line-through")
    .appendTo("#characters2");
   });

   //ejercicio 9
   $('#btn9').on('click',function(){
    $("#fig5").removeClass("gryffindor");
    $("#fig5").addClass("slytherin");
   });
  
   function ocultar(ej){
    let ejers=document.getElementsByClassName('card');
    //recorrer el arreglo
    for (let i=0; i<ejers.length; i++)
    {  
        //hacer que se oculten los ejercicios
        ejers[i].style.display='none';
    }
    //mostrar el ejercicio seleccionado
    ejers[ej].style.display='block';
   };
   ocultar(0);


   $('#boton1').on('click',function(){
    ocultar(0);
   });
   $('#boton2').on('click',function(){
    ocultar(1);
   });
   $('#boton3').on('click',function(){
    ocultar(2);
   });
   $('#boton4').on('click',function(){
    ocultar(3);
   });
   $('#boton5').on('click',function(){
    ocultar(4);
   });
   $('#boton6').on('click',function(){
    ocultar(5);
   });
   $('#boton7').on('click',function(){
    ocultar(6);
   });
   $('#boton8').on('click',function(){
    ocultar(7);
   });
   $('#boton9').on('click',function(){
    ocultar(8);
   });
   function buscarPhp(numarchivo)
   {
    localStorage.setItem('php',numarchivo);
    console.log(numarchivo);
   }

});



