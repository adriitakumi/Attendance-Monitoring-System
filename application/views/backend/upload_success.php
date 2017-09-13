<html>
<head>
    <title>Success Message</title>
</head>
<body>
<h3>Congragulation You Have Successfuly Uploaded</h3>
<!-- Uploaded file specification will show up here -->
<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td>Date</td>
            <td>Transaction</td>
            <td>Person</td>
            <td>Encoded_id</td>
            <td>Door</td>
    </tr>

            <?php foreach($csvData as $field){?>
                <tr>
                    <td><?php echo $field['Date']?></td>
                    <td><?php echo $field['Transaction']?></td>
                    <td><?php echo $field['Person']?></td>
                    <td><?php echo $field['encoded_id']?></td>
                    <td><?php echo $field['Door']?></td>
                </tr>
            <?php }?>
</table>
<p><?php echo anchor('upload/upload_view', 'Upload Another File!'); ?></p>
</body>
</html>