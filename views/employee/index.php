<div style="text-align:center;margin-top:15px;">
	<img src="https://3wjbgp3dvf7b3bp7mwjeonkl-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/Switch-Media-web-logo-2016-1.png"/>
</div>
<table id="example">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Department</th>
      <th>More</th>
    </tr>
  </thead>
</table>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://admin.justbuylive.in/resources/plugins/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

<link rel="stylesheet" type="text/css" href="http://admin.justbuylive.in/resources/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="views/employee/style.css" media="screen" />

    



<script>
$(function(){
  $("#example").dataTable({
    "ajax": "/~sharibco/?controller=employee&action=getUsers",
    "initComplete": function(settings, json) {
      $("a.employee_link").fancybox();
    }
  });

})
</script>