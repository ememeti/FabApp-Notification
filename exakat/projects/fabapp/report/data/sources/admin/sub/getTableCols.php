<span style="color: #000000">
<span style="color: #0000BB">&lt;?php&nbsp;&nbsp;<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #007700">include_once&nbsp;(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_SERVER</span><span style="color: #007700">,</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">).</span><span style="color: #DD0000">'/connections/db_connect8.php'</span><span style="color: #007700">);<br /><a name="l3" />include_once&nbsp;(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_SERVER</span><span style="color: #007700">,</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">).</span><span style="color: #DD0000">'/class/all_classes.php'</span><span style="color: #007700">);<br /><a name="l4" /><br /><a name="l5" />if&nbsp;(!empty(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"table_id"</span><span style="color: #007700">)))&nbsp;{<br /><a name="l6" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$table&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Table</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_input</span><span style="color: #007700">(</span><span style="color: #0000BB">INPUT_GET</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"table_id"</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$table</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_columns</span><span style="color: #007700">());<br /><a name="l8" />&nbsp;}</span><span style="color: #0000BB">?&gt;</span>
</span>