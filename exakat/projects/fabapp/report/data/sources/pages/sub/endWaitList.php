<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #007700">include_once&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">].</span><span style="color: #DD0000">'/pages/header.php'</span><span style="color: #007700">);<br /><a name="l3" /><br /><a name="l4" />if&nbsp;(!</span><span style="color: #0000BB">$staff&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$staff</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoleID</span><span style="color: #007700">()&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'LvlOfStaff'</span><span style="color: #007700">]){<br /><a name="l5" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Not&nbsp;Authorized&nbsp;to&nbsp;see&nbsp;this&nbsp;Page<br /><a name="l6" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'error_msg'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"You&nbsp;are&nbsp;unable&nbsp;to&nbsp;view&nbsp;this&nbsp;page."</span><span style="color: #007700">;<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location:&nbsp;/index.php'</span><span style="color: #007700">);<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;exit();<br /><a name="l9" />}<br /><a name="l10" /><br /><a name="l11" /></span><span style="color: #FF8000">//&nbsp;Checks<br /><a name="l12" /></span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'q_id'</span><span style="color: #007700">]))&nbsp;{<br /><a name="l13" /><br /><a name="l14" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;the&nbsp;message&nbsp;is&nbsp;set&nbsp;then&nbsp;send&nbsp;a&nbsp;message&nbsp;to&nbsp;the&nbsp;user&nbsp;with&nbsp;this&nbsp;queue&nbsp;ID<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]))&nbsp;{<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sendMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'q_id'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'message'</span><span style="color: #007700">]);<br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l18" /><br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Remove&nbsp;the&nbsp;user&nbsp;from&nbsp;the&nbsp;wait&nbsp;queue<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">else&nbsp;{<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">removeFromQueue</span><span style="color: #007700">(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'q_id'</span><span style="color: #007700">]);<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'loc'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Location:/index.php"</span><span style="color: #007700">);<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #DD0000">'loc'</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Location:/pages/wait_ticket.php"</span><span style="color: #007700">);<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l30" />}<br /><a name="l31" /><br /><a name="l32" />function&nbsp;</span><span style="color: #0000BB">removeFromQueue</span><span style="color: #007700">(</span><span style="color: #0000BB">$q_id</span><span style="color: #007700">)&nbsp;{<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$queueItem&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Wait_queue</span><span style="color: #007700">(</span><span style="color: #0000BB">$q_id</span><span style="color: #007700">);<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errorMsg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"error"</span><span style="color: #007700">;<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Delete&nbsp;the&nbsp;user&nbsp;from&nbsp;the&nbsp;waitlist<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Wait_queue</span><span style="color: #007700">::</span><span style="color: #0000BB">deleteFromWaitQueue</span><span style="color: #007700">(</span><span style="color: #0000BB">$queueItem</span><span style="color: #007700">);<br /><a name="l42" />}<br /><a name="l43" />&nbsp;<br /><a name="l44" />function&nbsp;</span><span style="color: #0000BB">sendMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$q_id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">)&nbsp;{<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">.</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'dateFormat'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"now"</span><span style="color: #007700">)+</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">"wait_period"</span><span style="color: #007700">]);<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Notifications</span><span style="color: #007700">::</span><span style="color: #0000BB">sendNotification</span><span style="color: #007700">(</span><span style="color: #0000BB">$q_id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"FabApp&nbsp;Notification"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><a name="l47" />}<br /><a name="l48" /><br /><a name="l49" /></span><span style="color: #0000BB">?&gt;</span>
</span>