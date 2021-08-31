<?php

$lettre = [];

$lettre["a"]  =    "________"
        ."_xxxxxx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xxxxxx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."________";

$lettre["b"]  =    "________"
        ."_xxxxx__"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xxxxxx_"
        ."_xx__xx_"
        ."_xxxxx__"
        ."________";

$lettre["c"]=    "________"
        ."_xxxxxx_"
        ."_xx_____"
        ."_xx_____"
        ."_xx_____"
        ."_xx_____"
        ."_xxxxxx_"
        ."________";

$lettre["d"]=    "________"
        ."_xxxxx__"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xxxxx__"
        ."________";


$lettre["e"]=    "________"
        ."_xxxxxx_"
        ."_xx_____"
        ."_xx_____"
        ."_xxxxx__"
        ."_xx_____"
        ."_xxxxxx_"
        ."________";

$lettre["f"]  =    "________"
        ."_xxxxxx_"
        ."_xx_____"
        ."_xxxx___"
        ."_xxxx___"
        ."_xx_____"
        ."_xx_____"
        ."________";


$lettre["g"]=    "________"
        ."_xxxxxx_"
        ."_xx_____"
        ."_xx_____"
        ."_xx_xxx_"
        ."_xx__xx_"
        ."_xxxxxx_"
        ."________";

$lettre["h"] ="________"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."_xxxxxx_"
        ."_xx__xx_"
        ."_xx__xx_"
        ."________";


$lettre["i"]=    "________"
        ."_xxxxxx_"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."_xxxxxx_"
        ."________";


$lettre["j"]=    "________"
        ."_xxxxxx_"
        ."____xx__"
        ."____xx__"
        ."____xx__"
        ."_x__xx__"
        ."_xxxxx__"
        ."________";

$lettre["k"]=    "________"
        ."_xx__xx_"
        ."_xx_xx__"
        ."_xxxx___"
        ."_xx_xx__"
        ."_xx__xx_"
        ."_xx__xx_"
        ."________";

$lettre["l"]=    "________"
        ."_xx_____"
        ."_xx_____"
        ."_xx_____"
        ."_xx_____"
        ."_xx_____"
        ."_xxxxxx_"
        ."________";

$lettre["m"]=    "________"
        ."_x____x_"
        ."_xx__xx_"
        ."_x_xx_x_"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."________";

$lettre["n"]=    "________"
        ."_x____x_"
        ."_xx___x_"
        ."_x_x__x_"
        ."_x__x_x_"
        ."_x___xx_"
        ."_x____x_"
        ."________";

$lettre["o"]=    "________"
        ."__xxxx__"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."__xxxx__"
        ."________";

$lettre["p"]=    "________"
        ."_xxxxxx_"
        ."_x____x_"
        ."_x____x_"
        ."_xxxxxx_"
        ."_x______"
        ."_x______"
        ."________";


$lettre["q"]=    "________"
        ."__xxxx__"
        ."_x____x_"
        ."_x____x_"
        ."_x__x_x_"
        ."_x___x__"
        ."__xxx_x_"
        ."________";


$lettre["r"]=    "________"
        ."__xxxx__"
        ."_x____x_"
        ."_x____x_"
        ."_xxxxx__"
        ."_x____x_"
        ."_x____x_"
        ."________";


$lettre["s"]=    "________"
        ."__xxxx__"
        ."_x____x_"
        ."_x______"
        ."__xxxx__"
        ."______x_"
        ."__xxxx__"
        ."________";

$lettre["t"]= "________"
        ."_xxxxxx_"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."________";

$lettre["u"]  =    "________"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."__xxxx__"
        ."________";

$lettre["v"]=    "________"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."__x__x__n"
        ."___xx___"
        ."________";

$lettre["w"]=    "________"
        ."_x____x_"
        ."_x____x_"
        ."_x____x_"
        ."_x_xx_x_"
        ."_x_xx_x_"
        ."__x__x__"
        ."________";


$lettre["x"]=    "________"
        ."_x____x_"
        ."_x____x_"
        ."__x__x__"
        ."___xx___"
        ."__x__x__"
        ."_x____x_"
        ."________";

$lettre["y"]=    "________"
        ."_x____x_"
        ."_x____x_"
        ."__x__x__"
        ."___xx___"
        ."___xx___"
        ."___xx___"
        ."________";

$lettre["z"] = "________"
        ."_xxxxxx_"
        ."_____xx_"
        ."____xx__"
        ."___xx___"
        ."__xx____"
        ."_xxxxxx_"
        ."________";

$mot = "alphabet";
$result = "";
$r = 0;

//imprimons les lettres de $mot
for($j = 0; $j < 8; $j++)
{
        if($j == 0)
        {
                $r = $j;
        }
        else
        {
                $r = ($j*8);
        }

        for($i = 0; $i < strlen($mot); $i++)
        {
                if(0<=$r && $r<=8)
                {
                        $result .= "\033[33m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(9<=$r && $r<=16)
                {
                        $result .= "\033[31m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(17<=$r && $r<=24)
                {
                        $result .= "\033[32m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(25<=$r && $r<=32)
                {
                        $result .= "\033[33m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(33<=$r && $r<=40)
                {
                        $result .= "\033[34m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(41<=$r && $r<=48)
                {
                        $result .= "\033[35m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(49<=$r && $r<=56)
                {
                        $result .= "\033[33m".substr($lettre[$mot[$i]], $r, 8);
                }
                elseif(57<=$r && $r<=64)
                {
                        $result .= "\033[37m".substr($lettre[$mot[$i]], $r, 8);
                }
        }
        $result .= "\n";
}

$result = str_replace("_"," ", $result);

print($result);