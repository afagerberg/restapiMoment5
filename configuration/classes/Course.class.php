<?php
//DT173G moment 5 Alice Fagerberg
class Course {

    //variabler
    private $db;
    private $coursecode;
    private $cname;
    private $progression;
    private $courseplan;

    //constructor
    public function __construct() {
        //mysqli connection
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);

        //check connection
        if ($this->db->connect_error){
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    /**
     * Add course
     * @param string $coursecode
     * @param string $cname
     * @param string $progression
     * @param string $courseplan
     */
    public function addCourse(string $coursecode, string $cname, string $progression, string $courseplan) :bool{
        $this->coursecode = $coursecode;
        $this->cname = $cname;
        $this->progression = $progression;
        $this->courseplan = $courseplan;

        // prepeare statements
        $stmt = $this->db->prepare("INSERT INTO courses (coursecode, cname, progression, courseplan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->coursecode, $this->cname, $this->progression, $this->courseplan);

        // execute statement
        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
        

        $stmt->clode();

    }

    /**
     * Get all courses
     * @return array
     */
    public function getAllCourses() : array {
        $sql = "SELECT * FROM courses ORDER BY progression;";
        $result = $this->db->query($sql);

        // retirn associative array
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * get course by id
     * @param int $id
     * @return array
     */
    public function getCourseById(int $id) : array {
        $code = intval($code);
        
        $sql = "SELECT * FROM courses WHERE id=$id";
        $result = $this->db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    /**
     * update course 
     * @param int $id
     * @param string $coursecode
     * @param string $cname
     * @param string $progression
     * @param string $courseplan
     * return boolean
     */
    function updateCourse(int $id, string $coursecode, string $cname, string $progression, string $courseplan) : bool {

        $this->coursecode = $coursecode;
        $this->cname = $cname;
        $this->progression = $progression;
        $this->courseplan = $courseplan;
        $id = intval($id);

        $stmt = $this->db->prepare("UPDATE courses SET coursecode=?, cname=?, progression=?, courseplan=? WHERE id=$id;");
        $stmt->bind_param("ssss",$this->coursecode, $this->cname, $this->progression, $this->courseplan);

        // execute statement
        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
        

        $stmt->clode();

    }

    /**
     * delete a course by id
     * @param int $id
     * return boolean
     */
    public function deleteCourse(int $id) :bool {
        $id = intval($id);

        $sql = "DELETE FROM courses WHERE id=$id;";
        $result = $this->db->query($sql);

        return $result;
    }
}
