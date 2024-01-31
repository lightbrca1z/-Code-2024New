<?php
$row_styles = array('even','odd');
$dinner = array('Sweet Corn and Asapragus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
print "<table>";

for($i = 0, $num_dishes = count($dinner);$i < $num_dishes; $i++){
    print '<tr class="'.$row_styles[$i % 2].'">';
    print "<td>Element $i</td><td>$dinner[$i]</td></tr>";
}

print '</table>';

?>