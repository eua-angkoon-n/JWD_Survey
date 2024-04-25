<?php 

Class ListModel{
    public function Site(){
        $sql  = "SELECT * ";
        $sql .= "FROM tb_site ";
        $sql .= "WHERE site_status=1";
        
        try {
            $con = connect_database();
            $obj = new CRUD($con);
            $row = $obj->fetchRows($sql);

        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }
        $r = "<option value='0'>ทั้งหมด</option>";
        if(!empty($row)){
            foreach($row as $k => $v){
                $r .= "<option value='".$v['id_site']."'>".$v['site_initialname']."</option>";
            }
        }
        return $r;
    }

    public function Location($site){
        $sql  = "SELECT * ";
        $sql .= "FROM tb_location ";
        $sql .= "WHERE location_status=1 ";
        if($site != 0){
            $sql .= "AND ref_id_site=$site";
        }
        
        try {
            $con = connect_database();
            $obj = new CRUD($con);
            $row = $obj->fetchRows($sql);

        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }
        $r = "<option value='0'>ทั้งหมด</option>";
        if(!empty($row)){
            foreach($row as $k => $v){
                $r .= "<option value='".$v['id_location']."'>".$v['location_name']."</option>";
            }
        }
        return $r;
    }
}

?>