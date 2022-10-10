<div class="contaier mt-5">
    <form method="post" action="{{route('add.dump')}}">
        @csrf

        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Surname:</label>
        <input type="text" name="surname">
        <br>
        <label>Chose Active</label><br>
        <input type="radio" NAME="is_active" VALUE="1">Active<br>
        <input type="radio" NAME="is_active" VALUE="0">Not Active<br>
        <input type="submit" NAME="button" VALUE="Send"><br>
        <label>Type:</label>
        <input type="text" name="type">
        <button type="submit">Register</button>
    </form>
</div>

