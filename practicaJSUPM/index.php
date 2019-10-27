<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    </body>
    <script>
        function uniqueInteger () 
        {
            var _counter = 0;
            function count () { return _counter++; };
            return count;
        };
        // assigns return value: function count
        var unique = uniqueInteger ();
        //console.log(unique());
        //console.log(unique());
        //console.log(unique());
        
        let pp = function(){return arguments[0]*arguments[1]; }(2,3);
        
        const dd = (x,y,...data) => x*y*data[0];
        //const pp = () => arguments[0]*arguments[1]; // No funciona en annotación
        
        //console.log(dd(6,4,3));
        console.log(pp);
        
        function cero () { return 0; } 
        function uno () { let x=1; return () => x++;} 

        var x = cero; 
        var y = uno; 
        var z = cero(); 
        var t = uno(); 
        console.log(t());
        
        function dos_a (n) {
            var res = 1;
                while (n > 0 ) {
                      res = res * 2;
                      n = n - 1;
                }
            return res;
        }

        function numero_primo (x) {
             for (let i=2; i<x; i++) {
                     if ((x % i) === 0) { return false; };
             }
             return true;
        }
        
        console.log(dos_a(8));

    </script>
    <?php
        function sumaArray($lista){
            return ( count($lista)!= 0 ) ? SUM($lista,0) : 0;
        }
        
        // Función recursiva
        function SUM($element, $index){
            $_type = gettype($element[$index]); // Verificamos el tipo de elemento del array
            if( $_type == "array" ){
                if( count($element[$index]) == 0 ) array_push($element, 0);
                else array_push($element, ...$element[$index]); // agregamos el nuevo array al final
                return 0 + SUM($element, ++$index); // Como el elemento es un array se suma a CERO
            }else if( $_type == "NULL" || $_type == "string" || $_type == "boolean" ){
                if( count($element) == $index+1 ) return 0;
                else return 0 + SUM($element, ++$index); // Si el elemento del array no es entero se suma a CERO
            }else{
                if( count($element) == $index+1 ) // Validamos para terminar el fin de la llamada de la función recursiva
                    return $element[$index];
                else
                    return $element[$index] + SUM($element, ++$index); // Suma el elemento actual y vuelve a invocar la función
            }
        }
        //echo sumaArray([1, 4, 3, null, [2,3, null, [1,2,3], 0], 0]);
        //echo sumaArray([[], 3,4]);
        echo sumaArray([[1,2,3,[]],[[],NULL,[1,2,3]],1]);
        
        //$i=0;while ($i=1) echo '<br/>'.++$i ;
    ?>
</html>