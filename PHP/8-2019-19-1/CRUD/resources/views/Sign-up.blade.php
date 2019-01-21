


<form action="{{asset ('sign-up-success')}}" method="POST">
{{csrf_field()}}
<input type="text" name="ten">
<input type="text" name= "email"> 
<button type ="submit">Sign up</button></form>