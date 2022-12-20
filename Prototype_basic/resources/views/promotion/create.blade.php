<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <title>Document</title>
</head>
<body>

    

    <div class="container pt-5 mt-5">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row ">
                        <div class="col-xs-4">
                            <h2>Manage <b>Promotion</b></h2>
                        </div>
                        <div class="col-xs-8 ">
                            
                            <form action="{{route('promotion.store')}}" class="d-flex" id="for" method="POST">
                                @csrf
                                <input name="name" type="text" class="form-control" class="col-md-6" placeholder="Add"  value="{{ old('name')}}" id="" name="input" >
                                <button type="submit" class="btn btn-success col-md-3"><i class="material-icons">&#xE147;</i> <span> Ajouter</span></button>
                            </form>	
                        </div>
                    </div>
                </div>
                @error('name')
                <label class="pt-1" id="error">
                     {{$message}}
                </label>
                    
                @enderror
            </div>
        </div>
    </div>
    


    {{-- <form action="/store" method="post">
        @csrf
     <input type="text" name="name" value="{{ old('name')}}">
     @error('name')
     <div class="py-4 text-gray-900">
          {{$message}}
     </div>
         
     @enderror
     <button type="submit">Ajoter</button>
    </form> --}}
</body>
</html>