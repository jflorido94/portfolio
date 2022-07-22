<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Downloads extends BaseController
{
    public function index()
    {
        $agent = $this->request->getUserAgent();
        
        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        
        echo $currentAgent . '</br>';
        
        echo $this->request->getIPAddress() . '</br>';
        
        echo $this->getLocation($this->request->getIPAddress()). '</br>';
        
        echo $agent->getPlatform();
        
        // return $this->response->download(WRITEPATH . 'uploads/pdf/' . 'CV-2022-07-19.pdf', null)->setFileName(date('Y-m-d').'-JavierFlorido.pdf');
    }

    private function getLocation($ip)
    {
        $ch = curl_init('http://ipwhois.app/json/' . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        // Decode JSON response
        $ipWhoIsResponse = json_decode($json, true);
        // Country code output, field "country_code"
        return $ipWhoIsResponse;
    }
}
