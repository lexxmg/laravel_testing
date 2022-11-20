<?php

namespace App\Laurent;

class Laurent
{
    public function test()
    {
        return 'test laurent';
    }

    public function allStatus(string $ip)
    {
        $res = file_get_contents($ip . '/status.xml');
        $xml = simplexml_load_string($res);
		    $json = json_encode($xml);

        return $json;
    }

    public function allStatusObj(string $ip)
    {
        $res = file_get_contents($ip . '/status.xml');
        $xml = simplexml_load_string($res);
		    //$json = json_encode($xml);
        //dd($xml->out_table0);
        return $xml;
    }

    static function getStatusOut(string $url, int $out): bool
    {
        $res = file_get_contents($url . '/status.xml');
        $result = simplexml_load_string($res);
		    //$json = json_encode($xml);
        //dd($xml->out_table0);

        return (bool) mb_substr($result->out_table0, $out - 1, 1);
    }
}
