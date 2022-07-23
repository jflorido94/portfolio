<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArchiveModel;
use App\Models\DownloadModel;

class Downloads extends BaseController
{
    public function index()
    {
        $agent = $this->request->getUserAgent();

        $location = $this->getLocation($this->getIpAddress());

        $archiveM = new ArchiveModel();

        if ($archive = $archiveM->where('type', 'pdf-cv')->orderBy('updated_at', 'desc')->first()) {

            $downloadM = new DownloadModel();

            $data = [
                'ip' => $location->ip,
                'country' => $location->country,
                'region' => $location->region,
                'city' => $location->city,
                'user_agent' => $this->getCurrentAgent($agent),
                'platform' => $agent->getPlatform(),
                'id_archive' => $archive['id'],
            ];
            $downloadM->insert($data);

            return $this->response->download($archive['route'], null)->setFileName(date('Y-m-d') . '-JavierFlorido.pdf');
        } else {
            return $this->response->redirect(route_to('main'));
        }
    }

    private function getCurrentAgent($agent)
    {
        if ($agent->isBrowser()) {
            return $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            return $agent->getRobot();
        } elseif ($agent->isMobile()) {
            return $agent->getMobile();
        } else {
            return 'Unidentified User Agent';
        }
    }

    private function getLocation($ip)
    {
        $ch = curl_init('http://ipwhois.app/json/' . $ip);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        // Decode JSON response
        $ipWhoIsResponse = json_decode($json);
        // Country code output, field "country_code"
        return $ipWhoIsResponse;
    }

    private function getIpAddress()
    {
        $ipAddress = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP']) && $this->isValidIpAddress($_SERVER['HTTP_CLIENT_IP'])) {
            // check for shared ISP IP
            $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // check for IPs passing through proxy servers
            // check if multiple IP addresses are set and take the first one
            $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($ipAddressList as $ip) {
                if ($this->isValidIpAddress($ip)) {
                    $ipAddress = $ip;
                    break;
                }
            }
        } else if (!empty($_SERVER['HTTP_X_FORWARDED']) && $this->isValidIpAddress($_SERVER['HTTP_X_FORWARDED'])) {
            $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && $this->isValidIpAddress($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && $this->isValidIpAddress($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (!empty($_SERVER['HTTP_FORWARDED']) && $this->isValidIpAddress($_SERVER['HTTP_FORWARDED'])) {
            $ipAddress = $_SERVER['HTTP_FORWARDED'];
        } else if (!empty($_SERVER['REMOTE_ADDR']) && $this->isValidIpAddress($_SERVER['REMOTE_ADDR'])) {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
        }
        return $ipAddress;
    }

    private function isValidIpAddress($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
            return false;
        }
        return true;
    }
}
