<?PHP
Class ReportTable extends TableProcessing {
    protected $site;
    protected $location;
    protected $startdt;
    protected $enddt;
    
    public function __construct($site, $location, $start, $end, $TableSET){
        parent::__construct($TableSET); //ส่งค่าไปที่ DataTable Class

        $this->site     = $site;
        $this->location = $location;
        $this->startdt  = $start;
        $this->enddt    = $end;

    }
    public function getTable(){
        // return $this->user;
        return $this->SqlQuery();
    }

    public function SqlQuery(){
        $sql      = $this->getSQL(true);
        $sqlCount = $this->getSQL(false);
        // return $sql;

        try {
            $con = connect_database();
            $obj = new CRUD($con);

            $fetchRow = $obj->fetchRows($sql);
            $numRow   = $obj->getCount($sqlCount);
            // return $fetchRow;

            $Result   = $this->createArrayDataTable($fetchRow, $numRow);
            
            return $Result;
        } catch (PDOException $e) {
            return "Database connection failed: " . $e->getMessage();
        
        } catch (Exception $e) {
            return "An error occurred: " . $e->getMessage();
        
        } finally {
            $con = null;
        }
    }

    public function getSQL(bool $OrderBY){

        if($OrderBY){
            $sql = "SELECT * ";
            
        } else {
            $sql  = "SELECT count(id_survey) AS total_row ";
        }
        $sql .= "FROM tb_survey ";
        $sql .= "WHERE 1=1 ";
        if($this->site != 0){
            $sql .= "AND ref_id_site=$this->site ";
        }
        if($this->location != null && $this->location != 0){
            $sql .= "AND ref_id_location=$this->location ";
        }
        $sql .= "AND date_survey BETWEEN '$this->startdt' AND '$this->enddt' ";

        $sql .= "$this->query_search ";
        if($OrderBY) {
            $sql .= "ORDER BY ";
            $sql .= "$this->orderBY ";
            $sql .= "$this->dir ";
            $sql .= "$this->limit ";
        }

        return $sql;
    }

    public function createArrayDataTable($fetchRow, $numRow){

        $arrData = null;
        $output = array(
            "draw" => intval($this->draw),
            "recordsTotal" => intval(0),
            "recordsFiltered" => intval(0),
            "data" => $arrData,
        );

        if (count($fetchRow) > 0) {
            $No = $this->pStart + 1;
            foreach ($fetchRow as $key => $value) {
 
                

                $dataRow   = array();
                $dataRow[] = !IsNullOrEmptyString($value['date_survey']) ? CustomDate($value['date_survey'], 'Y-m-d H:i:s', "d/m/Y H:i") : "-";
                $dataRow[] = Setting::$score[$value['score']];

                $arrData[] = $dataRow;
                $No++;
                
            }
        }

        $output = array(
            "draw" => intval($this->draw),
            "recordsTotal" => intval($numRow),
            "recordsFiltered" => intval($numRow),
            "data" => $arrData,
        );

        return $output;
    }
}
?>