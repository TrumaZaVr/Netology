<?php
$Phonebook = file_get_contents('phonebook.json');
$data = json_decode($Phonebook, true);
?>

<html>
<table>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Address</td>
        <td>Phone Number</td>
    </tr>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['firstName']; ?></td>
            <td><?php echo $item['lastName']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['phoneNumber']; ?></td>
        </tr>
    <?php } ?>
</table>
</html>