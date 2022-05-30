<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
@include('navbar')
<body>
    <form class="container3" action="{{route('insert_curriculum')}}" method="POST">
        <div class="containerImg">
            <img src="{{ asset('images/unknow.png') }} " class="profileImg" />
            <button type="button" class="btnImg btn btn-primary">
                <i class="fa fa-camera"></i>
            </button>
        </div>
        <h1 class="align"">personal information.</h1>
        <div class="s1 row">
            <div class=" col-sm-12 col-md-4">
                <div class="">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Full name" />
                </div>
                <div class="">
                    <label for="exampleFormControlInput1">Birth date</label>
                    <input name="birth_date" type="date" class="form-control" 
                        placeholder="ex: gustavo@gmail.com" />
                </div>
            </div>
            <div class=" col-sm-12 col-md-4">
                <div class="">
                    <label for="exampleFormControlInput1">phone number</label>
                    <input name="phone_number" type="bigInteger" class="form-control" 
                    placeholder="ex: 4199671-3751"/>
                </div>
                <div class="">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input name="e_mail" type="email" class="form-control" 
                        placeholder="gustavo@example.com" />
                </div>
            </div>
            <div class=" col-sm-12 col-md-4">
                <div class="">
                    <label for="exampleFormControlInput1">Address</label>
                    <input name="address" type="bitInterger" class="form-control" 
                        placeholder="R Mauricio Rocha 123" />
                </div>    
            </div>
            <div class="">
                    <label for="exampleFormControlTextarea1">About you</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
        </div>
        <button class="btn btn-dark" style="margin-top:15px" type="submit">Send</button>   
    </form>
</body>

</html>