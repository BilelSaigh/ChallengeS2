<?php
namespace App\Controllers;
use App\Models\ChartModel;

class ChartController {
    public function displayChart() {
        // Instanciation du modèle du graphique
        $chartModel = new ChartModel();
        $chartModel2 = new ChartModel();
        $chartModel3 = new ChartModel();
        // Récupération des données du graphique depuis le modèle
        $chartData = $chartModel->getChartData();
        $userRoleData = $chartModel2->getUserRoleData();
        $userStats = $chartModel->getUserStats();
        // Conversion des données en un format approprié pour le graphique
        
        //Graph 1
        $formattedChartData = [];
        foreach ($chartData as $data) {
            $formattedChartData[] = [
                "prenom" => $data["firstname"],
                "nombre_utilisateurs" => (int)$data["nombre_utilisateurs"]
            ];
        }

        //Graph 2
        $chartData= [];
        foreach ($userRoleData as $data) {
            $chartData[] = [
                "role" => $data["role"],
                "count" => (int) $data["count"]
            ];
        }

        //Graph 3
        $formattedStats = [];
        foreach ($userStats as $data) {
            $formattedStats[] = [
                "date" => date("Y-m-d", strtotime($data["date_inserted"])),
                "count" => (int)$data["count"]
            ];
        }
        // Inclusion de la vue pour afficher le graphique
        include 'Views/Main/dashboard.view.php';
    }
}
?>
