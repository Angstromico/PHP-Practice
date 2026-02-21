<?php
$size = 's';

switch($size) {
    case 's':
        echo "Small size selected.\n";
        break;
    case 'm':
        echo "Medium size selected.\n";
        break;
    case 'l':
        echo "Large size selected.\n";
        break;
    default:
        echo "Invalid size selected.\n";
}

//Examples where is good not to use break 

function getDayCategory($day) {
    switch (strtolower($day)) {
        case 'monday':
        case 'tuesday':
        case 'wednesday':
        case 'thursday':
        case 'friday':
            return "Working Day. ¡A darle!\n";
        case 'saturday':
        case 'sunday':
            return "Weekend! Time to relax.\n";
        default:
            return "That day doesn't exist on this planet.\n";
    }
}

echo getDayCategory('Monday');
echo getDayCategory('Saturday');
echo getDayCategory('Funday');

$userRole = 'admin';
$permissions = [];

switch ($userRole) {
    case 'admin':
        $permissions[] = 'delete_users';
        // No break, adminds also have editor and subscriber permissions
    case 'editor':
        $permissions[] = 'edit_posts';
        // No break, editors also have subscriber permissions
    case 'subscriber':
        $permissions[] = 'view_content';
        break;
}

echo "Permissions for $userRole: " . implode(', ', $permissions) . "\n";