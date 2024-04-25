<?php 

Class ReportModel{
    protected $site;
    protected $location;
    protected $start;
    protected $end;
    public function __construct($site, $location, $start, $end){
        $this->site     = $site;
        $this->location = $location;
        $this->start    = $start;
        $this->end      = $end;
    }

    public function ReportData(){
        return $this->getData();
    }

    protected function getData(){
        $result = array();
        
        $row = $this->sql('def');
        if(!empty($row)){
            $avg = $this->sql('avg');
            $count = $this->sql('count');
            $sum = count($row);
            $score = array();
            foreach($count as $k => $v){
                $percent = ($v['count'] / $sum) * 100;
                $score[$v['score']]['score']   = $v['count'];
                $score[$v['score']]['percent'] = number_format($percent);
          
            }
            $result = array(
                'avg' => !empty($avg) ? number_format($avg[0]['count'], 2) : 'ไม่มีข้อมูล',
                'score' => $score
            );
        }
        return $result;
        
    }

    private function sql($mode){
        switch($mode){
            case 'avg':
                $sql  = "SELECT AVG(score) as count ";
                break;
            case 'count':
                $sql  = "SELECT score, count(score) as count ";
                break;
            case 'def':
                $sql  = "SELECT * ";
                break;
        }
        $sql .= "FROM tb_survey ";
        $sql .= "WHERE 1=1 ";
        if($this->site != 0){
            $sql .= "AND ref_id_site=$this->site ";
        }
        if($this->location != null && $this->location != 0){
            $sql .= "AND ref_id_location=$this->location ";
        }
        $sql .= "AND date_survey BETWEEN '$this->start' AND '$this->end' ";

        try {
            $con = connect_database();
            $obj = new CRUD($con);
            if($mode == 'count'){
                $sql .= "GROUP BY score ";
                $obj->fetchRows(Setting::$SQLSET);
            }
            $row = $obj->fetchRows($sql);
            return $row;
        } catch (\Throwable $e) {
            return $e->getMessage();
        } finally {
            $con = null;
        }
    }
}

?>