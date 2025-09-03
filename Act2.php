<?php
echo "<h2>Activity 2:</h2>";

$username = "vn5e1_angel";
$role = "administrator";
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 12;

$welcomeMsg = ($role === "administrator") 
    ? "Welcome back, Admin $username!" 
    : "Welcome, $username!";
echo "<p>$welcomeMsg</p>";

$loginMsg = ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently." 
    : "It has been $lastLoginDaysAgo days since your last login.";
echo "<p>$loginMsg</p><br>";

if (!$isActive) {
    echo "Your account is inactive. Please contact support.<br><br>";
} elseif ($role === "administrator") {
    echo "Full access to all admin features.<br><br>";
} elseif ($role === "moderator") {
    echo "Access to Forum Management and User Reports.<br>";
    if ($isPremium) {
        echo "Premium moderation tools unlocked!<br><br>";
    }
} elseif ($role === "member") {
    echo "Access to Forum Posts and Profile Editor.<br>";
    if ($isPremium) {
        echo "Premium content library unlocked!<br><br>";
    }
} else {
    echo "Limited guest access. Please register for more features.<br><br>";
}

$notificationPreference = "sms";

switch ($notificationPreference) {
    case "email":
        echo "Email notifications are enabled.<br>";
        break;
    case "sms":
        echo "SMS notifications are enabled.<br>";
        break;
    case "both":
        echo "Email and SMS notifications are enabled.<br>";
        break;
    case "none":
        echo "Notifications are turned off.<br>";
        break;
    default:
        echo "Unknown notification preference.<br>";
        break;
}
?>
