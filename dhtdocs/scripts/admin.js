$(document).ready(function(){
    $('#admin_select').change(function(){
        var choice = $(this).val();
    	$('#data').load('adm_opt.php', { val: choice });
    });
});

