<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DD Viewer</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body { background: #BBB; }
        .container-fluid { background: #FFF; padding: 2em; }
        h2 { margin: 1em 0 .5em; }
        @media (min-width: 1200px) {
            body { padding: 80px; }
            .container-fluid { padding: 40px 60px 20px; }
            h2 { margin: 20px 0 10px; }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    @if(count($connections)>1)
        <div class="form-inline">
            <select id="connection" class="form-control">
                @foreach ($connections as $key => $val)
                    <option value="{{$key}}" @if($key==$connection) selected @endif>{{$key}}</option>
                @endforeach
            </select>
        </div>
    @endif
    @foreach ($tables as $table => $columns)
        <h2>{{ $table }}</h2>
        <div class="table-responsive">
            <table width="100%" align="center" class="table table-bordered ">
                <tr>
                    <th width="20%">Field</th>
                    <th width="20%">Type</th>
                    <th width="10%">Key</th>
                    <th width="10%">Null</th>
                    <th width="10%">Default</th>
                    <th width="30%">Comment</th>
                </tr>
                @foreach ($columns as $column)
                    <tr>
                        <td>{{$column->Field}}</td>
                        <td>{{$column->Type}}</td>
                        <td>{{$column->Key}}</td>
                        <td>{{$column->Null}}</td>
                        <td>{{$column->Default}}</td>
                        <td>{{$column->Comment}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('#connection').change(function(){
            var value = $(this).val();
            location.href = 'ddviewer?connection=' + value;
        });
    })
</script>
</body>
</html>