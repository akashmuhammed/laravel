<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>
Home Page
</h1>
<BR>
@foreach ($users as $color)
 {{$color->email}} <br>
@endforeach

@foreach ($migrations as $migration)
 {{$migration}} <br>
@endforeach


@foreach ($datas as $data)
{{$data->name}}<br>
@endforeach
        
@for ($i=0;$i<100;$i++)
<br>
{{$i}}<br>
@foreach ($datas as $data)

{{$data->name}}<br>
{{$data->email}}
@endforeach

@endfor
       
    </body>
</html>
