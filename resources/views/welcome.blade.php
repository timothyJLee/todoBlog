<!DOCTYPE html>

@extends('app')

@section('content')
       <html>
    <h2>
        <title>ToDoManager</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            h2, h3 {
                height: 100%;
            }

            h3 {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </h2>
    <h3>
        <div class="container">
            <div class="content">
                <div class="title">ToDo Manager</div>
            </div>
        </div>
    </h3>
</html>

    @endsection

