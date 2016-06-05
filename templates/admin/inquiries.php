<?php
session_start();
if(!$_SESSION){
    header("Location: http://localhost/CV/login.php");
}
include __DIR__ . '\header.php'; ?>
<?php include 'C:\xampp\htdocs\CV\src\backend\inquiries.php';
//var_dump($_SESSION);die();

$inquiries = new inquiries();
$inquiriesArray = $inquiries->getInquiries();
?>
    <div class="container">
        <h4>Inquiries</h4>
        <table>
            <thead>
                <tr>
                    <th data-field="id">First name</th>
                    <th data-field="name">Last name</th>
                    <th data-field="price">Email</th>
                    <th data-field="id">Phone</th>
                    <th data-field="id">Comment</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($inquiriesArray as $inquiry) { ?>
                    <tr>
                        <td><?php echo $inquiry['firstname']; ?></td>
                        <td><?php echo $inquiry['lastname']; ?></td>
                        <td><?php echo $inquiry['phone']; ?></td>
                        <td><?php echo $inquiry['email']; ?></td>
                        <td><?php echo $inquiry['comment']; ?></td>
                    </tr>
                <?php
                }?>
            </tbody>

        </table>
    </div>

<?php include __DIR__ . '\footer.php'; ?>