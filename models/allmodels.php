<?php
include "../core/dbconnect.php";
class AllModels extends Database {
    protected $db;      
    protected $table;  
    protected $pk = 'id';

    public function __construct() {
        $this->db = $this->getConnection();
    }

    // Determine mysqli bind types 
    protected function getBindTypes(array $values): string {
        $types = '';
        foreach ($values as $v) {
            if (is_int($v)) $types .= 'i';
            elseif (is_float($v) || is_double($v)) $types .= 'd';
            else $types .= 's';
        }
        return $types;
    }

    // Utility to bind params
    protected function bindParams(&$stmt, array $params) {
        if (!$params) return;
        $types = $this->getBindTypes($params);
        $refs = [];
        $refs[] = $types;
        foreach ($params as $k => $v) {
            $refs[] = &$params[$k];
        }
        call_user_func_array([$stmt, 'bind_param'], $refs);
    }

    // fetch all 
    public function all(array $conditions = []): array {
        $sql = "SELECT * FROM `{$this->table}` WHERE deleted = 0";
        $params = [];
        if ($conditions) {
            foreach ($conditions as $col => $val) {
                $sql .= " AND `{$col}` = ?";
                $params[] = $val;
            }
        }
        $stmt = $this->db->prepare($sql);
        if ($params) $this->bindParams($stmt, $params);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function find(int $id) {
        $sql = "SELECT * FROM `{$this->table}` WHERE `{$this->pk}` = ? AND deleted = 0 LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $this->bindParams($stmt, [$id]);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_assoc() ?: null;
    }

    public function create(array $data): int {
        $cols = array_keys($data);
        $placeholders = array_fill(0, count($cols), '?');
        $sql = "INSERT INTO `{$this->table}` (`" . implode('`,`', $cols) . "`) VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $this->db->prepare($sql);
        $this->bindParams($stmt, array_values($data));
        $stmt->execute();
        return $this->db->insert_id;
    }

    public function update(int $id, array $data): bool {
        $sets = [];
        foreach ($data as $col => $v) $sets[] = "`$col` = ?";
        $sql = "UPDATE `{$this->table}` SET " . implode(',', $sets) . " WHERE `{$this->pk}` = ?";
        $params = array_values($data);
        $params[] = $id;
        $stmt = $this->db->prepare($sql);
        $this->bindParams($stmt, $params);
        return $stmt->execute();
    }

    // soft delete
    public function softDelete(int $id): bool {
        $sql = "UPDATE `{$this->table}` SET deleted = 1, deleted_at = NOW() WHERE `{$this->pk}` = ?";
        $stmt = $this->db->prepare($sql);
        $this->bindParams($stmt, [$id]);
        return $stmt->execute();
    }
}
