<?php 
    function drawLine ($week) {
        $currentDay = date('d');
        for($i = 0; $i < count($week); $i++) {
            if ($week[$i] == $currentDay) {
                $week[$i] = "<span style=\"color:red;\">$week[$i]</span>";
            };
        };

        return "
            <tr>
                <td>{$week[0]}</td>
                <td>{$week[1]}</td>
                <td>{$week[2]}</td>
                <td>{$week[3]}</td>
                <td>{$week[4]}</td>
                <td>{$week[5]}</td>
                <td>{$week[6]}</td>
            </tr>
        ";
    }

    function createCalendar () {
        $calendar = '';
        $day = 1;
        $week = [];
        for($i = 0; $i < 32; $i++) {
            $week[] = $day;

            if (count($week) == 7) {
                $calendar .= drawLine($week);
                $week = [];
            }

            $day++;
        };

        $calendar .= "
            <tr>
                <td>{$week[0]}</td>
                <td>{$week[1]}</td>
                <td>{$week[2]}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        ";
        

        return $calendar;
    }

?>

<table border="1">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
    </tr>
    <?php echo createCalendar();?>

</table>

