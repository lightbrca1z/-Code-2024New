<?php
$meal = array('breakfast' => 'Walnut Bun',
             'lunch' => 'Cashew Nuts and White Mushrooms',
            'snack' => 'Dried Mulberries',
            'dinner' => 'Eggplant with chili Sauce');
print "<table><br/>";
foreach($meal as $key => $value){
    print "<tr><td>$key</td><td>$value</td></tr><br/>";
}
print '</table>';

?>