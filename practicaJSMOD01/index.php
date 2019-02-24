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
        console.log('\n');
        let _hour = new Date().getHours();
        if( _hour >= 7 && _hour < 13 )
            console.log(`Good morning, it's ${_hour} o'clock`);
        else if (_hour >= 13 && _hour < 22)
            console.log(`Good afternoon, it's ${_hour} o'clock`);
        else if (_hour >= 22 || _hour < 7)
            console.log(`Good night, it's ${_hour} o'clock`);
        console.log('\n');
        console.log(Math.PI.toFixed(6));
        console.log('\n');
        let _table = x => console.log(`${x} dec = ${x.toString(16)} hex = ${x.toString(8)} oct = ${x.toString(2)} bin`);
        for( let i = 0; i<=22; i++ ) _table(i);
        console.log('\n');
        let _even = x => ( x%2 ) === 0;
        let _printTable = x => !_even(x) && ( x < 10 || x > 20 );
        for( let i = 1; i<=21; i++ ) if( _printTable(i) ) _table(i);
        console.log('\n');
        console.log(`Hi in Chinese is written as: \u55e8\uff0c\u4f60\u597d\u5417`);
        console.log('\n');
        console.log(`The program has finished`);
    </script>
</html>