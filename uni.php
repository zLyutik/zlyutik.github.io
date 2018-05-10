
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GSM Universal for KPMUS</title>
	<link rel="stylesheet" href="jquery/css/jq.css" type="text/css" media="print, projection, screen" />
	<link rel="stylesheet" href="calendar/tcal.css" type="text/css" media="print, projection, screen" />
	<link rel="stylesheet" href="jquery/themes/blue/style.css" type="text/css" media="print, projection, screen" />

<style>
table.main_tbl1 {
	font-family:arial;
	background-color: #CDCDCD;
	margin:10px 0pt 15px;
	font-size: 8pt;
	width: 100%;
	text-align: left;
}
table.main_tbl1 thead tr th, table.main_tbl1 tfoot tr th {
	background-color: #e6EEEE;
	border: 1px solid #FFF;
	font-size: 8pt;
	padding: 4px;
}
table.main_tbl1 thead tr .header {
	background-image: url(bg.gif);
	background-repeat: no-repeat;
	background-position: center right;
	cursor: pointer;
}
</style>

<script type="text/javascript" src="jquery/jquery-latest.js"></script> 
<script type="text/javascript" src="jquery/jquery.tablesorter.js"></script> 
<script type="text/javascript" src="jquery/js/chili/chili-1.8b.js"></script> 
<script type="text/javascript" src="jquery/js/docs.js"></script> 
<script type="text/javascript" src="calendar/tcal.js"></script> 
	<script type="text/javascript">
	$(function() {
		$("table")
			.tablesorter({widthFixed: true, widgets: ['zebra']})
			.tablesorterPager({container: $("#pager")});
	});
	</script>

<script type="text/javascript">
//$(document).ready(function() {
//	$("table").main_tbl1({
//		// передаем аргументы для заголовков и назначаем объект
//		headers: {
//			// работаем со второй колонкой (подсчет идет с нуля)
//			1: {
//				// запрет сортировки указанием свойства
//				sorter: false
//			},
//			// работаем со третьей колонкой (подсчет идет с нуля)
//			2: {
//				// запрещаем, использовав свойство
//				sorter: false
//			}
//		}
//	});
//});
</script> 

</head>

<body>
<div id="main">
<br>
Отображать данные за период &nbsp;&nbsp;с <input type="text" name="cal_sta" class="tcal" size="10"  >
<script language="JavaScript">
 new tcal ({'controlname': 'cal_sta'});
</script>
 &nbsp;&nbsp;по <input type="text" name="cal_en" class="tcal" size="10" >
<script language="JavaScript">
 new tcal ({'controlname': 'cal_end'});
</script>

&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="imei" value="868204000316504">
</form>

08:50:54 - текущее серверное время<div id="script_block" class="script_block"></div>
<table class="tablesorter">
<thead>
<tr>
<th>Время сервера</th>
<th>Время консоли</th>
<th>Событие</th>
<th>Питание</th>
<th>Напряжение<br>питания, В</th>
<th>Уровень<br>сети, %</th>
<th>Температура<br>модуля, °C</th>
<th>Баланс</th>
<th>Датчик<br>1°C<br><i><font color="#000099">(Темп внешняя)</font></i></th>
<th>Датчик<br>2°C<br><i><font color="#000099">(Внутри 2эт)</font></i></th>
<th>Зона 1<br>R</td><br><i><font color="#000099">(1эт ддвиж)</font></i></th>
<th>Зона 2<br>R</td><br><i><font color="#000099">(Дым)</font></i></th>
<th>Зона 3<br>R,Инв</td><br><i><font color="#000099">(Дым)</font></i></th>
<th>Зона 4<br>R</td><br><i><font color="#000099">(Жел будка)</font></i></th>
<th>Зона 5<br>U,Инв</td><br><i><font color="#000099">(Д влажн)</font></i></th>
<th>Зона 6<br>U,Инв</td><br><i><font color="#000099">(Крыльцо дд)</font></i></th>
<th>Зона 7<br>U</td><br><i><font color="#000099">(2эт ддвиж)</font></i></th>
<th>Зона 9<br>U</td><br><i><font color="#000099">(Измерен U)</font></i></th>
<th>Выход<br>1<br><i><font color="#000099">(Вых)</font></i></th>
<th>Выход<br>2<br><i><font color="#000099">(10с)</font></i></th>
<th>Выход<br>3<br><i><font color="#000099">(Полив )</font></i></th>
<th>Выход<br>4<br><i><font color="#000099">(3м видео)</font></i></th>
<th>Выход<br>5<br><i><font color="#000099">(Светодиод)</font></i></th>
<th>Выход<br>6<br><i><font color="#000099">(Сирена)</font></i></th>
<th>Выход<br>7<br><i><font color="#000099">(3м)</font></i></th>
<th>Группа<br>1<br><i><font color="#000099">(Основн гр)</font></i></th>
<th>IP</th></th></tr>
</thead>
<tbody>
<tr>
 <td style='font-size: 11px; color: #3D3D3D; background-color: #A8FFA8;'>2017-02-26 11:42:54</td><td>2017-02-26 11:41:56</td>
 <td></td>  <!--class="iyellow_even"-->
 <td></td>  <!--class="iyellow_even"-->
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 <td><span style="color: red"></span></td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>  <!--class="iyellow_even"-->
 <td></td>  <!--class="iyellow_even"-->
 <td></td>
 <td></td>
 <td></td> <!--class="iyellow_even"-->
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 </tbody>
 </table>
 <div id="script_ad" class="script_ad" style="display:none;"> 
C 11:42:54 по 11:42:54, раз: смена IP <b>1</b>, задержка <b>0</b>, пропадание GSM <b>0</b>, пропадание питания <b>0</b>, включение питания <b>1</b>
</div> 
  
<script type="text/javascript"> 
   // переместить его в реальную позицию отображения 
   document.getElementById('script_block').appendChild(document.getElementById('script_ad')); 
   // показать 
   document.getElementById('script_ad').style.display = 'block'; 
</script> 

<script type="text/javascript">

(function($) {
	$.extend({
		tablesorterPager: new function() {
			
			function updatePageDisplay(c) {
				var s = $(c.cssPageDisplay,c.container).val((c.page+1) + c.seperator + c.totalPages);	
			}
			
			function setPageSize(table,size) {
				var c = table.config;
				c.size = size;
				c.totalPages = Math.ceil(c.totalRows / c.size);
				c.pagerPositionSet = false;
				moveToPage(table);
				fixPosition(table);
			}
			
			function fixPosition(table) {
				var c = table.config;
				if(!c.pagerPositionSet && c.positionFixed) {
					var c = table.config, o = $(table);
					if(o.offset) {
						c.container.css({
							top: o.offset().top + o.height() + 'px',
							position: 'absolute'
						});
					}
					c.pagerPositionSet = true;
				}
			}
			
			function moveToFirstPage(table) {
				var c = table.config;
				c.page = 0;
				moveToPage(table);
			}
			
			function moveToLastPage(table) {
				var c = table.config;
				c.page = (c.totalPages-1);
				moveToPage(table);
			}
			
			function moveToNextPage(table) {
				var c = table.config;
				c.page++;
				if(c.page >= (c.totalPages-1)) {
					c.page = (c.totalPages-1);
				}
				moveToPage(table);
			}
			
			function moveToPrevPage(table) {
				var c = table.config;
				c.page--;
				if(c.page <= 0) {
					c.page = 0;
				}
				moveToPage(table);
			}
						
			
			function moveToPage(table) {
				var c = table.config;
				if(c.page < 0 || c.page > (c.totalPages-1)) {
					c.page = 0;
				}
				
				renderTable(table,c.rowsCopy);
			}
			
			function renderTable(table,rows) {
				
				var c = table.config;
				var l = rows.length;
				var s = (c.page * c.size);
				var e = (s + c.size);
				if(e > rows.length ) {
					e = rows.length;
				}
				
				
				var tableBody = $(table.tBodies[0]);
				
				// clear the table body
				
				$.tablesorter.clearTableBody(table);
				
				for(var i = s; i < e; i++) {
					
					//tableBody.append(rows[i]);
					
					var o = rows[i];
					var l = o.length;
					for(var j=0; j < l; j++) {
						
						tableBody[0].appendChild(o[j]);

					}
				}
				
				fixPosition(table,tableBody);
				
				$(table).trigger("applyWidgets");
				
				if( c.page >= c.totalPages ) {
        			moveToLastPage(table);
				}
				
				updatePageDisplay(c);
			}
			
			this.appender = function(table,rows) {
				
				var c = table.config;
				
				c.rowsCopy = rows;
				c.totalRows = rows.length;
				c.totalPages = Math.ceil(c.totalRows / c.size);
				
				renderTable(table,rows);
			};
			
			this.defaults = {
				size: 50,
				offset: 0,
				page: 0,
				totalRows: 0,
				totalPages: 0,
				container: null,
				cssNext: '.next',
				cssPrev: '.prev',
				cssFirst: '.first',
				cssLast: '.last',
				cssPageDisplay: '.pagedisplay',
				cssPageSize: '.pagesize',
				seperator: "/",
				positionFixed: false,
				appender: this.appender
			};
			
			this.construct = function(settings) {
				
				return this.each(function() {	
					
					config = $.extend(this.config, $.tablesorterPager.defaults, settings);
					
					var table = this, pager = config.container;
				
					$(this).trigger("appendCache");
					
					config.size = parseInt($(".pagesize",pager).val());
					
					$(config.cssFirst,pager).click(function() {
						moveToFirstPage(table);
						return false;
					});
					$(config.cssNext,pager).click(function() {
						moveToNextPage(table);
						return false;
					});
					$(config.cssPrev,pager).click(function() {
						moveToPrevPage(table);
						return false;
					});
					$(config.cssLast,pager).click(function() {
						moveToLastPage(table);
						return false;
					});
					$(config.cssPageSize,pager).change(function() {
						setPageSize(table,parseInt($(this).val()));
						return false;
					});
				});
			};
			
		}
	});
	// extend plugin scope
	$.fn.extend({
        tablesorterPager: $.tablesorterPager.construct
	});
	
})(jQuery);

</script>
<div id="pager" class="pager">
	<form>
		<img src="jquery/addons/pager/icons/first.png" class="first"/>
		<img src="jquery/addons/pager/icons/prev.png" class="prev"/>
		<input type="text" class="pagedisplay"/>
		<img src="jquery/addons/pager/icons/next.png" class="next"/>
		<img src="jquery/addons/pager/icons/last.png" class="last"/>

	
	</form>
</div>


<script type="text/javascript">
var visible = true;function showFun() {
	    if(visible) {
	        document.getElementById('myShowBlock' ).style.display = 'none';
	        visible = false;
	    } else {
	        document.getElementById('myShowBlock' ).style.display = 'block';
	        visible = true;
	    }
	}
</script>
</body></html>