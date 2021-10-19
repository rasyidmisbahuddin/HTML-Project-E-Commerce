<?php
echo "<h2>Tambah User</h2>
<form method=post action=inputuser.php>
<table border=1>
	<tr>
	 <td>UserName</td>
	 <td>: <input type=text name='id_user'></td>
	</tr>
	<tr>
	 <td>Password</td>
	 <td>: <input type=password name='password'></td>
	</tr>
	<tr>
	 <td>Nama Lengkap</td>
	 <td>: <input type=text name='nama_lengkap' size=30></td>
	</tr>
	<tr>
	 <td>Email</td>
	 <td>: <input type=text name='email' size=30></td>
	 </tr>
	 <tr>
	  <td colspan=2><input type=submit value=Simpan>
	  				<input type=button value=Batal onclick=self.history.back()></td>
	 </tr>
</table>
</form>"
?>
	 