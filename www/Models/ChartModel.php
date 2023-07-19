<?php
namespace App\Models;
use App\Core\Sql;

class ChartModel extends Sql {
    public function getPageStatusCount() {
        $query = "SELECT COUNT(*) AS count, status FROM esgi_pages GROUP BY status";
        $pageStatusCount = $this->fetchAll($query);
        return $pageStatusCount;
    }
    public function getUserRoleData() {
        $query = "SELECT role, COUNT(*) AS count FROM esgi_user GROUP BY role";
        $data = $this->fetchAll($query);
        return $data;
    }
}
?>
