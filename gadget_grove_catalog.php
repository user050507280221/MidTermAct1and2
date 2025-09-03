<?php
    // Sales data for the week
    $weeklySales = [
        ["day" => "Monday", "sales" => 1250, "customers" => 45],
        ["day" => "Tuesday", "sales" => 980, "customers" => 32],
        ["day" => "Wednesday", "sales" => 1450, "customers" => 58],
        ["day" => "Thursday", "sales" => 1120, "customers" => 41],
        ["day" => "Friday", "sales" => 1890, "customers" => 67],
        ["day" => "Saturday", "sales" => 2100, "customers" => 89],
        ["day" => "Sunday", "sales" => 950, "customers" => 28]
    ];
    
    echo "<h3>Weekly Sales Report</h3>";
    
    // Calculate totals
    $totalSales = array_sum(array_column($weeklySales, 'sales'));
    $totalCustomers = array_sum(array_column($weeklySales, 'customers'));
    $averageSales = $totalSales / count($weeklySales);
    $averageCustomers = $totalCustomers / count($weeklySales);
    
    echo "<p><strong>Total Sales:</strong> $" . number_format($totalSales, 2) . "</p>";
    echo "<p><strong>Total Customers:</strong> $totalCustomers</p>";
    echo "<p><strong>Average Daily Sales:</strong> $" . number_format($averageSales, 2) . "</p>";
    echo "<p><strong>Average Daily Customers:</strong> " . round($averageCustomers) . "</p>";
    
    // Find best and worst days
    $salesData = array_column($weeklySales, 'sales');
    $maxSales = max($salesData);
    $minSales = min($salesData);
    
    $bestDay = array_search($maxSales, $salesData);
    $worstDay = array_search($minSales, $salesData);
    
    echo "<p><strong>Best Day:</strong> {$weeklySales[$bestDay]['day']} - $" . number_format($maxSales, 2) . "</p>";
    echo "<p><strong>Worst Day:</strong> {$weeklySales[$worstDay]['day']} - $" . number_format($minSales, 2) . "</p>";
    
    // Sort by sales (descending)
    usort($weeklySales, function($a, $b) {
        return $b['sales'] - $a['sales'];
    });
    
    echo "<h4>Days Ranked by Sales</h4>";
    echo "<table border='1' style='border-collapse: collapse; width: 400px;'>";
    echo "<tr><th>Rank</th><th>Day</th><th>Sales</th><th>Customers</th></tr>";
    
    foreach ($weeklySales as $index => $day) {
        $rank = $index + 1;
        echo "<tr>";
        echo "<td>$rank</td>";
        echo "<td>{$day['day']}</td>";
        echo "<td>$" . number_format($day['sales'], 2) . "</td>";
        echo "<td>{$day['customers']}</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    // Filter high-performing days
    $highPerformanceDays = array_filter($weeklySales, function($day) use ($averageSales) {
        return $day['sales'] > $averageSales;
    });
    
    echo "<h4>High-Performance Days (Above Average)</h4>";
    foreach ($highPerformanceDays as $day) {
        echo "<p>✅ {$day['day']}: $" . number_format($day['sales'], 2) . "</p>";
    }
?>