

<script>
//Función que realiza la suma

function Suma() {

   var ingreso5 = document.calculadora.ingreso5.value;
   var ingreso4 = document.calculadora.ingreso4.value;
   var ingreso6 = document.calculadora.ingreso6.value;

   try{
      //Calculamos el número escrito:
  
       ingreso5 = (isNaN(parseInt(ingreso5)))? 0 : parseInt(ingreso5);
       ingreso4 = (isNaN(parseInt(ingreso4)))? 0 : parseInt(ingreso4);
       ingreso6 = (isNaN(parseInt(ingreso6)))? 0 : parseInt(ingreso6);
       document.calculadora.resultado1.value = ingreso5*ingreso4;
       document.calculadora.resultado3.value = ingreso5*ingreso4*0.19;
       document.calculadora.resultado4.value = ingreso5*ingreso4*0.19+ingreso5*ingreso4;
       document.calculadora.resultado5.value = ingreso5*ingreso4*0.19+ingreso5*ingreso4-ingreso6;

            
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}


</script>

	