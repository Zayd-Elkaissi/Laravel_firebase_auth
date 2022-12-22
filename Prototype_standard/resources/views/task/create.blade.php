Ajouter tache:
<form action="{{route('task.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="nom" name="name"></br>
    <button class="btn btn-primary">Ajouter</button>
</form>