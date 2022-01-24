
<p style="background-color:#FFFFCC"><font color="red" size="20">Y書店売上管理システム</font></p><BR>
  <body>
<div>書籍の売上履歴一覧です。売上冊数(sales)順に表示されています。<BR>
特定のジャンルを抽出できます。</div>
<BR>
<input type="text" name="first-name"  value="" placeholder="genreIDを入力してください。">
<input type="button" style="width:100px;height:50px" onclick="location.href=''" value="検索">
<BR>


<table>
<thead><tr>
	<th>BookID</th><th>title</th><th>genreID</th><th>genre</th><th>price</th><th>sales</th>
</tr></thead>

<?php foreach($data->toArray() as $obj): ?>
<tr>
	<td><?=h($obj->bookID) ?></td>
	<td><?=h($obj->title) ?></td>
	<td><?=h($obj->genreID) ?></td>
	<td><?=h($obj->genre) ?></td>
	<td><?=h($obj->price) ?></td>
	<td><?=h($obj->sales) ?></td>
</tr>
<?php endforeach; ?>
</table>
<BR>
