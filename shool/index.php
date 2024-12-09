<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Compute Salary</title>
</head>
<body>
    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="starus">Civil Status</label>
                <input type="select" class="form-control" id="status" placeholder="Select Civil Status">
            </div>
            <div class="form-group">
                <label for="message">メッセージ</label>
                <textarea class="form-control" id="message" rows="3" placeholder="メッセージを入力してください"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>