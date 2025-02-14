<?php

declare(strict_types=1);

/**
 *   This Custom Helper is used for data encrypting and decrypting
 */
class Crypto
{
    public static function enkripsi($input, $shift = 8)
    {
        $output = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $temp = ord($input[$i]);
            $temp = $temp - $shift;
            $temp = chr($temp);
            $output = $output.$temp;
        }

        $str1 = substr($output, 0, 1);
        $str2 = substr($output, 1, 999999);
        $str = $str1.mt_rand(100000, 999999).$str2;
        $str = rand(1111, 9999).date('y').$str.date('m').rand(10101, 99999);
        $str = base64_encode($str);

        return $str;
    }

    public static function en($input, $shift = 8)
    {
        $output = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $temp = ord($input[$i]);
            $temp = $temp - $shift;
            $temp = chr($temp);
            $output = $output.$temp;
        }

        return $output;
    }

    public static function de($input, $shift = 8)
    {
        $output = '';

        for ($i = 0; $i < strlen($input); $i++) {
            $temp = ord($input[$i]);
            $temp = $temp + $shift;
            $temp = chr($temp);
            $output = $output.$temp;
        }

        return $output;
    }

    public static function dekripsi($input, $shift = 8)
    {
        $str = base64_decode($input);
        $str = Crypto::dstring(6, $str);
        $str = Crypto::bstring(7, $str);
        $str1 = substr($str, 0, 1);
        $str2 = substr($str, 7, 999999);
        $str = $str1.$str2;
        $output = '';

        for ($i = 0; $i < strlen($str); $i++) {
            $temp = ord($str[$i]);
            $temp = $temp + $shift;
            $temp = chr($temp);
            $output = $output.$temp;
        }

        return $output;
    }

    public static function dstring($jml, $str)
    {
        $pjg = strlen($str);
        $str = (string) $str;
        $str = substr($str, $jml, $pjg);

        return $str;
    }

    public static function bstring($jml, $str)
    {
        $str = (string) $str;
        $str = substr($str, 0, -$jml);

        return $str;
    }

    public static function getdjson($str, $shift = 9)
    {
        $str = str_replace('{', '', $str);
        $str = str_replace('}', '', $str);
        $str = str_replace('"', '', $str);
        $str = explode(',', $str);

        $output = '{';

        foreach ($str as $s) {
            $ex = explode(':', $s);
            $a = Crypto::dekripsi($ex[0], $shift);
            $b = '';

            if ('d' == $a) {
                $b = $ex[1];
            } else {
                $b = Crypto::dekripsi($ex[1], $shift);
            }

            $output = $output.'"'.$a.'":"'.$b.'",';
        }

        $output = substr($output, 0, -1);

        $output = $output.'}';

        return json_decode($output);
    }
}
