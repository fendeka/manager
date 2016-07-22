<h2 align="center"> ADD </h2>
<form action="../addContact/" method="post">
    <h4 class="inline">First:</h4>
    <input type="text" name="first_name" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Last:</h4>
    <input type="text" name="last_name" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">E-mail:</h4>
    <input type="text" placeholder="address@mail.com" name="email" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Home:</h4>
    <input type="radio" name="best_phone" value="h">
    <input type="text" placeholder="(000)000 0000" name="home_phone" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Work:</h4>
    <input type="radio" name="best_phone" value="w">
    <input type="text" placeholder="000 000 0000" name="work_phone" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Cell:</h4>
    <input type="radio" name="best_phone" value="c" checked="">
    <input type="text" placeholder="000-000-0000" name="cell_phone" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 1:</h4>
    <input type="text" name="address1" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 2:</h4>
    <input type="text" name="address2" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">City:</h4>
    <input type="text" name="city">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">State:</h4>
    <input type="text" name="state" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Zip:</h4>
    <input type="text" name="zip" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Country:</h4>
    <input type="text" name="country" value="">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Birth date:</h4>
    <input type="text" placeholder="0000-00-00" name="birth_date" value="">
    <h5 class="inline"></h5>
    <br>


    <input type="submit" name="add" value="Add">
</form>
<a href="../../ContactsController/showContacts/"> Index </a> <br>