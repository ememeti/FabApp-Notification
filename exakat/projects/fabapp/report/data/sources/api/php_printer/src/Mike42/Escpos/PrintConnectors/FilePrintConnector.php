<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /></span><span style="color: #FF8000">/**<br /><a name="l2" />&nbsp;*&nbsp;This&nbsp;file&nbsp;is&nbsp;part&nbsp;of&nbsp;escpos-php:&nbsp;PHP&nbsp;receipt&nbsp;printer&nbsp;library&nbsp;for&nbsp;use&nbsp;with<br /><a name="l3" />&nbsp;*&nbsp;ESC/POS-compatible&nbsp;thermal&nbsp;and&nbsp;impact&nbsp;printers.<br /><a name="l4" />&nbsp;*<br /><a name="l5" />&nbsp;*&nbsp;Copyright&nbsp;(c)&nbsp;2014-16&nbsp;Michael&nbsp;Billington&nbsp;&lt;&nbsp;michael.billington@gmail.com&nbsp;&gt;,<br /><a name="l6" />&nbsp;*&nbsp;incorporating&nbsp;modifications&nbsp;by&nbsp;others.&nbsp;See&nbsp;CONTRIBUTORS.md&nbsp;for&nbsp;a&nbsp;full&nbsp;list.<br /><a name="l7" />&nbsp;*<br /><a name="l8" />&nbsp;*&nbsp;This&nbsp;software&nbsp;is&nbsp;distributed&nbsp;under&nbsp;the&nbsp;terms&nbsp;of&nbsp;the&nbsp;MIT&nbsp;license.&nbsp;See&nbsp;LICENSE.md<br /><a name="l9" />&nbsp;*&nbsp;for&nbsp;details.<br /><a name="l10" />&nbsp;*/<br /><a name="l11" /><br /><a name="l12" /></span><span style="color: #007700">namespace&nbsp;</span><span style="color: #0000BB">Mike42</span><span style="color: #007700">\</span><span style="color: #0000BB">Escpos</span><span style="color: #007700">\</span><span style="color: #0000BB">PrintConnectors</span><span style="color: #007700">;<br /><a name="l13" /><br /><a name="l14" />use&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">;<br /><a name="l15" /><br /><a name="l16" /></span><span style="color: #FF8000">/**<br /><a name="l17" />&nbsp;*&nbsp;PrintConnector&nbsp;for&nbsp;passing&nbsp;print&nbsp;data&nbsp;to&nbsp;a&nbsp;file.<br /><a name="l18" />&nbsp;*/<br /><a name="l19" /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">FilePrintConnector&nbsp;</span><span style="color: #007700">implements&nbsp;</span><span style="color: #0000BB">PrintConnector<br /><a name="l20" /></span><span style="color: #007700">{<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@var&nbsp;resource&nbsp;$fp<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;The&nbsp;file&nbsp;pointer&nbsp;to&nbsp;send&nbsp;data&nbsp;to.<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">protected&nbsp;</span><span style="color: #0000BB">$fp</span><span style="color: #007700">;<br /><a name="l26" /><br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Construct&nbsp;new&nbsp;connector,&nbsp;given&nbsp;a&nbsp;filename<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$filename<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"wb+"</span><span style="color: #007700">);<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">"Cannot&nbsp;initialise&nbsp;FilePrintConnector."</span><span style="color: #007700">);<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l39" /><br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">__destruct</span><span style="color: #007700">()<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"Print&nbsp;connector&nbsp;was&nbsp;not&nbsp;finalized.&nbsp;Did&nbsp;you&nbsp;forget&nbsp;to&nbsp;close&nbsp;the&nbsp;printer?"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">E_USER_NOTICE</span><span style="color: #007700">);<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l46" /><br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Close&nbsp;file&nbsp;pointer<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">finalize</span><span style="color: #007700">()<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp</span><span style="color: #007700">);<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;(non-PHPdoc)<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@see&nbsp;PrintConnector::read()<br /><a name="l58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">read</span><span style="color: #007700">(</span><span style="color: #0000BB">$len</span><span style="color: #007700">)<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">);<br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Write&nbsp;data&nbsp;to&nbsp;the&nbsp;file<br /><a name="l66" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;string&nbsp;$data<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">write</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br /><a name="l70" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$this&nbsp;</span><span style="color: #007700">-&gt;&nbsp;</span><span style="color: #0000BB">fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l73" />}<br /><a name="l74" /></span>
</span>