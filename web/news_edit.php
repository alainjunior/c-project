<?php
	include 'baseAdmin.php';
	include 'db_connect.php';
	session_start();
?>
<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="cleditor1_4_5/jquery.cleditor.css" />
    <script src="cleditor1_4_5/jquery.cleditor.min.js"></script>

</head>

<body>

	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
	<h2 class="text-center">Новости</h2>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Заголовок</th>
					<th>Дата</th>
					<th style="width:350px">Действия</th>
				</tr>
			</thead>
			
			<?php
				echo "<a class=\"btn btn-success pull-right\" style=\"margin-left:5px\" onclick=\"news_edit('0')\"><span aria-hidden=\"true\">Создать новость</span></a>";
				$sql = "SELECT * FROM news where deleted='0' ORDER BY date DESC LIMIT 25";
				$result = $link->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["title"]."</td><td>".$row["date"]."</td>";
						if($row["published"] == '0'){
							echo "<td><a class=\"btn btn-primary\" onclick=\"news_publish('".$row["id"]."', '1')\"><span class=\"glyphicon glyphicon-arrow-up\" aria-hidden=\"true\"></span></a>";
						} else {
							echo "<td><a class=\"btn btn-primary\" onclick=\"news_publish('".$row["id"]."', '0')\"><span class=\"glyphicon glyphicon-arrow-down\" aria-hidden=\"true\"></span></a>";
						}
						echo "<a class=\"btn btn-success\" style=\"margin-left:5px\" onclick=\"news_edit('".$row["id"]."')\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>";
						echo "<a class=\"btn btn-danger\" style=\"margin-left:5px\" onclick=\"news_delete_confirm('".$row["id"]."')\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td></tr>";
					}
				} else {
					echo "<tr><td class=\"text-center\" colspan=3>Нет новостей</td></tr>";
				}
			?>
		</table>
	</div>
	
	<div class="modal fade" id="deleteModal" data-id="" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Предупреждение</h4>
				</div>
				<div class="modal-body text-center">
					<p>Вы действительно хотите удалить эту новость?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="news_delete()" data-dismiss="modal">Удалить</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="modal fade" id="editModal" data-id="" data-body="" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Новость</h4>
				</div>
				<div id="editBody" class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="news_save()" data-dismiss="modal">Сохранить</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
        $(document).ready(function() {
            $("#news_input").cleditor({
                width: 565, // width not including margins, borders or padding
                height: 250, // height not including margins, borders or padding
                controls: // controls to add to the toolbar
					"bold italic underline strikethrough subscript superscript | font size " +
					"style | color highlight removeformat | bullets numbering | outdent " +
					"indent | alignleft center alignright justify | undo redo | ",
                colors: // colors in the color popup
                    "FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF " +
                    "CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F " +
                    "BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C " +
                    "999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C " +
                    "666 900 C60 C93 990 090 399 33F 60C 939 " +
                    "333 600 930 963 660 060 366 009 339 636 " +
                    "000 300 630 633 330 030 033 006 309 303",
                fonts: // font names in the font popup
                    "Arial,Arial Black,Comic Sans MS,Courier New,Narrow,Garamond," +
                    "Georgia,Impact,Sans Serif,Serif,Tahoma,Trebuchet MS,Verdana",
                sizes: // sizes in the font size popup
                    "1,2,3,4,5,6,7",
                styles: // styles in the style popup
                    [["Paragraph", "<p>"], ["Header 1", "<h1>"], ["Header 2", "<h2>"],
                    ["Header 3", "<h3>"],  ["Header 4","<h4>"],  ["Header 5","<h5>"],
                    ["Header 6","<h6>"]],
                useCSS: false, // use CSS to style HTML when possible (not supported in ie)
                docType: // Document type contained within the editor
                    '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
                docCSSFile: // CSS file used to style the document contained within the editor
                    "",
                bodyStyle: // style to assign to document body contained within the editor
                    "margin:4px; font:10pt Arial,Verdana; cursor:text"
            });
        });
    </script>
	<script type="text/javascript">
		
		function news_publish(id, published){
			$.ajax({
				type:'POST',
				url:'ajax_news_publish.php',
				data:{
					'id':id,
					'published':published
				},
				success:function (data) {
					if(data != 'success'){
						alert(data);
					} else {
						location.reload();
					}
					
				}
			});
		}
		
		function news_delete_confirm(id){
			$('#deleteModal').data("id", id);
			$('#deleteModal').modal('show');
		}
		
		function news_delete(){
			$.ajax({
				type:'POST',
				url:'ajax_news_delete.php',
				data:{
					'id':$("#deleteModal").data("id")
				},
				success:function (data) {
					if(data != 'success'){
						alert(data);
					} else {
						location.reload();
					}
					
				}
			});
		}
		function news_edit(id){
			$('#editModal').data("id", id);
			$('#editBody').load("editNewsPanel.php?id="+id+"");
			//$('#editModal').data("body", body);
			//$("#news_input").val($('#editModal').data("body"));
			//$("#news_input").val(body);
			$('#editModal').modal('show');
		}
		
		function news_save(){
			$.ajax({
				type:'POST',
				url:'ajax_news_edit.php',
				data:{
					'id':$("#editModal").data("id"),
					'text':$("#news_input").val(),
					'title':$("#news_title").val()
				},
				success:function (data) {
					if(data != 'success'){
						alert(data);
					} else {
						location.reload();
					}
					
				}
			});
		}
		
		
		
		
		
		
	</script>
<?php
	include 'footer.php';
?>

</body>
</html>