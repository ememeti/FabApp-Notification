<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /></span><span style="color: #FF8000">/*<br /><a name="l2" />&nbsp;*<br /><a name="l3" />&nbsp;*&nbsp;&nbsp;Jonathan&nbsp;Le,&nbsp;Super&nbsp;FabLabian<br /><a name="l4" />&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;FabLab&nbsp;@&nbsp;University&nbsp;of&nbsp;Texas&nbsp;at&nbsp;Arlington<br /><a name="l5" />&nbsp;<br /><a name="l6" />&nbsp;*&nbsp;&nbsp;version:&nbsp;0.90&nbsp;beta&nbsp;(2018-03-19)<br /><a name="l7" />&nbsp;*<br /><a name="l8" />*/<br /><a name="l9" /></span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br /><a name="l10" />include_once&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">].</span><span style="color: #DD0000">'/connections/db_connect8.php'</span><span style="color: #007700">);<br /><a name="l11" />include_once&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">].</span><span style="color: #DD0000">'/class/all_classes.php'</span><span style="color: #007700">);<br /><a name="l12" /></span><span style="color: #0000BB">?&gt;<br /><a name="l13" /></span>&lt;div&nbsp;align="center"&nbsp;&gt;&lt;a&nbsp;href='http://fablab.uta.edu/policy/'&nbsp;style='color:blue'&gt;UTA&nbsp;FabLab's&nbsp;Wait&nbsp;Policy&lt;/a&gt;&lt;/div&gt;<br /><a name="l14" />&lt;table&nbsp;class="table&nbsp;table-striped&nbsp;table-bordered"&gt;<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Equipment&lt;/td&gt;<br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Now&nbsp;Serving&lt;/td&gt;<br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Next&nbsp;#&lt;/td&gt;<br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'next'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;tr&nbsp;id="next"&gt;<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;PolyPrinter&lt;/td&gt;<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&gt;&lt;h4&nbsp;id="serving"&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'serving'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h4&gt;&lt;/td&gt;<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&nbsp;title="Next&nbsp;Issuable&nbsp;Number"&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'next'</span><span style="color: #007700">]+</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">}&nbsp;</span><span style="color: #0000BB">?&gt;<br /><a name="l25" /></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'eNext'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;tr&nbsp;id="next"&gt;<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Epilog&nbsp;Laser&lt;/td&gt;<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&gt;&lt;h4&nbsp;id="eServing"&gt;E<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'eServing'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h4&gt;&lt;/td&gt;<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&nbsp;title="Next&nbsp;Issuable&nbsp;Number"&gt;E<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'eNext'</span><span style="color: #007700">]+</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">}&nbsp;</span><span style="color: #0000BB">?&gt;<br /><a name="l30" /></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'bNext'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;tr&nbsp;id="next"&gt;<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;Boss&nbsp;Laser&lt;/td&gt;<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&gt;&lt;h4&nbsp;id="bServing"&gt;B<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'bServing'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h4&gt;&lt;/td&gt;<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&nbsp;title="Next&nbsp;Issuable&nbsp;Number"&gt;B<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'bNext'</span><span style="color: #007700">]+</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">}&nbsp;</span><span style="color: #0000BB">?&gt;<br /><a name="l35" /></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'mNext'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">){&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;tr&nbsp;id="next"&gt;<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'misc'</span><span style="color: #007700">];</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&gt;&lt;h4&nbsp;id="mServing"&gt;M<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'mServing'</span><span style="color: #007700">];&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/h4&gt;&lt;/td&gt;<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;align="center"&nbsp;title="Next&nbsp;Issuable&nbsp;Number"&gt;M<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'mNext'</span><span style="color: #007700">]+</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/td&gt;<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">}&nbsp;</span><span style="color: #0000BB">?&gt;<br /><a name="l40" /></span>&lt;/table&gt;</span>