<style>
    table th,td{ border-bottom : 2px solid grey; text-align: center;width:200px}
    table td{ border-left : 1px dotted grey; text-align: center;width:200px}
</style>
<div class="span5 " >
    <h1><span id="neogen">Create User</span></h1>
    <br />
    <?php echo Form::open(array('id' => 'form1', 'action' => 'user/submit')); ?>
    <input name='name' type='text' placeholder='Name'required autofocus /> 
    <br>
    <input name='password' type='password' placeholder='Password'required  /> 
    <br>
    <div class="row" style="overflow-x: none">

        <table >
            <tr>
                <th>invoice single</th>
                <th>invoice monthly</th>
                <th>invoice monthly new</th>
                <th>invoice monthly details</th>
                <th>panel global</th>
                <th>panel local</th>
                <th>archive single</th>
                <th>archive monthly</th>
                <th>user list</th>
                <th>user create</th>

            </tr>
            <td><input id="chck1"  type="checkbox" value="1" name="invoice_single" /></td>
            <td><input id="chck2"  type="checkbox" value="1" name="invoice_monthly" /></td>
            <td><input id="chck3"  type="checkbox" value="1" name="invoice_monthly_new" /></td>
            <td><input id="chck4"  type="checkbox" value="1" name="invoice_monthly_details" /></td>
            <td><input id="chck5"  type="checkbox" value="1" name="panel_global" /></td>
            <td><input id="chck6"  type="checkbox" value="1" name="panel_local"  /></td>
            <td><input id="chck7"  type="checkbox" value="1" name="archive_single" /></td>
            <td><input id="chck8"  type="checkbox" value="1" name="archive_monthly" /></td>
            <td><input id="chck9"  type="checkbox" value="1" name="user_list" /></td>
            <td><input id="chck10"  type="checkbox" value="1" name="user_create" /></td>

            <? echo Form::close() ?>

            </tr>
        </table>

    </div>
    <input name='submit' class="btn btn-danger btn-large" onclick="default_val()" type='button' value="Create" placeholder='Submit'required  /> 
</div>

<script>
        function default_val() {
            for (var i = 1; i <= 10; i++) {
                var id = 'chck' + i;

                if (document.getElementById(id).checked == false) {
                    console.log('F' + id);
                    document.getElementById(id).value = 0;
                }

            }
            $("#form1").submit();
        }


</script>
