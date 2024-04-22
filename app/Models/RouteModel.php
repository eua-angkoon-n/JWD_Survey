<?php 
Class RouteModel{
    public function Location($location){
        $sql  = "SELECT * ";
        $sql .= "FROM tb_location ";
        $sql .= "LEFT JOIN tb_site ON (tb_location.ref_id_site = tb_site.id_site) ";
        $sql .= "WHERE tb_location.id_location=".$location;

        try {
            $con = connect_database();
            $obj = new CRUD($con);

            $row = $obj->customSelect($sql);
            return $row;
        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }
    }

    public function Index(){
        $sql  = "SELECT tb_location.id_location, tb_location.location_name, tb_site.id_site, tb_site.site_initialname ";
        $sql .= "FROM tb_location ";
        $sql .= "LEFT JOIN tb_site ON (tb_location.ref_id_site = tb_site.id_site) ";
        $sql .= "WHERE tb_location.location_status=1";

        try {
            $con = connect_database();
            $obj = new CRUD($con);

            $row = $obj->fetchRows($sql);
        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }

        if(!empty($row)){
            $outputArray = array();
    
            foreach ($row as $item) {
                $siteName = $item['site_initialname'];
                $locationId = $item['id_location'];
                $locationName = $item['location_name'];

                if (!isset($outputArray[$siteName])) {
                    $outputArray[$siteName] = array();
                }

                $outputArray[$siteName][$locationId] = array(
                    'location_name' => $locationName
                );
            }

            foreach($outputArray as $site => $location){
                $div  = '<div class="card card-primary card-outline">';
                $div .= '<div class="card-header">';
                $div .= '<h5 class="card-title m-0"><strong>'.$site.'</strong></h5>';
                $div .= '</div>';
                $div .= '<div class="card-body">';
                foreach($location as $location => $name){
                    $div .= '<a href="?app=vote&location='.$location.'" class="btn btn-primary m-1">'.$name['location_name'].'</a>';
                }
                $div .= '</div></div>';
            }
            return $div;
        }
    }
}
?>