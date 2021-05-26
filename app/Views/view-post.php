<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter 4 CRUD Tutorial - Edit Post Form With Validation Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <?= \Config\Services::validation()->listErrors(); ?>
        <span class="d-none alert alert-success mb-3" id="res_message"></span>

        <div class="row">
            <div class="col-md-9">           
                <table>
                    <thead>
                        <tr>
                            <td id="id"><?php echo $post['id']; ?></td>
                            <td id="title"><?php echo $post['title']; ?></td>
                        </tr>
                    </thaed>
                    <tbody>
                        <tr>
                            <td id="description"> <?php echo $post['description']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>