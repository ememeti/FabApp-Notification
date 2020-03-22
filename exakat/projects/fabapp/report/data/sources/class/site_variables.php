<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" />$sv&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><a name="l2" />if(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"<br /><a name="l3" />&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;*<br /><a name="l4" />&nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;site_variables<br /><a name="l5" />"</span><span style="color: #007700">)){<br /><a name="l6" />&nbsp;&nbsp;&nbsp;&nbsp;while(&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">()&nbsp;)&nbsp;{<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]]&nbsp;=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"value"</span><span style="color: #007700">];<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l9" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /><a name="l10" />}&nbsp;else&nbsp;{<br /><a name="l11" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">;<br /><a name="l12" />}<br /><a name="l13" /><br /><a name="l14" />class&nbsp;</span><span style="color: #0000BB">Site_Variables&nbsp;</span><span style="color: #007700">{<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;</span><span style="color: #0000BB">$notes</span><span style="color: #007700">;<br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">;<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">"/^\d+$/"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">))<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;SV&nbsp;Number'</span><span style="color: #007700">);}<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;*<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;`site_variables`<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;`id`&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #DD0000"><br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIMIT&nbsp;1;<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">)){<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">();<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]);<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setNotes</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'notes'</span><span style="color: #007700">]);<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getALL</span><span style="color: #007700">()&nbsp;{<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">;<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sv_array&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT&nbsp;*<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FROM&nbsp;`site_variables`<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;1;<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">)){<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">()){<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_push</span><span style="color: #007700">(&nbsp;</span><span style="color: #0000BB">$sv_array</span><span style="color: #007700">,&nbsp;new&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;);<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$sv_array</span><span style="color: #007700">;<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getId</span><span style="color: #007700">()&nbsp;{<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l58" /><br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()&nbsp;{<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l62" /><br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getValue</span><span style="color: #007700">()&nbsp;{<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l66" /><br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getNotes</span><span style="color: #007700">()&nbsp;{<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">notes</span><span style="color: #007700">;<br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l70" /><br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">setId</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l74" /><br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">setName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;{<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l78" /><br /><a name="l79" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br /><a name="l80" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><a name="l81" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l82" /><br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">setNotes</span><span style="color: #007700">(</span><span style="color: #0000BB">$notes</span><span style="color: #007700">)&nbsp;{<br /><a name="l84" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">notes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$notes</span><span style="color: #007700">;<br /><a name="l85" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l86" /><br /><a name="l87" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">updateValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br /><a name="l88" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;global</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">;<br /><a name="l89" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l90" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getId</span><span style="color: #007700">();<br /><a name="l91" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l92" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$stmt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"<br /><a name="l93" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE&nbsp;`site_variables`<br /><a name="l94" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SET&nbsp;`value`&nbsp;=&nbsp;?<br /><a name="l95" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHERE&nbsp;`id`&nbsp;=&nbsp;?<br /><a name="l96" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span><span style="color: #007700">)){<br /><a name="l97" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bind_param&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"si"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /><a name="l98" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><a name="l99" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /><a name="l100" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$status</span><span style="color: #007700">;<br /><a name="l101" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br /><a name="l102" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//return&nbsp;"Error&nbsp;in&nbsp;stating&nbsp;Materials&nbsp;Used.";<br /><a name="l103" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">error</span><span style="color: #007700">;<br /><a name="l104" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l105" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l106" />}<br /><a name="l107" /></span><span style="color: #0000BB">?&gt;</span>
</span>