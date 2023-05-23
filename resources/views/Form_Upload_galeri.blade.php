@extends('layouts.app')
@section('content')
    <html>

    <head>
        <style>
         input {
            display: none;
            border: 3px;
         } 
         label {
            align-items: center;
            height: 350px;
            width: 250px;
            border-radius: 6px;
            border: 1px dashed #999;
            /* background: red; */
         }
         label:hover {
            color: brown;
            border:  1px dashed grey;
         }
         .center {
            align-content: center;
            align-items: center;
            display:flex;
            right: 100px;
            width: 30cm;
         }


        </style>
    </head>

    <body>
        <form action="" method="POST">
            <input type="file" id="file" />
            <label for="file">
                <div class="center">
                <i class="bi bi-upload"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                  </svg></i>
                </div>
            </label>
            <button class="btn btn-primary">submit</button>
        </form>
    </body>

    </html>
@endsection
