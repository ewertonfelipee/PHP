<?php

    function test(){
        $a = 0;
        $a++;
        echo "$a <br>";
    }

    test();
    test();
    test();

    function testStatic(){

        static $x = 0;
        $x++;
        echo "$x <br>";
    }

    testStatic();
    testStatic();
    testStatic();