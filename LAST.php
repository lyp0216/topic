<?php
session_start();
if (isset($_GET["value"])) {
    
    $aID = $_GET["value"];

    $datas = $_SESSION['reviewed'];
	$datasNum = $_GET["value"] -1;
	$articleID = $datas[$datasNum]['articleID'];
	$articleName = $datas[$datasNum]['articlename'];
	$category = $datas[$datasNum]['category'];
    $summary = $datas[$datasNum]['abstract'];
    
    $comments = $datas[$datasNum]['comments'];

    if ($comments=="") {
        $comments = "無評論";
    }
	$_SESSION['articleID'] = $articleID;

    $sql = "";
    
}
?>
<form method="post" action="lastHandle.php">
    <div>
        <p>文章編號：<span id="articleID"><?php echo $articleID; ?></span></p>
        <input type="hidden" name="articleID" value="<?php echo $articleID?>">
    </div>
    <div>
        <p>文章標題：<span><?php echo $articleName; ?></span></p>
    </div>
    <div>
        <p>文章類別：<span><?php echo $category; ?></span></p>
    </div>
    <div>
        <p>文章摘要：<span><?php echo $summary; ?></span></p>
    </div>
    
    <div>
        <p>評論：<span><?php echo $comments; ?></span></p>
    </div>

    <div>
        <input type="button" value="返回" onClick=location="ManagerFrontPage.php" />
        <input type="submit" value="確認並送出"/>
    </div>
</form>