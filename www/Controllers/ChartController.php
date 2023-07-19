<?php
namespace App\Controllers;
use App\Models\ChartModel;

class ChartController {
    public function displayChart() {
        // Instanciation du modèle du graphique
        $chartModel = new ChartModel();
        $chartModel2 = new ChartModel();

        // Récupération des données du graphique depuis le modèle
        $pageStatusCount = $chartModel->getPageStatusCount();
        $userRoleData = $chartModel2->getUserRoleData();
        // Conversion des données en un format approprié pour le graphique
        
        //Graph 1
        $formattedData = [];
        foreach ($pageStatusCount as $data) {
            $formattedData[] = [
                "status" => $data["status"],
                "count" => (int)$data["count"]
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
        // Inclusion de la vue pour afficher le graphique
        include 'Views/Main/dashboard.view.php';
    }
}
?>
