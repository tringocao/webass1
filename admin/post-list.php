<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/datatables/jquery.dataTables.min.css" />

  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/fontawesome/css/fontawesome-all.min.css">
  <script type="text/javascript" src="../lib/dataTables/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
  <title>Posts Management</title>
</head>

<body>
  <div class="container-fluid body">
    <div class="row">
            <div class="col-3" id="left-sidebar">
        <ul class="d-flex flex-column">
          <li class="flex-center py-3 px-3" style="background: #000;">
            <a role="button">
              <i class="fas fa-user-circle"></i>
              <span>MANAGER</span>
            </a>
          </li>
          <li id="deal" class="flex-center-between py-2 px-3">
            <a href="post-list.html" role="tablist">
              <i class="fas fa-piggy-bank mr-2"></i>
              Posts management
            </a>
          </li>
          <li id="page" class="flex-center-between py-2 px-3">
            <a href="food-list.html" role="tablist">
              <i class="far fa-newspaper mr-2"></i>
              Food management
            </a>
          </li>
          <li id="user" class="flex-center-between py-2 px-3">
            <a href="user-list.html" role="tablist">
              <i class="fas fa-users mr-2"></i>
              User management
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-9 py-4" id="main">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Posts Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts List</li>
          </ol>
        </nav>
        <div class="row mb-3 flex-center mt-3">
          <div class="col clearfix">
            <a class="btn btn-primary float-right" href="post-create-edit.html">Tạo mới</a>
          </div>
        </div>
        <table id="table" cellspacing="0" width="100%" class="display table table-condensed table-striped nowrap">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tiêu đề</th>
              <th>Thời gian</th>
              <th>Tác giả</th>
              <th>Tỉnh thành</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <a href="post-create-edit.html">
                  10 thắng cảnh du lịch hấp dẫn nhất Việt Nam
                </a>
              </td>
              <td>01/01/2019</td>
              <td>Tri</td>
              <td>TP. HCM</td>
            </tr>
            <tr>
              <td>2</td>
              <td>
                <a href="post-create-edit.html">
                  10 thắng cảnh du lịch hấp dẫn nhất Việt Nam
                </a>
              </td>
              <td>01/01/2019</td>
              <td>tiki.vn</td>
              <td>TP. HCM</td>
            </tr>
            <tr>
              <td>3</td>
              <td>
                <a href="post-create-edit.html">
                  10 thắng cảnh du lịch hấp dẫn nhất Việt Nam
                </a>
              </td>
              <td>01/01/2019</td>
              <td>Tri</td>
              <td>TP. HCM</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>

</html>