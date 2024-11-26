<?php
// Define city arrays for each state
$arr_guj = array('SURAT', 'AHEMEDABAD', 'VADODARA', 'VALSAD');
$arr_raj = array('JAIPUR', 'UDAYPUR', 'CHHITOD');
$arr_mah = array('MUMBAI', 'SIRDI', 'NAGPUR');

// Get the query parameter 'q'
$q = isset($_GET['q']) ? trim($_GET['q']) : '';

if ($q !== '') {
    switch (strtoupper($q)) {
        case 'GUJARAT':
            echo "<select id='city-select'>";
            foreach ($arr_guj as $city) {
                echo "<option value='$city'>$city</option>";
            }
            echo "</select>";
            break;

        case 'RAJSTHAN':
            echo "<select id='city-select'>";
            foreach ($arr_raj as $city) {
                echo "<option value='$city'>$city</option>";
            }
            echo "</select>";
            break;

        case 'MAHARASTRA':
            echo "<select id='city-select'>";
            foreach ($arr_mah as $city) {
                echo "<option value='$city'>$city</option>";
            }
            echo "</select>";
            break;

        default:
            echo ""; // No result for invalid state
            break;
    }
} else {
    echo ""; // No result for empty query
}
