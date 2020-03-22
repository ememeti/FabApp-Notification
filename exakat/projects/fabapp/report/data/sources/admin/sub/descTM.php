<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/*<br /><a name="l3" />&nbsp;*&nbsp;License&nbsp;-&nbsp;FabApp&nbsp;V&nbsp;0.9<br /><a name="l4" />&nbsp;*&nbsp;2016-2017&nbsp;CC&nbsp;BY-NC-AS&nbsp;UTA&nbsp;FabLab<br /><a name="l5" />&nbsp;*<br /><a name="l6" />&nbsp;*&nbsp;Ajax&nbsp;called&nbsp;by&nbsp;training_certificate.php<br /><a name="l7" />&nbsp;*/<br /><a name="l8" /></span><span style="color: #007700">include_once&nbsp;(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_SERVER</span><span style="color: #007700">,</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">).</span><span style="color: #DD0000">'/connections/db_connect8.php'</span><span style="color: #007700">);<br /><a name="l9" />include_once&nbsp;(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_SERVER</span><span style="color: #007700">,</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">).</span><span style="color: #DD0000">'/class/all_classes.php'</span><span style="color: #007700">);<br /><a name="l10" /><br /><a name="l11" />if&nbsp;(!empty(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"tm_id"</span><span style="color: #007700">)))&nbsp;{<br /><a name="l12" />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">TrainingModule</span><span style="color: #007700">::</span><span style="color: #0000BB">regexTMId</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"tm_id"</span><span style="color: #007700">)))&nbsp;{<br /><a name="l13" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;`trainingmodule`&nbsp;WHERE&nbsp;tm_id&nbsp;=&nbsp;'"</span><span style="color: #007700">.</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"tm_id"</span><span style="color: #007700">).</span><span style="color: #DD0000">"'&nbsp;LIMIT&nbsp;1"</span><span style="color: #007700">;<br /><a name="l14" />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;(</span><span style="color: #DD0000">"Error"</span><span style="color: #007700">);<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l17" />}&nbsp;else&nbsp;{<br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;(</span><span style="color: #DD0000">"Error"</span><span style="color: #007700">);<br /><a name="l19" />}<br /><a name="l20" /><br /><a name="l21" />if&nbsp;(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)){<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;(</span><span style="color: #DD0000">"None"</span><span style="color: #007700">);<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">()){<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'tm_desc'</span><span style="color: #007700">];<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l29" />}&nbsp;else&nbsp;{<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;(</span><span style="color: #DD0000">"ERROR"</span><span style="color: #007700">);<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">;<br /><a name="l32" />}</span><span style="color: #0000BB">?&gt;</span>
</span>