<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title><?= $title ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
#content {
    margin: 0 26px 26px 26px;
}

td,th {
    cursor: default!important;
    white-space: pre;
}

#tbl {
    user-select: none;
}

.w100 {
    width: 100px;
}

.folder {
    float: right;
}
</style>

</head>

<body>
<h3 class="alert alert-primary">
    <?= $title ?>
    <a href="." class="btn btn-secondary btn-sm folder me-4">フォルダ</a>
</h3>
<div id="content">

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="w100">社員コード</th>
                    <th>氏名</th>
                    <th>フリガナ</th>
                    <th>所属</th>
                    <th>性別</th>
                    <th class="text-end">給与</th>
                    <th class="text-end">手当</th>
                    <th>管理者</th>
                    <th>生年月日</th>
                </tr>
            </thead>
            <tbody id="tbl">
                <?= $html ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
