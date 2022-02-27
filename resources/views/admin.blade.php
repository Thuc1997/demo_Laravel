
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body {
          color: #404E67;
          background: #F5F7FA;
      font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
      width: 700px;
      margin: 30px auto;
          background: #fff;
          padding: 20px;	
          box-shadow: 0 1px 1px rgba(0,0,0,.05);
      }
      .table-title {
          padding-bottom: 10px;
          margin: 0 0 10px;
      }
      .table-title h2 {
          margin: 6px 0 0;
          font-size: 22px;
      }
      .table-title .add-new {
          float: right;
      height: 30px;
      font-weight: bold;
      font-size: 12px;
      text-shadow: none;
      min-width: 100px;
      border-radius: 50px;
      line-height: 13px;
      }
    .table-title .add-new i {
      margin-right: 4px;
    }
      table.table {
          table-layout: fixed;
      }
      table.table tr th, table.table tr td {
          border-color: #e9e9e9;
      }
      table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
      }
      table.table th:last-child {
          width: 100px;
      }
      table.table td a {
      cursor: pointer;
          display: inline-block;
          margin: 0 5px;
      min-width: 24px;
      }    
    table.table td a.add {
          color: #27C46B;
      }
      table.table td a.edit {
          color: #FFC107;
      }
      table.table td a.delete {
          color: #E34724;
      }
      table.table td i {
          font-size: 19px;
      }
    table.table td a.add i {
          font-size: 24px;
        margin-right: -1px;
          position: relative;
          top: 3px;
      }    
      table.table .form-control {
          height: 32px;
          line-height: 32px;
          box-shadow: none;
          border-radius: 2px;
      }
    table.table .form-control.error {
      border-color: #f50000;
    }
    table.table td .add {
      display: none;
    }
  </style>
  
  </head>
  <body>
      <div class="container">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-8"><h2>Danh sách <b>User</b></h2></div>
                      <div class="col-sm-4">
                          <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger add-new">
                                {{ __('Logout') }}
                            </button>
                          </form> 
                      </div>
                  </div>
              </div>
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th style="width:7%" class="text-center">Id</th>
                          <th style="width:25%">Name</th>
                          <th style="width:40%">Email</th>
                          <th style="width:13%">role</th>
                          <th style="width:15%" class="text-center">Actions</th>
                      </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $user)
                      <tr>
                          <td class="text-center">{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          @if ($user->roles==1)
                          <td>{{'Admin'}}</td>
                          @else
                          <td>{{'User'}}</td>
                          @endif
                          <td class="text-center">
                              <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                              <a class="edit" title="Edit" data-toggle="tooltip" href={{"edit/".$user->id}}><i class="material-icons">&#xE254;</i></a>
                               <a class="delete" onclick="return confirm('Bạn thực sự muốn xóa?')"  data-toggle="tooltip" href={{"delete/$user->id"}}><i class="material-icons">&#xE872;</i></a>
                              
                          </td>
                      </tr>
                      @endforeach
           
                  </tbody>
              </table>
              <div class="pa text-right">
                {{ $data->links() }}
              </div>
          </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>     
  </body>
  </html>

 