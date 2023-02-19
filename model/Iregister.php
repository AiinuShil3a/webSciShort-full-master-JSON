<?php
interface Iregister {
    public function getRegisterCourse($cs_id);
    public function registerCourse($course);

}

Class Register implements Iregister {
  private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }
  // public function getRegisterCourse(string $cs_id)
   public function getRegisterCourse($cs_id)
  {
    $sql = "SELECT * FROM sci_cs where cs_id = ".$cs_id;
    $query = $this->ConDB->prepare($sql);
    if( $query->execute()){
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }else {
        return false;
    }
  }
  public function registerCourse($course)
  {
      $sql = "INSERT INTO `sci_login` (`id`, `RegisCID`, `Email`, `name`, `Phonenumber`, `IDnumber`, `educational`)";
      $sql .= " VALUES ('', :RegisCID, :Email, :name, :Phonenumber , :IDnumber , :educational);";
      $query = $this->ConDB->prepare($sql);
      if( $query->execute($course)){
          return true;
      }else {
          return false;
      }
  }

  }
?>
  