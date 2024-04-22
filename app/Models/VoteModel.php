<?php 
class VoteModel{
    protected $rate;
    protected $location;
    protected $vehicle;
    public function __construct($rate, $location, $vehicle){
        $this->rate     = $rate;
        $this->location = IsNullOrEmptyString($location) ? false : $location;
        $this->vehicle  = ($vehicle == "true" || $vehicle == null) ? false : $vehicle;
    }

    public function SaveResult(){
        // return $this->location;
        return $this->SavetoDB();
    }

    protected function SavetoDB(){
        $id_site = $this->findSite();
        $row = [
            'ref_id_site'     => $id_site,
            'ref_id_location' => $this->location,
            'score'           => $this->rate,
            'date_survey'     => DATE('Y-m-d H:i:s')
        ];
        if($this->vehicle){
            $row['vehicle'] = $this->vehicle;
        }

        try {
            $con = connect_database();
            $obj = new CRUD($con);
            $row = $obj->addRow($row, 'tb_survey');

            if(is_numeric($row)){
                return $row;
            } else {
                return 'error';
            }

        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }
    }

    private function findSite(){
        $sql  = "SELECT * ";
        $sql .= "FROM tb_location ";
        $sql .= "WHERE id_location=".$this->location;

        try {
            $con = connect_database();
            $obj = new CRUD($con);
            $row = $obj->customSelect($sql);

            if(!empty($row)){
                return $row['ref_id_site'];
            } else {
                return 0;
            }

        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con =null;
        }
    }
}
?>