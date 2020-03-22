<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" />header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Access-Control-Allow-Origin:&nbsp;*"</span><span style="color: #007700">);<br /><a name="l2" /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Access-Control-Allow-Methods:&nbsp;GET,&nbsp;POST"</span><span style="color: #007700">);<br /><a name="l3" /><br /><a name="l4" />require_once(&nbsp;</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">.</span><span style="color: #DD0000">"/../connections/db_connect8.php"</span><span style="color: #007700">);<br /><a name="l5" /></span><span style="color: #0000BB">$input_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://input'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><a name="l6" /><br /><a name="l7" /></span><span style="color: #FF8000">/*<br /><a name="l8" />&nbsp;*&nbsp;&nbsp;CC&nbsp;BY-NC-AS&nbsp;UTA&nbsp;FabLab&nbsp;2016-2017<br /><a name="l9" />&nbsp;*&nbsp;<br /><a name="l10" />&nbsp;*&nbsp;&nbsp;Suleiman&nbsp;Barakat&nbsp;&amp;&nbsp;Jon&nbsp;Le<br /><a name="l11" />&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;FabLab&nbsp;@&nbsp;University&nbsp;of&nbsp;Texas&nbsp;at&nbsp;Arlington<br /><a name="l12" />&nbsp;*&nbsp;&nbsp;version:&nbsp;0.9&nbsp;beta&nbsp;(2017-01-16)<br /><a name="l13" />&nbsp;*/<br /><a name="l14" /><br /><a name="l15" />/*<br /><a name="l16" />Missing&nbsp;Logic<br /><a name="l17" /><br /><a name="l18" />Check&nbsp;if&nbsp;rfid_no&nbsp;already&nbsp;exist&nbsp;in&nbsp;the&nbsp;table,&nbsp;if&nbsp;(TRUE)&nbsp;return&nbsp;false;<br /><a name="l19" /><br /><a name="l20" />Check&nbsp;if&nbsp;operator&nbsp;already&nbsp;has&nbsp;an&nbsp;rfid_no,&nbsp;if(TRUE)&nbsp;return&nbsp;false;<br /><a name="l21" /><br /><a name="l22" />Check&nbsp;if&nbsp;operator&nbsp;already&nbsp;has&nbsp;entry&nbsp;in&nbsp;the&nbsp;user's&nbsp;table,&nbsp;if&nbsp;(!TRUE)&nbsp;SQL("Insert...");<br /><a name="l23" />*/<br /><a name="l24" /></span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$input_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">];<br /><a name="l25" /></span><span style="color: #0000BB">$rfid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$input_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'rfid'</span><span style="color: #007700">];<br /><a name="l26" /></span><span style="color: #0000BB">$operator&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">$input_data</span><span style="color: #007700">[</span><span style="color: #DD0000">'operator_id'</span><span style="color: #007700">];<br /><a name="l27" /><br /><a name="l28" />if(&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">"create"&nbsp;</span><span style="color: #007700">){<br /><a name="l29" /><br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;rfid&nbsp;(rfid_no,&nbsp;operator)&nbsp;values&nbsp;(</span><span style="color: #0000BB">$rfid</span><span style="color: #DD0000">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"INSERT&nbsp;INTO&nbsp;users&nbsp;(operator,&nbsp;r_id)&nbsp;values&nbsp;(</span><span style="color: #0000BB">$operator</span><span style="color: #DD0000">,&nbsp;3)"</span><span style="color: #007700">;<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"done"</span><span style="color: #007700">;<br /><a name="l37" /><br /><a name="l38" />}if(&nbsp;</span><span style="color: #0000BB">$type&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">"check"&nbsp;</span><span style="color: #007700">){<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sql&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;operator&nbsp;FROM&nbsp;rfid&nbsp;WHERE&nbsp;rfid_no&nbsp;=&nbsp;</span><span style="color: #0000BB">$rfid</span><span style="color: #DD0000">&nbsp;AND&nbsp;operator&nbsp;=&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mysqli_fetch_row</span><span style="color: #007700">(&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">);<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;if(&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">){<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"No"</span><span style="color: #007700">;<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;}else{<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"Yes"</span><span style="color: #007700">;<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l52" />}<br /><a name="l53" /><br /><a name="l54" /><br /><a name="l55" /></span><span style="color: #0000BB">?&gt;</span>
</span>