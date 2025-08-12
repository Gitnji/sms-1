<?php
include 'allmodels.php';
class Students extends AllModels{
    protected $table = 'students';
    protected $pk = 'student_id';

    //fetch data
    public function findWithEnrollments(int $id): array {
        $sql = "";
        $stmt = $this->db->prepare($sql);
        $this->bindParams($stmt, [$id]);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}