<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <title>Document</title>
</head>
<body>

  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <h2 class="">Edit page</h2>
        <form action="{{ route('promotion.update', ['id'=> $promotion->id])}}" method="post">
          @csrf
          {{-- @method('PUT') --}}
          <div class="i has-success">
         <input type="text" class="form-control" name="nameUpdate" value={{ $promotion->name }}>
         <button type="submit" class="btn btn-primary btn-sm active mt-3">Update</button>
        </div>
        </form>
    </div>
</div>

    {{-- <h2> Edit page</h2> --}}



     <div class="container">
      <div class="table-responsive">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-xs-6">
                          <h2>Manage <b>Apprenants</b></h2>
                      </div>
                      <div class="col-xs-6">
                          <a href="/apprenant/create{{'/'.$promotion->id}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span> Ajouter</span></a>
                          <form action="" class="d-flex col-md-6" id="for" method="POST">
                              <i class="bi bi-search" id="searchi"></i>
                              <input class="form-control" placeholder="Search" type="search" id="search" name="input" >
                            </form>	
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th>
                              
                          </th>
                          <th>Prenom de promotion</th>
                          <th>Nom de promotion</th>
                          <th>Email</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody id="show">
                      @foreach ($apprenants as $item)
                      <tr>
                          <td>

                          </td>
                          <td>{{$item->first_name}}</td>
                          <td>{{$item->last_name}}</td>
                          <td>{{$item->email}}</td>
                          <td>
                               <a href="/apprenant/edit/{{$item->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Éditer">&#xE254;</i></a>
                              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Effacer">&#xE872;</i></a>
                          </td>
                          
                      </tr>

                      <div id="deleteEmployeeModal" class="modal fade">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                         <form>
                                             <div class="modal-header">						
                                                 <h4 class="modal-title">Effacer Apprenant</h4>
                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                                                 </button>
                                             </div>
                                             <div class="modal-body">					
                                                 <p>Voulez-vous vraiment supprimer ces apprenant ?</p>
                                                 <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                                             </div>
                                             <div class="modal-footer">
                                                 <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                 <a href="{{ route('apprenant.destroy' , $item->id ) }}" class="btn btn-danger" >Delete</a>
                                                 {{-- <input type="submit" class="btn btn-danger" value="Delete"> --}}
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>        
  </div>
     


     <br>
     {{-- <a href="/apprenant/create{{'/'.$promotion->id}}">Add Apprenant</a>
     <input type="text" name="search" id="search">
    <div id="show"></div>
     <ul>
        @foreach ($apprenants as $item)
        <li class="text-gray-900">
            {{$item->first_name}} 
            {{$item->last_name}} 
            {{$item->email}} 

        </li>
        <a href="/apprenant/edit/{{$item-}}">>idEdit</a>
        <a href="{{ route('apprenant.destroy' , $item->id ) }}">Delete</a>
        @endforeach
     </ul> --}}
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <script type="text/javascript">
        $(document).ready(function () {
          $('#search').keyup(function () {
            var input = $(this).val();
            // alert(input);
            if (input != ' ') {
              $.ajax({
                type:'get',
                url: '{{ route("apprenant.search")}}',
                // method: "POST",
                data: { key: input },
                success: function (data) {
                  $('#show').html(data);
                }
              });
  
            }

        });
        });
      </script>
</body>
</html>