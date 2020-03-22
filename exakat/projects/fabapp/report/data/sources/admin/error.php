<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /></span><span style="color: #FF8000">/*<br /><a name="l2" />&nbsp;*&nbsp;&nbsp;&nbsp;CC&nbsp;BY-NC-AS&nbsp;UTA&nbsp;FabLab&nbsp;2016-2017<br /><a name="l3" />&nbsp;*&nbsp;&nbsp;&nbsp;FabApp&nbsp;V&nbsp;0.9<br /><a name="l4" />&nbsp;*/<br /><a name="l5" /></span><span style="color: #007700">include_once&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">].</span><span style="color: #DD0000">'/pages/header.php'</span><span style="color: #007700">);<br /><a name="l6" />if&nbsp;(!</span><span style="color: #0000BB">$staff&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$staff</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoleID</span><span style="color: #007700">()&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'LvlOfStaff'</span><span style="color: #007700">]){<br /><a name="l7" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Not&nbsp;Authorized&nbsp;to&nbsp;see&nbsp;this&nbsp;Page<br /><a name="l8" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location:&nbsp;/index.php'</span><span style="color: #007700">);<br /><a name="l9" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">'error_msg'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">"Insufficient&nbsp;role&nbsp;level&nbsp;to&nbsp;access,&nbsp;sorry."</span><span style="color: #007700">;<br /><a name="l10" />&nbsp;&nbsp;&nbsp;&nbsp;exit();<br /><a name="l11" />}<br /><a name="l12" /></span><span style="color: #0000BB">?&gt;<br /><a name="l13" /></span>&lt;title&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$sv</span><span style="color: #007700">[</span><span style="color: #DD0000">'site_name'</span><span style="color: #007700">];</span><span style="color: #0000BB">?&gt;</span>&nbsp;Error&lt;/title&gt;<br /><a name="l14" />&lt;div&nbsp;id="page-wrapper"&gt;<br /><a name="l15" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="row"&gt;<br /><a name="l16" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-12"&gt;<br /><a name="l17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&nbsp;class="page-header"&gt;Error&nbsp;Log&lt;/h1&gt;<br /><a name="l18" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l19" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;/.col-md-12&nbsp;--&gt;<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;/.row&nbsp;--&gt;<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="row"&gt;<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-lg-10"&gt;<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="panel&nbsp;panel-default"&gt;<br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="panel-heading"&gt;<br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i&nbsp;class="fas&nbsp;fa-bolt&nbsp;fa-lg"&gt;&lt;/i&gt;&nbsp;Error&nbsp;Log<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="panel-body"&gt;<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;table&nbsp;id="errorTable"&nbsp;class="table&nbsp;table-bordered&nbsp;table-striped"&gt;<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;thead&gt;<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;class="col-sm-2"&gt;Date&lt;/th&gt;<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;class="col-sm-2"&gt;Page&lt;/th&gt;<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;class="col-sm-6"&gt;Error&nbsp;Message&lt;/th&gt;<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&nbsp;class="col-sm-2"&gt;Staff&lt;/th&gt;<br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/thead&gt;<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(&nbsp;</span><span style="color: #0000BB">Error</span><span style="color: #007700">::</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$er&nbsp;</span><span style="color: #007700">){<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;"</span><span style="color: #007700">;<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;td&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getE_time</span><span style="color: #007700">().</span><span style="color: #DD0000">"&lt;/td&gt;"</span><span style="color: #007700">;<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;td&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPage</span><span style="color: #007700">().</span><span style="color: #DD0000">"&lt;/td&gt;"</span><span style="color: #007700">;<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;td&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMsg</span><span style="color: #007700">().</span><span style="color: #DD0000">"&lt;/td&gt;"</span><span style="color: #007700">;<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStaff</span><span style="color: #007700">())){<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;td&gt;&nbsp;&lt;i&nbsp;class='"</span><span style="color: #007700">.</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStaff</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getIcon</span><span style="color: #007700">().</span><span style="color: #DD0000">"&nbsp;fa-lg'&nbsp;title='"</span><span style="color: #007700">.</span><span style="color: #0000BB">$er</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getStaff</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getOperator</span><span style="color: #007700">().</span><span style="color: #DD0000">"'&gt;&lt;/i&gt;&lt;/td&gt;"</span><span style="color: #007700">;<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;td&gt;&lt;/td&gt;"</span><span style="color: #007700">;<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;/tr&gt;"</span><span style="color: #007700">;&nbsp;&nbsp;&nbsp;&nbsp;<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;</span><span style="color: #0000BB">?&gt;<br /><a name="l51" /></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tfoot&gt;<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Date&lt;/th&gt;<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Page&lt;/th&gt;<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Error&nbsp;Message&lt;/th&gt;<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Staff&lt;/th&gt;<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br /><a name="l58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tfoot&gt;<br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/table&gt;<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;/.col-lg-10&nbsp;--&gt;<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-lg-2"&gt;<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l66" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;/.col-lg-2&nbsp;--&gt;<br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--&nbsp;/.row&nbsp;--&gt;<br /><a name="l69" />&lt;/div&gt;<br /><a name="l70" />&lt;!--&nbsp;/#page-wrapper&nbsp;--&gt;<br /><a name="l71" /><span style="color: #0000BB">&lt;?php<br /><a name="l72" /></span><span style="color: #FF8000">//Standard&nbsp;call&nbsp;for&nbsp;dependencies<br /><a name="l73" /></span><span style="color: #007700">include_once&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">].</span><span style="color: #DD0000">'/pages/footer.php'</span><span style="color: #007700">);<br /><a name="l74" /></span><span style="color: #0000BB">?&gt;<br /><a name="l75" /></span>&lt;script&nbsp;type="text/javascript"&nbsp;charset="utf-8"&gt;<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;$('#errorTable').DataTable({<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"iDisplayLength":&nbsp;25,<br /><a name="l78" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"order":&nbsp;[[&nbsp;0,&nbsp;"desc"&nbsp;]]<br /><a name="l79" />&nbsp;&nbsp;&nbsp;&nbsp;});<br /><a name="l80" />&lt;/script&gt;</span>