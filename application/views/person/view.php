<?php $data = $this->data['0']?>
<h2 align="center"> Edit </h2>
<form action="../../editContact/<?=$data['id']?>/" method="post">
    <h4 class="inline">First:</h4>
    <input type="text" name="first_name" value="<?=  $data['first_name']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Last:</h4>
    <input type="text" name="last_name" value="<?=  $data['last_name']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">E-mail:</h4>
    <input type="text" placeholder="address@mail.com" name="email" value="<?=  $data['email']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Home:</h4>
    <input type="text" placeholder="(000)000 0000" name="home_phone" value="<?=  $data['home_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Work:</h4>
    <input type="text" placeholder="000 000 0000" name="work_phone" value="<?=  $data['work_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Cell:</h4>
    <input type="text" placeholder="000-000-0000" name="cell_phone" value="<?=  $data['cell_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Best:</h4>
    <input type="text" placeholder="(000)000 0000" name="best_phone" value="<?=  $data['best_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 1:</h4>
    <input type="text" name="address1" value="<?=  $data['address1']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 2:</h4>
    <input type="text" name="address2" value="<?=  $data['address2']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">City:</h4>
    <input type="text" name="city" value="<?=  $data['city']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">State:</h4>
    <input type="text" name="state" value="<?=  $data['state']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Zip:</h4>
    <input type="text" name="zip" value="<?=  $data['zip']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Country:</h4>
    <input type="text" name="country" value="<?=  $data['country']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Birth date:</h4>
    <input type="text" placeholder="0000-00-00" name="birth_date" value="<?=  $data['birth_date']?>">
    <h5 class="inline"></h5>
    <br>

</form>
