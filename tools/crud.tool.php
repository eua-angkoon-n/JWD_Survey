<?php
require_once __DIR__. '/../config/setting.php';
require_once __DIR__. '/connectDB.php';

error_reporting(error_reporting() & ~E_NOTICE);

class CRUD
{
    //table name
    protected $tableName = 'tb_user';
    protected $conn;
     /**
     * function is used to addRow record
     * @param array $data
     * @return int $lastInsertedId
     */
    public function __construct($conn)
    {
        $this->conn = $conn; // Store the provided connection in the property
    }   


    #ฟังก์ชั่น Insert สำหรับเพิ่มข้อมูล
    public function Insert($data,$table)#ฟังก์ชั่นเพิ่มข้อมูลและดึงไอดีเรคคอร์ดล่าสุด
    {
        return $data;
        die;

        if (!empty($data)) {
            $fileds = $placholders = [];
            foreach ($data as $field => $value) {
                $fileds[] = $field;
                $placholders[] = ":{$field}";
            }
        }

        $sql = "INSERT INTO {$table} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }
    /*-----------จบฟังก์ชั่นที่นำมาแก้ไขเอง--------------*/

    /**
     * function is used to addRow record
     * @param array $data
     * @return int $lastInsertedId
     */
    public function addRow($data, $tableName) #<<<<<<<<<<<<< ฟังก์ชั่นโอเคแล้ว
    {
        if (!empty($data))
        {
            $fileds = $placholders = [];
            foreach ($data as $field => $value)
            {
                $fileds[] = $field;
                $placholders[] = ":{$field}";
            }
        }

        //$sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
        $sql = "INSERT INTO {$tableName} (" . implode(',', $fileds) . ") VALUES (" . implode(',', $placholders) . ")";
        //return $sql;        
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }

    public function update($data, $idUpdate, $tableName)
    {
        if (!empty($data)) {
            $fileds = '';
            $x = 1;
            $filedsCount = count($data);
            foreach ($data as $field => $value) {
                $fileds .= "{$field}=:{$field}";
                if ($x < $filedsCount) {
                    $fileds .= ", ";
                }
                $x++;
            }
        }
        $sql = "UPDATE {$tableName} SET {$fileds} WHERE $idUpdate";

        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            //$data['id'] = $id;
            $stmt->execute($data);
            $this->conn->commit();
            return("Success");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }


    public function updateV2($data, $query, $tableName)
    {
        if (!empty($data)) {
            $fileds = '';
            $x = 1;
            $filedsCount = count($data);
            foreach ($data as $field => $value) {
                $fileds .= "$field=$value";
                if ($x < $filedsCount) {
                    $fileds .= ", ";
                }
                $x++;
            }
        }
        $sql = "UPDATE $tableName SET $fileds WHERE $query";
        //return($sql); exit();
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            //$data['id'] = $id;
            $stmt->execute();
            $this->conn->commit();
            return('Success');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }
    
    //ลบข้อมูลตามไอดีที่ระบุ
    public function deleteRow($id, $tableName, $conditionDel){
        $sql = "DELETE $id FROM {$tableName}  WHERE $conditionDel";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return $stmt->rowCount();
            }
        } catch (PDOException $e) {
            $this->conn->rollback();
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function countAll($sql){
        //$sql = "SELECT * FROM  `$table`";
        $stmt = $this->conn->prepare($sql);
        try{ 
            $stmt->execute();
        }catch(
            PDOException $e){echo $e->getMessage();
        }
     return $stmt->rowCount();
    }    

    public function getCount($txt_query){
        $sql = $txt_query;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_row'];
        //return $result;
    }

    
    /**
     * function is used to get single record based on the column value
     * @param string $fileds
     * @param any $value
     * @return array $results
     */    
    ##ฟังก์ชั่นเรียกเรคคอร์ดที่เลือกมากแสดง
    public function getRow($colunm, $field, $value, $tableName)
    {
        $sql = "SELECT $colunm FROM {$tableName} WHERE {$field}=:{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":{$field}" => $value]);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;
    }

    ##ฟังก์ชั่นเรียกเรคคอร์ดที่เลือกมากแสดง
    public function getRecord($sql)
    {
        $stmt = $this->conn->prepare($sql);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;
    }

    ##ฟังก์ชั่นค้นหาข้อมูล
    public function searchRow($searchText, $conditionSearch, $tableName, $order_by, $start = 0, $limit = 0)
    {
        global $limit_perPage;
        $limit = $limit_perPage;
        $sql = "SELECT * FROM {$tableName} WHERE $conditionSearch ORDER BY $order_by LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':search' => "%{$searchText}%"]);
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

    public function uploadPhoto($file,$path){
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $allowedExtn = ["jpg", "png", "gif", "jpeg"];
            if (in_array($fileExtension, $allowedExtn)) {
                $uploadFileDir = getcwd() . '../../../'.$path.'';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {
                    return $newFileName;
                }
            }
        }
    }    
    
    public function uploadMulti_Photo($file, $num, $path){
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'][$num];
            $fileName = $file['name'][$num];
            $fileSize = $file['size'][$num];
            $fileType = $file['type'][$num];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $allowedExtn = ["jpg", "png", "gif", "jpeg"];
            if (in_array($fileExtension, $allowedExtn)) {
                $uploadFileDir = getcwd() . '../../../'.$path.'';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {
                    return $newFileName;
                }
            }
        }
    }

    public function customSelect($sql) {
        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute();
            $rows = $stmt->fetch(PDO::FETCH_ASSOC); // assuming $result == true
            return $rows;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    //เรียกข้อมูลตามช่วงที่ระบุจาก $start $limit มาแสดง
    public function fetchRows($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }


}