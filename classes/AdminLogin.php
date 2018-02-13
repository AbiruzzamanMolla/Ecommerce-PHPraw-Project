<?php
include "../lib/session.php";
Session::checkLogin();
include_once "../lib/database.php";
include_once "../helpers/format.php";
?>
<?php
class AdminLogin{
  private $db;
  private $fm;
  // __construct function
  public function __construct(){
    $this->db = new Database();
    $this->fm = new Format();
  }
  public function adminlogin($adminUser, $adminPass){
    $adminUser = $this->fm->validation($adminUser);
    $adminPass = $this->fm->validation($adminPass);
    $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
    $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);
    if(empty($adminUser) || empty($adminPass)){
      $loginmsg = "Username or Password must not be empty.";
      return $loginmsg;
    } else {
      $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' and adminPass = '$adminPass'";
      $result = $this->db->select($query);
      if($result != false){
        $value = $result->fetch_assoc();
        Session::set("adminlogin", true);
        Session::set("adminId", $value['adminId']);
        Session::set("adminUser", $value['adminUser']);
        Session::set("adminName", $value['adminName']);
        header("Location: deshboard.php");
      } else {
        $loginmsg = "Username or Password not matched.";
        return $loginmsg;
      }
    }
  }
}
?>