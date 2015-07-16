<?php
$title = "home page";
include 'header.php';
?>
<div class="clear"></div>
<div class="main">
    Hello here starts main section and content
</div>
<table class="table table-bordered table-striped">
    <tr>
        <th>
            name
        </th>
        <th>
            city
        </th>
        <th>
            address
        </th>
    </tr>
    <tr>
        <td>
            ravi
        </td>
        <td>
            indore
        </td>
        <td>
            sadsad
        </td>
    </tr>
    <tr>
        <td>
            Santosh
        </td>
        <td>
            bhopal
        </td>
        <td>
            sadsad
        </td>
    </tr>
</table>
<?php
$sql = " INSERT INTO users(name,city,address)VALUES ('Ravi', 'ujjain', 'baghana');";
$sql .= " INSERT INTO users(name,city,address)VALUES ('Vimal', 'dewas', 'palia');";
$sql .= " INSERT INTO users(name,city,address)VALUES ('Ashish', 'Bhpoal', 'kshipra');";
$chek = $db->co->multi_query($sql);

if ($chek === TRUE) {
    // output data of each row
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $chek->error;
}
$db->co->close();

include 'footer.php';
?>      
