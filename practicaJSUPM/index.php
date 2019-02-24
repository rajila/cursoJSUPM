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
</html>