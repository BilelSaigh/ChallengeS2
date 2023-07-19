<?php
namespace App\Models;
use App\Core\Sql;

class ChartModel extends Sql {
    public function getChartData() {
        $query = "SELECT firstname, COUNT(*) AS nombre_utilisateurs FROM esgi_user GROUP BY firstname";
        $chartData = $this->fetchAll($query);
        return $chartData;
    }
    public function getUserRoleData() {
        $query = "SELECT role, COUNT(*) AS count FROM esgi_user GROUP BY role";
        $data = $this->fetchAll($query);
        return $data;
    }
    public function getUserStats() {
        $query = "SELECT date_inserted, COUNT(*) AS count FROM esgi_user GROUP BY date_inserted ORDER BY date_inserted";
        $userStats = $this->fetchAll($query);
        return $userStats;
    }
}
?>
