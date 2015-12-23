# ColorConverter
by [ElChiniNet](http://xprimiendo.com)

A Class to convert between different color models

Installation
============

1.	Copy the php file from the src folder into a folder on your
	server. It needs to be readable by your web server.

2.	Include the file in your php with include or require methods.

Class Methods
=============

All methods accept the same parameters:
>**$color** A mixed var. Can be a string or array

>**$string** A boolean var that indicates what do you get: A string representing a css style or an Array with the values

    toRGB(mixed $color [, boolean $string = false])
Convert a color to RGB

*E.g. rgb(R, G, B) or Array([r] => R, [g] => B, [b] => B)*

    oRGBA(mixed $color [, boolean $string = false])
Convert a color to RGBA

*E.g. rgba(R, G, B, A) or Array([r] => R, [g] => B, [b] => B, [a] => A)*

    toHEX(mixed $color [, boolean $string = false])
Convert a color to HEX RGB

*E.g. #RRGGBB or Array([r] => RR, [g] => GG, [b] => BB)*

    toHSL(mixed $color [, boolean $string = false])
Convert a color to HSL color model

*E.g. hsl(H, S%, L%) or Array([h] => H , [s] => S%, [l] => L%)*

    toHSLA(mixed $color [, boolean $string = false])
Convert a color to HSL color model with alpha channel

*E.g. hsla(H, S%, L%, A) or Array([h] => H , [s] => S%, [l] => L%, [a] => A)*

    toHSLA(mixed $color [, boolean $string = false])
Convert a color to HSL color model with alpha channel

*E.g. hsla(H, S%, L%, A) or Array([h] => H , [s] => S%, [l] => L%, [a] => A)*

The class converts to two color models included in the next CSS Color Module Level 4:

    toHEXA(mixed $color [, boolean $string = false])
Convert a color to HEX RGB with alpha channel

*E.g. #RRGGBBAA or Array([r] => RR, [g] => GG, [b] => BB, [a] => AA)*

    toCMYK(mixed $color [, boolean $string = false])
Convert a color to CMYK tint color

*E.g. device-cmyk(C, M, Y, K) or Array([c] => C, [m] => M, [y] => Y, [k] => K)*

Examples
========

    include('ColorConverter.php');
    
    //Create an instance
    $converter = new ColorConverter();
    
    $rgb = $converter->toRGB('#FF00FF', true);
    echo $rgb; // rgb(255,0,255)
    
    $rgba = $converter->toRGBA('hsl(50, 20%, 90%)', true);
    echo $rgba; // rgba(235,233,224,1)
    
    $hsl = $converter->toHSL('rgb(255, 0, 0)', true);
    echo $hsl; // hsl(0,100%,50%)
    
    $hsla = $converter->toHSLA('rgba(0, 255, 255, .5)', true);
    echo $hsla; // hsla(180,100%,50%,0.5)
    
    $cmyk = $converter->toCMYK('#F0F');
    print_r $cmyk; // Array ( [c] => 0 [m] => 100 [y] => 0 [k] => 0 )
    
    $rgb = $converter->toRGB( array('h' => 115, 's' => '70%', 'l' => '45%'), true );
    echo $rgb; // rgb(48,195,34)
    
    $hsla = $converter->toHSLA( array('r' => 115, 'g' => 200, 'b' => 150, 'a' => '50%'), true );
    echo $hsla; // hsla(145,44%,62%,0.5)