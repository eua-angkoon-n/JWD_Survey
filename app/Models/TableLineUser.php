<?PHP
Class LineUserTable extends TableProcessing {
    protected $user;
    protected $class;
    protected $site;
    protected $status;
    
    public function __construct($formData, $TableSET){
        parent::__construct($TableSET); //ส่งค่าไปที่ DataTable Class

        parse_str($formData, $data);

        $this->user   = !IsNullOrEmptyString($data['user']) ? $data['user'] : null;
        $this->class  = !empty($data['user_class']) ? $data['user_class'] : null;
        $this->site   = !empty($data['site']) ? $data['site'] : null;
        $this->status = !IsNullOrEmptyString($data['active_status']) ? $data['active_status'] : null;

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
            $sql  = "SELECT count(id) AS total_row ";
        }
        $sql .= "FROM line_users ";
        $sql .= "WHERE 1=1 ";
        $sql .= $this->searchForm('user', $this->user);
        $sql .= $this->searchForm('class', $this->class);
        $sql .= $this->searchForm('site', $this->site);
        $sql .= $this->searchForm('status', $this->status);

        $sql .= "$this->query_search ";
        if($OrderBY) {
            $sql .= "ORDER BY ";
            $sql .= "$this->orderBY ";
            $sql .= "$this->dir ";
            $sql .= "$this->limit ";
        }

        return $sql;
    }
    private function searchForm($input, $value){
        if($value == NULL)
            return '';
        $q = "";
        switch($input){
            case 'user':
                $q .= "AND (user_name LIKE '%$value%' OR emp_code LIKE '%$value%') ";
            break;
            case 'class':
                foreach($value as $class){
                    switch($class){
                        case 0:
                            $q .= "AND is_admin = 1 ";
                        break;
                        case 1:
                            $q .= "AND is_teacher = 1 ";
                        break;
                        case 2:
                            $q .= "AND is_employee = 1 ";
                        break;
                    }
                }
            break;
            case 'site':
                $quotedValues = array_map(function($val) {
                    return "'$val'";
                }, $value);
                $q .= "AND emp_comp IN (".implode(",", $quotedValues).") ";
            break;
            case 'status':
                if($value == 'all')
                    break;
                $q .= "AND is_delete = $value ";
            break;
        }
        return $q;
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
                $dataRow[] = $this->control(0,$value['id'], '');
                $dataRow[] = $No;
                $dataRow[] = !IsNullOrEmptyString($value['user_name']) ? $value['user_name'] : "-";
                $dataRow[] = !IsNullOrEmptyString($value['emp_code']) ? $value['emp_code'] : "-";
                $dataRow[] = $this->UserClass($value['is_admin'], $value['is_teacher'], $value['is_employee']);
                $dataRow[] = !IsNullOrEmptyString($value['emp_comp']) ? $value['emp_comp'] : "-";
                $dataRow[] = !IsNullOrEmptyString($value['added_date']) ? CustomDate($value['added_date'], "Y-m-d H:i:s", "d/m/Y H:i") : "-";
                $dataRow[] = $this->control(1,$value['id'], $value['is_delete']);

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

    private function control($mode, $id, $is_delete){

        switch($mode){
            case 0:
                $r  = "<a class='btn btn-danger btn-sm mr-1' id='delete_user' title='ลบ'><i class='fas fa-trash-alt'></i></a>";
                $r .= "<a class='btn btn-warning btn-sm' id='edit_user' title='แก้ไข'><i class='fas fa-pencil-alt'></i></a>";
            break;
            case 1:
                $checked = ($is_delete==0 ? 'checked value="0" disabled' : 'value="1" disabled ');
                $r  = "<div class='check-status custom-control custom-switch custom-switch-on-success custom-switch-off-danger d-inline'>";
                $r .= "<input type='checkbox' class='custom-control-input' data-id='$id' id='customSwitch$id' $checked>";
                $r .= "<label class='custom-control-label custom-control-label' for='customSwitch$id'></label>";
                $r .= "</div>";
            break;
        }

        return $r;
    }

    private function UserClass($adm, $teach, $emp){
        $r  = "";
        if($adm)
            $r .= "<span class='badge bg-maroon mr-1'>".Setting::$userClass[0]."</span>";
        if($teach)
            $r .= "<span class='badge bg-lightblue mr-1'>".Setting::$userClass[1]."</span>";
        if($emp)
            $r .= "<span class='badge bg-olive'>".Setting::$userClass[2]."</span>";
        return $r;
    }
}
?>