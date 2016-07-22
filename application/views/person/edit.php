<?php $this->data = $this->data[0]?>
<h2 align="center"> Edit </h2>
<form action="../../editContact/<?=$this->data['id']?>/" method="post">
    <h4 class="inline">First:</h4>
    <input type="text" name="first_name" value="<?=  $this->data['first_name']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Last:</h4>
    <input type="text" name="last_name" value="<?=  $this->data['last_name']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">E-mail:</h4>
    <input type="text" placeholder="address@mail.com" name="email" value="<?=  $this->data['email']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Home:</h4>
    <input type="text" placeholder="(000)000 0000" name="home_phone" value="<?=  $this->data['home_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Work:</h4>
    <input type="text" placeholder="000 000 0000" name="work_phone" value="<?=  $this->data['work_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Cell:</h4>
    <input type="text" placeholder="000-000-0000" name="cell_phone" value="<?=  $this->data['cell_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Best:</h4>
    <input type="text" placeholder="(000)000 0000" name="best_phone" value="<?=  $this->data['best_phone']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 1:</h4>
    <input type="text" name="address1" value="<?=  $this->data['address1']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Address 2:</h4>
    <input type="text" name="address2" value="<?=  $this->data['address2']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">City:</h4>
    <input type="text" name="city" value="<?=  $this->data['city']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">State:</h4>
    <input type="text" name="state" value="<?=  $this->data['state']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Zip:</h4>
    <input type="text" name="zip" value="<?=  $this->data['zip']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Country:</h4>
    <input type="text" name="country" value="<?=  $this->data['country']?>">
    <h5 class="inline"></h5>
    <br>

    <h4 class="inline">Birth date:</h4>
    <input type="text" placeholder="0000-00-00" name="birth_date" value="<?=  $this->data['birth_date']?>">
    <h5 class="inline"></h5>
    <br>

    <input type="submit" name="edit" value="Edit">
</form>
