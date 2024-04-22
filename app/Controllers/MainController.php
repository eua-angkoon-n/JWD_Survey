<?php 
require_once __DIR__ . "/../Models/RouteModel.php";

Class MainController{

    public function Default(){
        $Route     = new RouteModel();
        $default   = $Route->Index();
        return $default;
    }

    public function Vote($location){
        $Route     = new RouteModel();
        $location = $Route->Location($location);
        return array(
            'SiteCode'     => $location['site_initialname'],
            'SiteName'     => $location['site_name'],
            'LocationCode' => $location['location_code'],
            'LocationName' => $location['location_name']
        );
    }
}
?>