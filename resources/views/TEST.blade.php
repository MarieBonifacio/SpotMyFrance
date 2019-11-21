coucou
<form method="post" enctype="multipart/form-data" action="{{route('place.store')}}">
    @csrf
    <input type ="text" name="name" value="a"/></br>
    <input type ="text" name="latitude" value="1"/></br>
    <input type ="text" name="longitude" value="2"/></br>
    <input type ="text" name="description" value="bbb"/></br>
    <input type ="text" name="ville" value="3"/></br>
    <input type ="text" name="region" value="4"/></br>
    <input type ="text" name="category" value="5"/></br>
    <input type="file" name="photo"/></br> 
    <button type="submit">Envoyer</button>
</form>