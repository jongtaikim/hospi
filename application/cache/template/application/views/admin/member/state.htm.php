<?php /* Template_ 2.2.3 2015/12/08 15:30:47 /disk1/home/hospi/www/application/views/admin/member/state.htm */?>
<div style="width:1124px">
<div class="col-md-6">
<div class="panel no-border">
<div class="panel-heading">
<span class="font-bold">회원 지역 분포도</span>
</div>
<div class="panel-body">
<div ui-jp="plot" ui-options="
<?php echo $TPL_VAR["json_1"]?>,
{
series: { pie: { show: true, innerRadius: 0.6, stroke: { width: 3 }, label: { show: true, threshold: 0.05 } } },
colors: ['#3f51b5','#2196f3','#66cccc','#ff0099','#009966','#336600','#ffcc33','#660000','#333300','#cc9999'],
grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
tooltip: true,
tooltipOpts: { content: '%s: %p.0명' }
}
" style="height: 380px; padding: 0px; position: relative;"><canvas class="flot-base" width="235" height="380" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 235px; height: 380px;"></canvas>
<canvas class="flot-overlay" width="235"
height="380" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 235px; height: 240px;"></canvas>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel no-border">
<div class="panel-heading">
<span class="font-bold">관심수술</span>
</div>
<div class="panel-body">
<div ui-jp="plot" ui-options="
<?php echo $TPL_VAR["json_2"]?>,
{
series: { pie: { show: true, innerRadius: 0.6, stroke: { width: 3 }, label: { show: true, threshold: 0.05 } } },
colors: ['#3f51b5','#2196f3','#66cccc','#ff0099','#009966','#336600','#ffcc33','#660000','#333300','#cc9999'],
grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
tooltip: true,
tooltipOpts: { content: '%s: %p.0명' }
}
" style="height: 380px; padding: 0px; position: relative;"><canvas class="flot-base" width="235" height="380" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 235px; height: 380px;"></canvas>
<canvas class="flot-overlay" width="235"
height="380" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 235px; height: 240px;"></canvas>
</div>
</div>
</div>
</div>
</div>