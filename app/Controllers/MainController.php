<?php 
require_once __DIR__ . "/../Models/RouteModel.php";
require_once __DIR__ . "/../Models/ListModel.php";

Class MainController{

    public function Default(){
        $Route     = new RouteModel();
        $default   = $Route->Index();
        
        $List      = new ListModel();
        $Site      = $List->Site();

        return array(
            'Content' => $default,
            'Site'    => $Site,
        );
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