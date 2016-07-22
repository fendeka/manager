<form>
    <table align="left" cellspacing="5" cellpadding="8">
        <tr>
            <td> <b>№</b> </td>
            <td> <a href="">last name</a>
            <td> <a href="">first name</a>
            <td> <b>E-Mail</b> </td>
            <td> <b>Best Phone</b> </td>
            <td> <b>Action</b> </td>
            <td> <b> </b> </td>
        </tr>

        <?php
        $number =1;
            foreach ($this->data as $item => $value){
                echo
                    '<tr>  
                        <td>' . $number . '</td>
                        <td>' . $value['last_name'] . '</td>
                        <td>' . $value['first_name'] . '</td>
                        <td>' . $value['email'] . '</td>
                        <td>' . $value['best_phone'] . '</td>
                        <td>' . '<a href="../editContact/'. $value["id"].'/">edit</a>'
                              . '/'
                              . '<a href="../viewContact/'. $value["id"].'/">view</td>
                        <td>' . '<a href="../deleteContact/'. $value["id"].'/">del</td>'.
                    '</tr>';
                $number ++;
            }


        ?>
        <?php
        //echo "<pre>";
        //print_r($this->data);
        ?>
    </table>
</form>
<a href="../addContact/"> Add </a><br>
<a href=""> Event </a><br>
